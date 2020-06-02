<?php
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

//include ENGINE_DIR . 'image_controller.php';
//include ENGINE_DIR . 'goods_table_controler.php';

 include TEMPLATES_DIR . 'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR.'menu_search.php';
?>
<!DOCTYPE html>
<html lang="ru">
<!---<?php
$title="Контакты";
$h1="Напишите нам";
$year=date("Y");
?>
    <head>
    <style>
#templatemo_body{
    background: url(img/templatemo_body.jpg) repeat;
}
#templatemo_body_wrapper {
    background: url(img/templatemo_body_top.jpg) repeat-x top
}
#templatemo_header {
    background: url(img/templatemo_header_bg.png) no-repeat bottom; 
}

#templatemo_menubar {
    background: url(img/templatemo_menubar.png) no-repeat;
}

#templatemo_main {
    background: url(img/templatemo_main_bg.png) repeat-y;
}
 </style>
        <meta charset="UTF-8">
        <title><?php echo $title ?></title>
    <link rel="stylesheet" href="../public/css/menu.css"> 
         <link rel="stylesheet" href="../public/css/contact.css"> 
                  <link rel="stylesheet" href="../public/css/header.css"> 
    </head>
    <body id='templatemo_body' >
    <?php require_once('../templates/header.php');?>
         <center><h1><?php echo $h1; ?></h1></center>
         <script>
         function form_val(){
    cls=document.forms[0].elements;
    for(var i=0;i<class.length;i++){
        if(cls[i].type==='text' || cls[i].type==='number'|| cls[i].type==='email'){
            var count=cls[i].value;
            if(cls[i].type==='text' && count.length<10){
              result='Вы мало написали';
            }

            elseif (cls[i].type==='number' && count.length>11){
                result='Вы вели неправильный телефон';
            }

            elseif(cls[i].type=='email' && count.length<6){
                result="странное мыло";
            }
        }

    }
   document.write(result);
}
</script>
-->
        <form action="mail.php" method="POST"  class="contact_form" name='form'>
             <label>Тема:</label><input type="text" min='6'><br>
             <label>Имя:</label><input type="text" min='4' ><br>
             <label>Телефон:</label><input type="number" min='10'><br>
             <label>E-mail:</label><input type="email"><br>
             <textarea rows="10" cols="50" placeholder='Напишите нам'></textarea>
             <input type='submit' class='btn btn-outline-success my-2 my-sm-0' onclick='form_val()'>
             <input type='reset' value='Сбросить текст'  class='btn btn-outline-success my-2 my-sm-0'>
        </form>
        <script>
        result=form_val();
        document_write(result);
        </script>

       
        </body>
</html>

