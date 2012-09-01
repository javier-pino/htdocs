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
        else 
            echo 'Ocurrio un error al crear la organizacion<br/>';
        
    }
}
