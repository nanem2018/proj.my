 <?php
 
// session_start();
//var_dump($_SESSION);
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include TEMPLATES_DIR .'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR .'main_menu.php';
include ENGINE_DIR.'goods_table_controller.php';
//include_once ENGINE_DIR . 'login_controller.php';
?>
<p class="main-text" >
    Каталог товаров
</p>


<div class="row m-2">
<? foreach($goods as $item):?>
      
    <div class="col-sm-6"> 
        <div class="card-deck">
            
            <div class="card">
           
            <img src="img/images_small/<?=$item['id_img']?>.jpg" class="card-img-top" alt="img" height="400" width="220">
                <h5 class="card-title"><?=$item['good_name']?></h5>
                <p class="card-text">Описание: <?=$item['good_description']?></p>
                <p class="card-text">Цена: <?=$item['good_price']?> Рублей</p>
          <div class="card-body">
                <button type="button"  
                        class="btn m-1 card-link btn-success toBasketBtn"
                        data-id="<?=$item['good_id']?>"
                        data-price="<?=$item['good_price']?>"
                        data-name="<?=$item['good_name']?>"     
                       >
                    В корзину
                </button>   
                
         <!--   <form action="card.php" method="get">
                <input type="hidden" value="<?//=$item['good_name'];?>" name="name">
                <input type="hidden" value="<?//=$item['good_id'];?>" name="tovar">
               <button type="submit" class="btn m-1 card-link btn-success" >Перейти к товару</button>
            </form>   
            
            --->
         </div>
          </div>
            
        </div>
    </div>
 <script src="app.js"></script>
    
     <? endforeach;?> 

 

</div>

 <? include TEMPLATES_DIR . 'footer.php';?>
 

