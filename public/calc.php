<?php

session_start();
//var_dump($_SESSION);
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include TEMPLATES_DIR . 'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR . 'menu_search.php';
//include_once ENGINE_DIR . 'login_controller.php';
?>

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="/public/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         
         
<body>
  

<div id="calculator">
<div class="top">
	<form action="" method="POST">
		<label>Переменная 1</label>
        <input type="number" name="x">
        <label>Переменная 2</label>
        <input type="number" name="y">
  			<div class="btn-keys"><input type="submit" name="sign" value="+" class="keys"></input></div>
  		<div class="btn-keys">	<input type="submit" name="sign" value="-" class="keys"></input></div>
      		<div class="btn-keys"><input type="submit" name="sign" value="*" class="keys"></input></div>
     	<div class="btn-keys">	<input type="submit" name="sign" value="/" class="keys"></input></div>
	</form>
         <?
         $x = $_POST['x'];
 		 $y=$_POST['y'];
 			if (isset($_POST['sign'])){
 				if($x==="" || $y===""){
 					$result="Введите корректные значения";
 	}
 				else{ 
 		switch($_POST['sign']) {
 	case '+':
        $result = $x + $y;
        break;
	 case '-':
        $resultz = $x - $y;
        break;
 	case '*':
        $result = $x * $y;
        break;
  	case '/':
       if($y!=0) $result = $x/$y;
      else $result=0;
   }

 	}
 }
          
   ?>

       
        <div class="eval "> Результат: <?=$result?></div>
		
	</div>
</div>

   
  
    
<!-- PrefixFree -->
<script src="http://thecodeplayer.com/uploads/js/prefixfree-1.0.7.js" type="text/javascript" type="text/javascript"></script>
</body>
<? include TEMPLATES_DIR .'footer.php';?>

