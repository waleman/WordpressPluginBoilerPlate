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
  



}


?>