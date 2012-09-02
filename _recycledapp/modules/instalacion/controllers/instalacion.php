<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Instalacion extends TD_Controller {
        
    public function index()
    {
        echo 'Se crean los elementos necesarios<br/>';
        
        //Importar la información de la organizacion
        $this->load->config('cadena_suministros');
        
        echo 'Crear la Organizacion<br/>';
        
        $org_val = $this->config->item('organization_value');
        $org_name = $this->config->item('organization_name');
        $org_desc = $this->config->item('organization_description');
        $now = new \DateTime("now");              

       
        //Crear la organización
        $org = new models\AdOrg();        
        
        $org->setValue($org_val);
        $org->setName($org_name);
        $org->setDescription($org_desc);
        $org->setCreated($now);
        $org->setUpdated($now);        

        //Guardar la entidad
        $this->em->persist($org);
        $this->em->flush();        
                        
        if ($org->getAdOrgId() > 0)  
            echo 'La organizacion fue creada exitosamente<br/>';
        else {
            echo 'Ocurrio un error al crear la organizacion<br/>';
            return;
        }
        
        //Se procede a crear el cliente
        echo 'Se procede a crear el cliente<br/>';
        
        $client = new models\AdClient();
        $client->setAdOrgId($org->getAdOrgId());        
        $client->setCreated($now);
        $client->setUpdated($now);        
        $client->setValue('cosmo maracay');
        $client->setName('Cosmopartes Maracay');
        $client->setDescription('Sede de Cosmopartes ubicada en Maracay');
        
        $this->em->persist($client);
        $this->em->flush();
        
        if ($client->getAdClientId() > 0) 
            echo 'El cliente fue creado exitosamente<br/>';
        else {
            echo 'Ocurrio un error en la creacion del cliente<br/>';
            return;
        }
                
        //Ahora se procede a crear las preferencias del cliente
        echo 'Ahora se procede a crear las preferencias del cliente<br/>';
        $info = new models\AdClientinfo();
        $info->setAdClientId($client->getAdClientId());
        $info->setAdOrgId($org->getAdOrgId());        
        $info->setCreated($now);
        $info->setUpdated($now);
        $info->setKeeplogdays(0);
        
        $this->em->persist($info);
        $this->em->flush();
                
        if ($info->getAdClientinfoId() > 0) 
            echo 'Las preferencias fueron creadas exitosamente<br/>';
        else {
            echo 'Ocurrio un error en la creacion de las preferencias<br/>';
            return;
        }
        
    }
}
