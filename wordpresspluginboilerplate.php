<?php
/*
Plugin Name: Nombre del plugin
Plugin URI: https://tupaginaweb.com
Description: Una corta descripcion de vuestro plugin  (Maximo 140 Caracteres) 
Version: 0.0.0.1
Requires at least: 5.6.1
Requires PHP: 7.4.14
Author: Your Name
Author URI: https://tupaginaweb.com
License: MIT
License URI: https://direccionaldocumento.com
*/


include_once dirname( __FILE__ ) . '/clases/principal.class.php';

register_activation_hook(__FILE__, array('principal', 'activar'));
register_deactivation_hook(__FILE__, array('principal', 'desactivar'));
register_uninstall_hook(__FILE__,array('principal','desinstalar'));


?>