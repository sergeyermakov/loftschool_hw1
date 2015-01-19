<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Сайт портфолио</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="fonts/fira.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/modal.css">

</head>

<body>

<div onclick="show('none')" id="modalback"></div>
    <div class="addnew-window" id="addnew-window">
        <div class="addnew-heading">
            <span class="modalhead">Добавление проекта</span>
            <i class="fa fa-times" onclick="show('none')"></i>
        </div>
        <div class="addnew-content clearfix">
            <form action="#" class="addnew-form">
                <div class="input-label right">
                    <label for="project-name">Название проекта</label>
                    <input class="text-input" type="text" name="project-name" id="project-name" placeholder="Введите название">
                </div>
                <div class="input-label right">
                    <label for="upload">Картинка проекта</label>
                    <div class="file_upload" >
                    
                        <button type="button"><i class="fa fa-cloud-download fa-2x"></i></button>
                        <div >Файл не выбран</div>
                        <input type="file" class="text-input" >
                    </div>
                </div>
                <div class="input-label right">
                    <label id="url" for="project-url">URL проекта</label>
                    <input type="text" class="text-input" name="project-url" id="project-name" placeholder="Добавьте ссылку">
                </div>
                <div class="input-label right">
                    <label for="about">Описание</label>
                    <textarea class="area text-input" name="about" rows="5" cols="40" id="about" placeholder="Пара слов о Вашем проекте"></textarea>
                </div>
                <input class="submit btn" type="submit" name="submit" value="Добавить">
            </form>
        </div>
    </div>
    <div class="warp">
        <div class="header">
            <div class="logo"></div>
            <div class="social">
                <ul>
                    <li class="vk">
                        <a href="https://vk.com/ermakov_s"></a>
                    </li>
                    <li class="twitter">
                        <a href="https://twitter.com/xom94ok"></a>
                    </li>
                    <li class="fb">
                        <a href="https://www.facebook.com/sergey.ermakov.186"></a>
                    </li>
                    <li class="github">
                        <a href="https://github.com/sergeyermakov"></a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="gradient"></div>
        <div class="container">