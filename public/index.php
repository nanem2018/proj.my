
<?php
session_start();
//var_dump($_SESSION);
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include ENGINE_DIR . 'image_controller.php';
include ENGINE_DIR . 'goods_table_controller.php';
//include_once ENGINE_DIR . 'login_controller.php';

include TEMPLATES_DIR . 'header.php';
include TEMPLATES_DIR.'main_menu.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR.'good_image.php';
include TEMPLATES_DIR .'goods_table.php';


include TEMPLATES_DIR . 'footer.php';
  
//session_write_close();

?>

