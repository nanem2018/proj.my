<?php
 
 //session_start();
 //var_dump($_SESSION);
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include TEMPLATES_DIR .'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR .'main_menu.php';
include ENGINE_DIR.'goods_table_controller.php';
//include ENGINE_DIR.'card_controller.php';
?>

<?$index=(int)$_GET['tovar']?> 


<?for ($i=0;$i<=count($goods);$i++):?>
<? if ((int)$index==(int)$goods[$i]['good_id']):?>

<p class="main-text" >
    <?=$goods[$i]['good_name']?>
</p>

<div class="row m-2">

    
    <div class="col-sm-8"> 
        <div class="card-deck">
            
            <div class="card">
    
            <img src="img/images_small/<?=$goods[$i]['id_img']?>.jpg" class="card-img-top" alt="img"  hight="50%" width="50%" >
                <h5 class="card-title"><?$goods[$i]['good_name']?></h5>
                <p class="card-text">Описание: <?=$goods[$i]['good_description'];?></p>
                <p class="card-text">Цена: <?=$goods[$i]['good_price']?> Рублей</p>
                
              </div>
        </div>
    </div>
    
<?else: ;?>
    
<?endif;?>
<?endfor;?>

</div>



             
    

 <? include TEMPLATES_DIR . 'footer.php';?>
 

