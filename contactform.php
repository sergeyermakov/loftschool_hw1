<?
include 'header.php';
include 'nav.php';
?>
            <div class="main">
                <div class="contact-form">
                    <div class="contact-head">
                        У Вас интересный проект? Напишите мне
                    </div>
                    <div class="contact-body clearfix">
                        <form action="#" class="ajaxmail">

                            <div class="input-label name left">
                                <label for="inputName">Имя</label>

                                
                                    <input class="text-input name-input" type="text" name="inputName" placeholder="Как к Вам обращаться" id="inputName">
                                    
                                

                            </div>

                            <div class="input-label email right">
                                <label for="inputEmail">Email</label>
                                
                                    <input class="text-input email-input" type="email" name="inputEmail" placeholder="Куда мне писать" id="inputEmail">
                                    
                                

                            </div>
                            <br>

                            <div class="input-label textarea left">
                                <label for="textarea">Сообщение</label>
                                
                                    <textarea class="text-input area" rows="8" cols="56" name="text" id="textarea" placeholder="Кратко в чем суть"></textarea>
                                    
                                
                            </div>
                            <br>
                            <div class="input-label right" id="capcha">
                            
                            

                                Введите 
                                <label for="inputCaptha">код</label>, указанный на картинке
                                <br>
                                <img id="captcha" src="./securimage/securimage_show.php" alt="CAPTCHA Image" style="width: 188px; border: 1px solid #48CBE8; border-radius: 3px;"/>
                                
                                    <input class="text-input capcha-input" type="text" name="captcha_code" maxlength="6" placeholder="Введите код" id="inputCaptha">
                                    <a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">другая картинка</a>

                                

                                <br>
                                <br>
                                <br>
                            </div>


                            <button type="submit" class="btn submit">Отправить</button>
                            <input class="reset btn" type="reset" name="reset" value="Очистить">
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
<?php 
    include 'footer.php';
 ?>
