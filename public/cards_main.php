

<?include '../engine/autoload.php';?>
<?autoload('../config');?>
<?autoload('../engine', 1, ['autoload.php']);?>
<? include TEMPLATES_DIR .'header.php';?>
<? include TEMPLATES_DIR .'main_menu.php';?>
<?include ENGINE_DIR.'goods_table_controler.php';?>
<p class="main-text" >
    Каталог товаров
</p>

<div class="row">
<? foreach($goods as $item):?>
    <div class="col-sm-6"> 
        <div class="card-deck">
                
            <div class="card">
            <img src="img/images_small/<?=$item['id_img']?>.jpg" class="card-img-top" alt="img" height="400" width="220">
                <h5 class="card-title"><?=$item['good_name']?></h5>
                <p class="card-text">Описание: <?=$item['good_description']?></p>
                <p class="card-text">Цена: <?=$item['good_price']?> Рублей</p>
                <a href="card.php" class="btn btn-success">Перейти к товару</a>
            </div>
        </div>
    </div>  
  <? endforeach;?> 



</div>

 <? include TEMPLATES_DIR . 'footer.php';?>
 

