<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/login.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-----  for logout-
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 for logout-------->


    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>


    <title>I-Shop</title>
</head>


<body>

<div class="container">
	<script language="javascript" type="text/javascript"><!--
var d = new Date();

var day=new Array("Воскресенье","Понедельник","Вторник",
"Среда","Четверг","Пятница","Суббота");

var month=new Array("января","февраля","марта","апреля","мая","июня",
"июля","августа","сентября","октября","ноября","декабря");

document.write(day[d.getDay()]+" " +d.getDate()+ " " + month[d.getMonth()]
+ " " + d.getFullYear() + " г.");
//--></script>
<nav class="navbar navbar-light" style="background-color: #F0FFF0;" >

<div>

    <?php if($_SESSION['isAuth']):?>
        <span class="navbar-brand">Приветствую Вас, <?=$_SESSION['user_name']?></span>
        <form action="session_destroy.php" method="post">
            <input name="logout" type="submit" class="btn btn-outline-danger" value="Выход">
        </form>
    <?php else:?>


        <span class="navbar-brand">Здравствуйте, гость, Вы не авторизованны</span>
        <a href="/login.php" class="btn btn-outline-info" role="button"
           aria-pressed="true">Авторизация</a>

            <?php endif;?>

</div>
<div class="btn-group ml-auto">
                <button class="btn btn btn-outline-info btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <svg class="bi bi-bag" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14 5H2v9a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5zM1 4v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4H1z"/>
  <path d="M8 1.5A2.5 2.5 0 0 0 5.5 4h-1a3.5 3.5 0 1 1 7 0h-1A2.5 2.5 0 0 0 8 1.5z"/>
</svg> Корзина
                </button>
                <div class="dropdown-menu dropdown-menu-right basketPanel">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Имя</th>
                                <th scope="col">Цена</th>
                                <th scope="col">Количество</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <tr>
                                <th colspan="2" scope="row">Итого:</th>
                                <td colspan="3">
                                    <span class="total">0</span>
                                    <i class="fas fa-ruble-sign"></i>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
</nav>