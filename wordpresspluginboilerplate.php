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


if ( ! defined( 'ABSPATH' ) ) {
	exit; 
}

/* definimos las rutas */
define( 'RMENU__FILE__', __FILE__ );
define( 'RMENU_PLUGIN_BASE', plugin_basename( RMENU__FILE__ ) ); // direccion raiz del plugin
define( 'VIEWS_PATH', plugin_dir_path( RMENU__FILE__ ) ); // utilizada para las vistas
define( 'ASSETS_PATH', plugin_dir_url(RMENU__FILE__));  //utilizada para los assets como imagenes


include_once dirname( __FILE__ ) . '/clases/principal.class.php';

register_activation_hook(__FILE__, array('principal', 'activar'));
register_deactivation_hook(__FILE__, array('principal', 'desactivar'));
register_uninstall_hook(__FILE__,array('principal','desinstalar'));

//agregar menus
add_action( 'admin_menu',array('principal','crearmenus'));


?>