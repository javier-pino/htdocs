<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Archivo: user.php
 * Descripción del archivo :
 * Modelo de codeigniter que realiza las operaciones con la entidad
 * user para account
 *
 * Autor: Javier Pino
 * Fecha: 01/08/2012
 */

class User Extends TD_Model {

    /********************** Seguridad y cifrado ****************************/
    const CHAR_MIX = 0;
    const CHAR_NUM = 1;
    const CHAR_WORD = 2;
    
    static $SECRET_KEY = '@4!@#$%@';

    /** Esta función codifica una contraseña*/
    private function encode_password($password) {
        return md5($password . self::$SECRET_KEY);
    }

    /** Crea un usuario en la base de datos
     * $validator y $hash son variables para el BUHO
     * $validator para el link
     * $hash      para el id en el BUHO     
     */
    public function create_from_buho($user_buho, $email, $password, $client)
    {
        $user_row = new models\User();
        
        $user_row->setEmail($email);
        $user_row->setPassword($this->encode_password($password));
        $user_row->setCreateTime(time());
        $user_row->setLoginTime(time());
        $user_row->setIp($this->input->ip_address());

        if (isset ($user_buho['hash'])) {
            $user_row->setHash($user_buho['hash']);
        }
        if (isset ($user_buho['validator'])) {
            $user_row->setSecret($user_buho['validator']);
        }
        $user_row->setClient($client);
        $user_row->setRealname($user_buho['realname']);
        $user_row->setEnable('N');
        $user_row->setBirthday($user_buho['birthday']);
        $user_row->setCedula($user_buho['identifier']);
        $user_row->setMobile($user_buho['mobile']);

        //Almacenarlo en la base de datos
        try {            
            $this->em->persist($user_row);
            $this->em->flush();
        } catch (Exception $e) {
            //var_dump($e);
        }
        return $user_row;
    }

    /**
     * $validator y $hash son variables para el BUHO
     * $validator para el link
     * $hash      para el id en el BUHO
     */
    public function register_from_buho($user_buho, $client, $validator=NULL, $hash=NULL) {

        $this->load->model('account/user');
        $td_user = $this->user->create_from_buho($user_buho, $user_buho['email'], $user_buho['password'], $client);

        $td_user->setCityId($user_buho['city_id']);
        $td_user->setCity($user_buho['city']);
        $td_user->setGender($user_buho['gender']);

        //Completar los datos
        if ($hash)
            $td_user->setHash($hash);

        if ($validator) {
            $td_user->setSecret ($validator);
        } else {
            $td_user->setSecret(md5($this->generate_secret(12)));
        }

        //Almacenarlo en la base de datos
        try {            
            $this->em->persist($td_user);
            $this->em->flush();
        } catch (Exception $e) {
            //var_dump($e);
        }       
        return $td_user;        
    }

     /*
      * Se actualizan el usuario de acuerdo a la información del buho
      */
    public function update_from_buho (models\User &$user, $user_buho, $password) {

        if($user_buho['verified'] == 1) {
            $user->setEnable('Y');
        } elseif($user_buho['verified'] == 0) {
            $user->setEnable('N');
        }

        if(!is_null($user_buho['validator']) && isset($user_buho['validator'])) {
            $user->setRecode($user_buho['validator']);
            $user->setSecret($user_buho['validator']);
        }

        if(!is_null($user_buho['identifier']) && isset($user_buho['identifier'])) {
            $user->setCedula($user_buho['identifier']);
        }

        if(!is_null($user_buho['mobile_phone']) && isset($user_buho['mobile_phone'])) {
            $user->setMobile($user_buho['mobile_phone']);
        }

        if(!is_null($user_buho['birthday']) && isset($user_buho['birthday'])) {
            $user->setLocal(strtotime($user_buho['birthday']));
        }

        if(!is_null($user_buho['hash']) && isset($user_buho['hash'])) {
            $user->setHash($user_buho['hash']);
        }

        if(!is_null($user_buho['origin_client']) && isset($user_buho['origin_client'])) {
            $user->setClient($user_buho['origin_client']);
        }

        if(!is_null($password) && isset($password)) {
            $user->setPassword($this->encode_password($password));
        }

        try {
            $this->em->persist($user);
            $this->em->flush();
        } catch (Exception $e) {
            //var_dump($e);
        }
    }

    /** Validar que no exista otra usuario en la base de datos */
    public function existing_user ($email, $username, $cedula) {

        $query = $this->qb->select('u')
                  ->from('models\User', 'u')
                  ->where('u.email = :user_email')
                  ->orWhere("u.username != '' and u.username = :user_name" )
                  ->orWhere('u.cedula = :user_cedula')
                  ->getQuery();

        $query->setParameter('user_email', $email)
                ->setParameter('user_name', $username)
                ->setParameter('user_cedula', $cedula);

        $result = array();
        try {
            $result = $query->getArrayResult();
        } catch (Exception $e) {
            //var_dump($e);
        }

        //Si no existe es valido
        if (!empty($result))
            return TRUE;
        else
            return FALSE;
    }


        /** Genera el campo de secreto de un usuario */
    function generate_secret($len=6, $type=self::CHAR_WORD) {
        $secret = '';
        for ($i = 0; $i < $len;  $i++) {
            if ( self::CHAR_NUM==$type ){
				if (0==$i) {
					$secret .= chr(rand(49, 57));
				} else {
					$secret .= chr(rand(48, 57));
				}
            }else if ( self::CHAR_WORD==$type ){
                $secret .= chr(rand(65, 90));
            }else{
                if ( 0==$i ){
                    $secret .= chr(rand(65, 90));
                } else {
                    $secret .= (0==rand(0,1))?chr(rand(65, 90)):chr(rand(48,57));
                }
            }
        }
        return $secret;
    }


    /** Agrega intereses a un usuario */
    function add_interest(models\User $user, $interests) {

        try {
             //Eliminar todos los anteriores
            $query = $this->qb->select('i')
                ->from('models\UserInterest', 'i')
                ->where('i.userId =' .$user->getId())
                ->getQuery();        

            $result = $query->getResult();
            foreach ($result as $each) {
                $this->em->remove($each);
            }

            //Agregar los nuevos intereses
            if ($interests != NULL && !empty ($interests)) {                
                foreach ($interests as $id => $interest) {
                    if($interest==1){
                        $interest_model = new \models\UserInterest();
                        $interest_model->setUserId($user->getId());
                        $interest_model->setInterestId($id);
                        $this->em->persist($interest_model);
                    }
                }
            }
            //Comitear
            $this->em->flush();
            
        } catch (Exception $e) {
            //var_dump($e);
        }
    }

}

/* Fin de archivo user.php */
/* Ubicación: */
