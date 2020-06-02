<?php
          //session_start();
include '../engine/autoload.php';
autoload('../config');
autoload('../engine', 1, ['autoload.php']);
include '../templates/header.php';
include TEMPLATES_DIR . 'menu_search.php';
 ?>


            
<p class="main-text" >
   Отправить нам сообщение
</p>

                <form>
                <div class="body">
                    <div class="p-2">
                       <span>Имя:</span> <input name="mess_name" class="mb-3 form-control ds-input" placeholder="Введите Ваше имя">
                       <span>Тема:</span> <input name="mess_desc" class="mb-3 form-control ds-input" placeholder="Введите тему сообщения">
                       <span>Email:</span> <input name="mess_mail" class="mb-3 form-control ds-input" placeholder="Введите вашу почту">
                        <textarea rows="8" cols="153" placeholder='Напишите нам'></textarea>   
                       </div>
                </div>
             
                    <button type="button" class="btn btn-info ml-3" data-dismiss="modal">Отправить</button>
                    <button type="reset" class="btn btn-info ml-3">Сбросить</button>
                </div>
            </form>


      
 
