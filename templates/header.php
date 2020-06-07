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
</nav>