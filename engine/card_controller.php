

<?
$db=mysqli_connect("localhost","root","","geekbrains") or die('No connect');


$sql=mysqli_query($db, 'SELECT * FROM `goods` WHERE `good_id`=`2`');

$cards=[];
while ($row=mysqli_fetch_assoc($sql)) {
    $cards[]=$row;
    }
  mysqli_close($db);?>