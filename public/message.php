<?php
session_start();
var_dump($_SESSION);
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);
include TEMPLATES_DIR .'header.php';
//include TEMPLATES_DIR . 'auth_check.php';
include TEMPLATES_DIR . 'menu_search.php';

 ?>


            
<p class="main-text" >Отправить нам сообщение</p>

                <form action="message_controller.php" method="post">
                <div class="body">
                    <div class="p-2">
                        <span>Имя:</span> <input type="surname" name="mess_name" class="mb-3 form-control ds-inpu" placeholder="Введите Ваше имя" required>
                       <span>Тема:</span> <input type="text" name="mess_desc" class="mb-3 form-control ds-input"  placeholder="Введите тему сообщения" required>
                       <span>Email:</span> <input type="email" name="mess_mail" class="mb-3 form-control ds-input" placeholder="Введите вашу почту"  required>
                        <textarea type ="text" name ="mess_text" rows="8" cols="153" placeholder='Напишите нам' required></textarea>   
                       </div>
                </div>
             
                    <button type="submit" class="btn btn-info ml-3" data-dismiss="modal">Отправить</button>
                    <button type="reset" class="btn btn-info ml-3">Сбросить</button>
                    <? include TEMPLATES_DIR . 'footer.php';?>
                </div>

              
            </form>


      
 <?php session_write_close();?>
  