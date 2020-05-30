<?php
$db=mysqli_connect("localhost","root","","geekbrains") or die('No connect');


$sql=mysqli_query($db, 'SELECT * FROM `goods`');
//$image_info= getAssocResult('SELECT * FROM `main` ORDER BY `id`');
$images=[];
while ($row=mysqli_fetch_assoc($sql)) {
    $images[]=$row;
    }
  mysqli_close($db);?>