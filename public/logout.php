
<?
//session_start();
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

include_once ENGINE_DIR . 'login_controller.php';

include TEMPLATES_DIR . 'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR . 'main_menu.php';
//print_r($_SESSION);
?>



<div class="container" style="margin-top:30px">
<div class="col-md-12 col-md-offset-1">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Регистрация </strong></h3>
      <div style="float:right; font-size: 80%; position: relative; top:-30px"><a href="#">Забыли пароль?</a></div>
  </div>
  
  <div class="panel-body">
   <form role="form">
   <div class="alert alert-danger">
                <a class="close" data-dismiss="alert" href="#">×</a>Неккоректное имя или пароль!
            </div>
            <div class="row">
    			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Имя" tabindex="1">
					</div>
				</div>
               
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control " placeholder="Логин" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control " placeholder="Ваша почта" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control " placeholder="Пароль" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control " placeholder="Повторите пароль" tabindex="6">
					</div>
				</div>
			</div>
                                    
                                    <div class="input-group">
                                      <div class="checkbox" style="margin-top: 0px;">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Запомнить
                                        </label>
                                      </div>
                                    </div>
                                    
  <button type="submit" class="btn btn-success">Войти</button>
  
  <hr style="margin-top:10px;margin-bottom:10px;" >
  
  <div class="form-group">
                                    
                                                                           
                                </div> 
</form>
  </div>
</div>
</div>
</div>
<?php include TEMPLATES_DIR . 'footer.php';