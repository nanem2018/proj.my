<?php
 
 //session_start();
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include TEMPLATES_DIR .'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR .'main_menu.php';
include ENGINE_DIR.'cabinet_controller.php';
?>

<div class="alert alert-info card mb-3" >
  <div class="row no-gutters">
    
    <div class="col-md-12">
    <? foreach($users as $item):?>
      <div class="card-body">
        <h5 class="card-title"><?=$item['user_name']?></h5>
        <p class="card-text"><?=$item['user_login']?></p>
        </div>
      <? endforeach;?>
    </div>
  </div>
</div>