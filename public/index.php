
<?php

include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include ENGINE_DIR . 'image_controller.php';
include ENGINE_DIR . 'goods_table_controler.php';

 include TEMPLATES_DIR . 'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR.'main_menu.php';
//include TEMPLATES_DIR .'search.php';

include TEMPLATES_DIR.'good_image.php';
include TEMPLATES_DIR .'goods_table.php';
//include TEMPLATES_DIR.'cards_main.php';

//include TEMPLATES_DIR . 'modalWindow.php';
include TEMPLATES_DIR . 'footer.php';
  


?>

