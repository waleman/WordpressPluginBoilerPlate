<?php


class principal{


    public static function activar(){
      if (is_network_admin() || isset($_GET['activate-multi'])) {
        wp_die('Lo sientimos, Este plugin no es compatible con WPMU.', 'Plugin Name');
      }

   
    } 

    public static function desactivar(){
    }

    public static function desinstalar(){  
    }

    function crearmenus(){
      add_menu_page(
          'Titulo de la pagina principal del plugin ',//Titulo de la pagina
          'R Menu',// Titulo del menu
          'manage_options', // Capability
          VIEWS_PATH .'/admin/views/configuracion.view.php', //slug
          null, //function del contenido
          ASSETS_PATH . '/admin/assets/img/icon.png',//icono
          '20' //priority
      );
    }

    public function vistaConfiguracion(){
      return "<h1>Hola kpullo</h1>";

    }
  

 

}


?>