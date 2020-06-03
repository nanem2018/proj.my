



<div class ="cover-img">
  <? $i=4; foreach($images as $item):?>	
 <div class ="cover"><a href="/img/images/<?=$item['id_img']?>.jpg"><img class="img" height="300" width="300" alt="image" src="/img/images_small/<?=$item['id_img']?>.jpg"></a>
  </div>
<?$i++; if($i>=7){break;}?>
<? endforeach;?> 

</div>

  