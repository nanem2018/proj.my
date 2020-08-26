<?php
 
 session_start(['read_and_close' => true]);
//var_dump($_SESSION);
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include TEMPLATES_DIR .'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR .'main_menu.php';
//include_once ENGINE_DIR . 'login_controller.php';
include ENGINE_DIR.'cabinet_controller.php';
?>


<div class="alert alert-info card mb-3" >


  <div class="row no-gutters">
 
    <div class="col-md-12">
          <div class="card-body">
        <h5 class="card-title"><?=$_SESSION['user_name']?></h5>
        <p class="card-text"><?=$_SESSION['user_login']?></p>
        </div>
        
    
    </div>
  </div>
 


<body>
 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <script src="script/app.js"></script>
</body>




<?php //session_write_close();?>