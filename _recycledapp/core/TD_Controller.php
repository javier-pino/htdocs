<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Descripción de la clase :
 *
 * Clase Global que se espera se utilice en vez de usar CI_controller
 * Carga el querybuilder del entity manager
 *
 * Determina el dispositivo, ademas que redirecciona a los controladores necesarios
 * en caso de ser movil o no
 *
 * Autor: Javier Pino
 * Fecha: 16/07/2012
 */

require APPPATH."third_party/MX/Controller.php";

/** Esta clase permite crear controladores que no verifiquen el dispositivo
 * pero que carguen las variables de la base de datos  */
class TD_Controller extends MX_Controller {

    //Declaro las propiedades con tipo, para que sea el tipo adecuado y netbeans
    //pueda detectarlas

    /**
     * @var Doctrine\ORM\EntityManager
     */
    public $em = null;

    /**
     * @var \Doctrine\ORM\QueryBuilder
     */
    public $qb = null;
   
    /** Contruye el objeto con las funciones de base de datos ya cargadas,
     * ademas de haber determinado el dispositivo */
    public function  __construct()
    {
        parent::__construct();

        //Instantiate a Doctrine Entity Manager, Querybuilder, Database
        $this->load->database();
        $this->em = $this->doctrine->em;
        $this->qb = $this->em->createQueryBuilder();
    }
}


/** Esta clase permite crear controladores que verifiquen que el usuario
 * haya iniciado sesión  */
class TD_Login_Controller extends TD_Controller {

    /**
     * @var models\User
     */
    private $login_user = NULL;


    /** Contruye el objeto con las funciones y determina si el usuario está logueado */
    public function  __construct()
    {
        parent::__construct();

        //Validar la sesión de tudescuenton
        $this->load->library('php_session');
        $user_id = $this->php_session->get( 'user_id');

        //Si la sesión no existe, entonces se debe eliminar de la sesión de ci el valor
        if (!$user_id)
        {
            $this->session->unset_userdata('user_id');

            //Se asume que no se encuentra porque no se ha iniciado sesion o se
            //venció la sesion de td
            
            //Buscar el cookie
            $login_cookie = $this->get_login_cookie();
            if ($login_cookie) {
                $result = $this->em->getRepository('models\User')->findBy
                        (array(
                            'id' => $login_cookie[0],
                            'password' => $login_cookie[1],
                        ));
                
                //Si se encuentra, iniciar la sesión sino entonces buscar el cookie de inicio de sesión
                if (!empty ($result)) {
                    $this->login_user =  $result[0];
                    $this->session->set_userdata('user_id', $this->login_user->getId());
                }
            }          
        } else
        {
            //En el caso de que si exista, loguear al usuario en codeigniter
            //No hace falta desde codeigniter pero si, cuando se inicio en td
            $this->session->set_userdata('user_id', $user_id);

            //Si existe el id, entonces se busca al usuario logueado
            $this->login_user = $this->em->find('models\User', $user_id);
        }
    }

    /** Obtiene el cookie de sesión de tudescuenton - codeigniter para iniciar el usuario */
    private function get_login_cookie() {
        $cookie = $this->input->cookie('421a_ru');
        if ($cookie) {
            $cookie = base64_decode($cookie);
            $cookie = explode('@', $cookie, 2);
            return $cookie;        
        } else
            return false;        
    }

    /** Función que loguea al usuario, y redirige al usuario a account*/
    public function need_login() {

        /** Si no está logueado, redirige al usuario a la ventana de login */
        if ($this->login_user == NULL) {
            
            $this->load->helper('url');
            $url = base_url('account/login');;
            redirect($url, 'refresh');            
        } 
    }

    /** Retorna el usuario loguado, en casop de que exista */
    public function get_login_user() {
        return $this->login_user;
    }

    /** Retorna un booleano que indica si el usuario está conectado o no*/
    public function is_login() {

        if ($this->login_user !== NULL) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

}

