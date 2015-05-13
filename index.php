<?php

	// подключаем инклюд с обработчиком формы
	// поиска детали
	//{                                      }
	
	// выводим в <div id="menu-view"> контент
	// соглассно вводных данных
	if (isset($a)) {
		// выводим окно, после зпроса
		// пользователя на запчасть...
		$part = "part1.php"; 	
	} else {
		$part = "part0.php";}	
	

?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Документ без названия</title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<script src="/js/jquery.js" type="text/javascript"></script>
<script src="/js/script.js" type="text/javascript"></script>
</head>

<body>

    <div id="header">
    	<div style="margin:auto; width:1000px; height:70px;">
            <a href="/" title="Главная страница autosvc.ru">
                <div id="header-logo">
                	<h1>AUTOSVС.RU</h1>
                    <p>запчасти и ремонт</p>
                </div>
            </a>
            <a href="/cat/avtozapchasti"><div id="header-link1"><p align="center">Запчасти</p></div></a>
            <a href="/cat/automagazin"><div id="header-link2"><p align="center">Магазины</p></div></a>
            <a href="/cat/autoremont"><div id="header-link3"><p align="center">Ремонт</p></div></a>
            <a href="/cat/autorazborka"><div id="header-link4"><p align="center">Разборки</p></div></a>
            <a href="/cat/autoprodazha"><div id="header-link5"><p align="center">Продажа</p></div></a>
            <a href="/reg"><div id="enter-registry">Создать объявление</div></a>
        </div>
    	
    </div>
    <div id="service"></div>
	<div id="container">
        
        <h1>Поиск запчастей и услуг по разборкам, складам-магазинам и СТО</h1>
        <h2>запрос по вашей запчасти отправится 3500 продавцам</h2>
    
		<div id="menu-block"> 
			<div id="menu-left">
				
				<div class="menu-box01">
                	<div class="mb01-part01">
                      <p class="mb01-part01-line01" onclick="showContent('page1.php')">Поиск детали</p>
                      <p class="mb01-part01-line02">Отправить запрос продовцам</p>
                      <p class="mb01-part01-line03"><a href="/cat/avtozapchasti">Перейти в каталог "Запчасти"</a></p>
                    </div>
					<div class="mb01-part02">
                      <img class="mb01-part02-img" src="img/service/object01.png" />
                    </div>
					<div class="mb01-part03">
                    	<div class="mb01-part03-img"></div>
                    </div>
				</div> <!-- menu-box01 --> 
                
                <div class="menu-box02">
                    <div class="mb02-part01">
                      <hr class="hr">
                      <p class="mb02-part01-line01" onclick="showContent('page2.php')">Автомагазины</p>
                      <p class="mb02-part01-line02">Подобрать автомагазины по профилю</p>
                      <p class="mb02-part01-line03"><a href="/cat/automagazin">Перейти в каталог "Автомагазины"</a></p>
                    </div>
					<div class="mb02-part02">
                      <img class="mb02-part02-img" src="img/service/object02.png" />
                    </div>
					<div class="mb02-part03">
                    	<div class="mb02-part03-img"></div>
                    </div>
                </div> <!-- menu-box02 -->
                
                <div class="menu-box03">
                    <div class="mb03-part01">
                      <hr class="hr">
                      <p class="mb03-part01-line01" onclick="showContent('page3.php')">СТО и специалисты</p>
                      <p class="mb03-part01-line02">Список автомастерских согласно запроса</p>
                      <p class="mb03-part01-line03"><a href="">Перейти в каталог "СТО и специалисты"</a></p>
                    </div>
					<div class="mb03-part02">
                      <img class="mb03-part02-img" src="img/service/object03.png" />
                    </div>
					<div class="mb03-part03">
                    	<div class="mb03-part03-img"></div>
                    </div>
                </div> <!-- menu-box03 -->
                
                <div class="menu-box04">
                    <div class="mb04-part01">
                      <hr class="hr">
                      <p class="mb04-part01-line01" onclick="showContent('page4.php')">Разборки</p>
                      <p class="mb04-part01-line02">Подобрать авторазборки по профилю</p>
                      <p class="mb04-part01-line03"><a href="">Перейти в каталог "Разборки"</a></p>
                    </div>
					<div class="mb04-part02">
                      <img class="mb04-part02-img" src="img/service/object04.png" />
                    </div>
					<div class="mb04-part03">
                    	<div class="mb04-part03-img"></div>
                    </div>
                </div> <!-- menu-box04 -->
                
                <div class="menu-box05">
                    <div class="mb05-part01">
                    <hr class="hr">
                      <p class="mb05-part01-line01" onclick="showContent('page5.php')">Поиск автомобилей (new)</p>
                      <p class="mb05-part01-line02">Выбрать автомобиль по параметрам</p>
                      <p class="mb05-part01-line03"><a href="">Перейти в каталог "Автопродажа"</a></p>
                    </div>
					<div class="mb05-part02">
                      <img class="mb05-part02-img" src="img/service/object05.png" />
                    </div>
					<div class="mb05-part03">
                    	<div class="mb05-part03-img"></div>
                    </div>
                </div> <!-- menu-box05 -->
                 
            </div> <!--звкрываем menu-left -->
            <div id="menu-view-box">
                <div id="menu-view">
                	
                    <? require_once("inc/$part");?>
                	
                </div>
                <div id="loading" style="display: none">Идет загрузка...</div>
            </div> <!--звкрываем menu-view-box-->
        </div> <!--звкрываем menu-box-->
     <div id="content">текст<br /><br /><br /><br /><br /><br /><br />текст
     
     </div>
	</div> <!--закрываем container-->
    <div id="footer"></div>

</body>
</html>

