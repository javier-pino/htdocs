<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Archivo: login.php
 * Descripción del archivo :
 * Maneja algunos métodos comunes a las interfaces de inicio de sesión 
 *
 * Autor: Javier Pino
 * Fecha: 07/08/2012
 */

class Login extends TD_Model {

    /** Recuerda al usuario, guardando su sesión en una cookie */
    public function rememberLogin($user) {

        //Guardar cookies en tudescuenton/codeigniter
        $value = $user['id'] . '@'. $user['password'];
        $value = base64_encode($value);
        $cookie = array(
            'name'   => '421a_ru',
            'value'  => $value,
            'expire' => 30*86400,
            'path'   => '/',
        );
        $this->input->set_cookie($cookie);
    }

    /** Recuerda al usuario, guardando su sesión en una cookie */
    public function forgetLogin() {

        $this->load->helper('cookie');
        delete_cookie('421a_ru');

    }
}

/* Fin de archivo login.php */
/* Ubicación: */
