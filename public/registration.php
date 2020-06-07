
<?
//session_start();
//var_dump($_SESSION);
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);

//include_once ENGINE_DIR . 'login_controler.php';

include TEMPLATES_DIR . 'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR . 'menu_search.php';

?>



<div class="container" style="margin-top:30px">
<div class="col-md-12 col-md-offset-1">
    <div class="panel panel-default">
  <div class="panel-heading"><h3 class="panel-title"><strong>Регистрация </strong></h3>
      
  </div>
  
  <div class="panel-body">
   <form role="form" action="registration_controler.php" method="post">
  
            <div class="row">
    			<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Имя" tabindex="1" required>
					</div>
				</div>
               
			</div>
			<div class="form-group">
				<input type="text" name="display_name" id="display_name" class="form-control " placeholder="Логин" tabindex="3" required>
			</div>
			<div class="form-group">
				<input type="email" name="reg_email" id="email" class="form-control " placeholder="Ваша почта" tabindex="4" required>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="password" name="reg_pass" id="password" class="form-control " placeholder="Пароль" tabindex="5">
					</div>
			</div>
	<!--		<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control " placeholder="Повторите пароль" tabindex="6">
					</div>
				</div>--->
			</div>
                                    
                 <!--                   <div class="input-group">
                                      <div class="checkbox" style="margin-top: 0px;">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Запомнить
                                        </label>
                                      </div>
                                    </div>
                    --->                
  <button type="submit" class="btn btn-success">Зарегистрировать</button>
  
  
</form>
  </div>
</div>
</div>
</div>
<?php include TEMPLATES_DIR . 'footer.php';?>

