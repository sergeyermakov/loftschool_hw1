<?
include 'header.php';
include 'nav.php';
?>




<div onclick="show('none')" id="modalback"></div>
    <div class="addnew-window" id="addnew-window">
        <div class="addnew-heading">
            <span class="modalhead">Добавление проекта</span>
            <i class="fa fa-times rotate" onclick="show('none')"></i>
        </div>
        <div class="addnew-content clearfix">
            <form method="post" action=""  enctype="multipart/form-data" class="addnew-form">
                <div class="input-label right">
                    <label for="projectname">Название проекта</label>
                    <input class="text-input" type="text" name="projectname" id="projectname" placeholder="Введите название">
                </div>
                <div class="input-label right">
                    <label for="fileupload">Картинка проекта</label>
                    <div class="file_upload" >
                    
                        <button type="button"><i class="fa fa-cloud-download fa-2x"></i></button>
                        <div >Файл не выбран</div>
                        <input type="file" name="fileupload" class="text-input" id="fileupload">
                    </div>
                    <div id="progress">
                        <div class="bar" style="width: 0%;"></div>
                    </div>
                </div>
                <div class="input-label right">
                    <label id="url" for="projecturl">URL проекта</label>
                    <input type="text" class="text-input" name="projecturl" id="projecturl" placeholder="Добавьте ссылку">
                </div>
                <div class="input-label right">
                    <label for="about">Описание</label>
                    <textarea class="area text-input" name="about" rows="5" cols="40" id="about" placeholder="Пара слов о Вашем проекте"></textarea>
                </div>
                <input class="submit btn" type="submit" name="submit" value="Добавить">
            </form>
        </div>
    </div>


            <div class="main">
                <div class="post clearfix">
                    <div class="heading">
                        <span>Мои работы</span>
                    </div>
                    <div class="content">
                        <ul class="portfolio clearfix">
                            <li class="portfolio-item">
                                <div class="view third-effect">
                                    <img src="img/preview1.png" />
                                    <div class="mask"></div>
                                    <div class="gotolink">
                                        <a href="http://www.set-network.ru" class="info" title="Go to site">set-network.ru</a>
                                    </div>
                                </div>
                                <a href="http://www.set-network.ru">www.set-network.ru</a>
                                <br>
                                <span>Сайт интернет-провайдера ООО "Сеть"</span>
                            </li>
                            <li class="portfolio-item">
                                <div class="view third-effect">
                                    <img src="img/preview2.png" />
                                    <div class="mask"></div>
                                    <div class="gotolink">
                                        <a href="http://fridzon.ru" class="info" title="Go to site">fridzon.ru</a>
                                    </div>
                                </div>
                                <a href="http://www.fridzon.ru">www.fridzon.ru</a>
                                <br>
                                <span>Сайт бухгалтерской фирмы ООО "Бух Оптим"</span>
                            </li>
                            <li class="portfolio-item">
                                <div class="view third-effect">
                                    <img src="img/preview3.png" />
                                    <div class="mask"></div>
                                    <div class="gotolink">
                                        <a href="http://www.advokat255.ru" class="info" title="Go to site">advokat255.ru</a>
                                    </div>
                                </div>
                                <a href="http://www.advokat255.ru">www.advokat255.ru</a>
                                <br>
                                <span>Сайт для адвокатского кабинета №255</span>
                            </li>
                            <li class="portfolio-item">
                                <div class="view third-effect">
                                    <img src="img/preview4.png" />
                                    <div class="mask"></div>
                                    <div class="gotolink">
                                        <a href="http://www.statusmo.ru" class="info" title="Go to site">statusmo.ru</a>
                                    </div>
                                </div>
                                <a href="http://www.statusmo.ru">www.statusmo.ru</a>
                                <br>
                                <span>Сайт для агентства недвижимости Статус</span>
                            </li>
                            <li class="portfolio-item">
                                <div class="view third-effect add">

                                    <div class="mask"></div>
                                    <div class="gotolink">
                                        <a href="#" class="plus" title="Add new project" onclick="show('block')"><i class="fa fa-plus-square fa-3x"></i></a>
                                    </div>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br> Добавить проект
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
<?php 
    include 'footer.php';
 ?>
