<?php
 
 //session_start();
 //var_dump($_SESSION);
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include TEMPLATES_DIR .'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR .'main_menu.php';
//include ENGINE_DIR.'goods_table_controller.php';
?>
<?
$item = $_POST['id_tovar']; 

echo 'Получили'.$item;

?>
<p class="main-text" >
<?=$item['good_name']?>
</p>

<div class="row">

    <div class="col-sm-6"> 
        <div class="card-deck">
             
            <div class="card">
            <img src="img/images/<?=$item['id_img']?>.jpg" class="card-img-top" alt="img" height="400" width="220">
                <h5 class="card-title"><?=$item['good_name']?></h5>
                <p class="card-text">Описание: <?=$item['good_description']?></p>
                <p class="card-text">Цена: <?=$item['good_price']?> Рублей</p>
              </div>
        </div>
    </div>  


 

</div>

 <? include TEMPLATES_DIR . 'footer.php';?>
 

 <?php session_write_close();?>