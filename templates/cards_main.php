
<? include 'header.php';?>
<? include 'main_menu.php';?>
<?include '../engine/autoload.php';?>
<?autoload('../config');?>
<?autoload('../engine', 1, ['autoload.php']);?>
<?include '../engine/goods_table_controler.php';?>
<p class="main-text" >
    Каталог товаров
</p>

<div class="row">
<? foreach($goods as $item):?>
    <div class="col-sm-6"> 
        <div class="card-deck">
                
            <div class="card">
            <img src="../public/img/images/<?=$item['id_img']?>.jpg" class="card-img-top" alt="img" height="400" width="200">
                <h5 class="card-title"><?=$item['good_name']?></h5>
                <p class="card-text">Описание: <?=$item['good_description']?></p>
                <p class="card-text">Цена: <?=$item['good_price']?> Рублей</p>
                <a href="#" class="btn btn-success">Перейти к товару</a>
            </div>
        </div>
    </div>  
  <? endforeach;?> 



</div>

 <? include 'footer.php';?>
 

