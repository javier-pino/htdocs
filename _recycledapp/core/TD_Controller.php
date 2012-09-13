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

/** Esta clase permite crear controladores que verifiquen el dispositivo */
class TD_Device_Controller extends TD_Controller {

    /**
     * @var Device_Storage
     */
    public $device_storage = null;

    //Atributos que pueden ser utilizados para mostrar el link a la versión móvil o desktop
    public $alternative_url = '';

    /** Contruye el objeto con las funciones y determina el dispositivo */
    public function  __construct()
    {
        parent::__construct();

        //Determinar el controlador invocado
        $this->load->helper('url');        
        $module = $this->uri->segment(1);
        
        //Determinar el dispositivo y la preferencia del usuario
        $this->device_storage = $this->load->library('device_storage');
        $use_mobile = $this->device_storage->useMobile();

        //Determinar el controlador destino
        $change_destination = NULL;
        if (strcasecmp($module, 'movil') == 0) { //Se solicito un modulo movil

            //Determinar el modulo destino
            $mobile_module = $this->uri->segment(2);

            //Se evita que vaya a td/index
            if (strcasecmp($mobile_module, 'index') == 0)
                $mobile_module = '';

            //Si no debe usar mobile, redirigirlo a la version desktop
            if (!$use_mobile) {
                //Si la preferencia es no usar movil entonces
                $change_destination = base_url($mobile_module);
            }

        } else { //Se solicitó un módulo distinto a movil

            if ($use_mobile) {
                //Si la preferenca es usar movil entonces cambiar la direccion
                $change_destination = base_url('movil/'.$module );
            }
        }

        //Cargar la configuracion
        $this->config->load('device'); //Cargar la configuracion
        
        //Determinar, los url alternativos para el cambio de version
        $preference = $this->device_storage->retrieveDevicePreference();
        $controller = 'restful/account/devicepreference';       
        if ($preference == $this->config->item('DESKTOP_PREFERENCE')) {            
            $this->alternative_url = base_url($controller.'?preference='.
                    $this->config->item('MOBILE_PREFERENCE').'&url='. urlencode(current_url()) );
        } else if ($preference == $this->config->item('MOBILE_PREFERENCE')) {
            $this->alternative_url = base_url($controller.'?preference='.                    
                    $this->config->item('DESKTOP_PREFERENCE').'&url='. urlencode(current_url()) );
        } else {
            //No tiene preferencia, entonces determinar la opuesta
            $is_mobile = $this->device_storage->retrieveDeviceInfo()->is_mobile();
            if ($is_mobile) {
                $this->alternative_url = base_url($controller.'?preference='.                    
                    $this->config->item('DESKTOP_PREFERENCE').'&url='. urlencode(current_url()) );
            } else {
                $this->alternative_url = base_url($controller.'?preference='.
                    $this->config->item('MOBILE_PREFERENCE').'&url='. urlencode(current_url()) );
            }
        }

        //Si se tiene que cambiar la direccion, hacerlo
        if ($change_destination !== NULL) {
            redirect($change_destination, 'refresh');
        }
    }

}

/** Esta clase permite crear controladores que verifiquen que el usuario
 * haya iniciado sesión  */
class TD_Login_Controller extends TD_Device_Controller {

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


/**
 * Esta clase mantiene aquellos métodos y datos que corresponden a los controladores móviles
 */
class TD_Mobile_Controller extends TD_Login_Controller {

    //Para reusar las varibles de jquery mobile
    protected $data = array();

    /** Constructor de la clase, carga las variables y css necesarios */
    public function  __construct() {

        //LLamar al constructor del padre
        parent::__construct();

        //Para evitar llamar varias veces a base_url  para los css y js se usa array_map
        //Indicar los css para movil
        $this->data['css'] = array_map('base_url',
                array(                    
                    'css/jquery.mobile.td.theme-1.1.1.min.css', //Se debe colocar para usar el tema generado
                    'css/jquery.mobile.structure-1.1.1.min.css', //Estructura de jquery mobile                    
                    'css/jquery.mobile.td.custom.css', //Configuraciones especiales para tudescuenton.com                    
                ));

        //Indicar los css para movil
        $this->data['js'] = array_map('base_url',
                array(
                    'js/movil/jquery-1.7.1.min.js', //Incluir jquery libraries
                    'js/movil/jquery.mobile.td.mobileinit.js', //Cuando se desee, se puede llamar a este inicializador de jquery mobile
                    'js/movil/jquery.mobile.ios-orientationchange-fix.min.js', // Arregla un problema de orientación de i-os
                    'js/movil/jquery.mobile-1.1.1.min.js',                     //Incluir jquery mobile                    
                    'js/movil/jquery.mobile.td.custom.js' //Funcionalidades personalizadas de tudescuenton                    
                )
        );

        //Cargar los mensajes informativos
        $this->data['messages'] = array(
            'notice' => array(),
            'error' => array());

        $data['image_url'] = 'http://localhost/static/';

    }

    /** Carga la vista de acuerdo al contenido especificado*/
    protected function load_as_content($view) {

        //Cargar las vistas
        $this->load->view('movil/cabecera_html', $this->data);
        $this->load->view('movil/cabecera_navbar', $this->data);
        $this->load->view('movil/cabecera_mensajes', $this->data);
        $this->load->view($view, $this->data);
        $this->load->view('movil/fondo_html', $this->data);

    }

}
