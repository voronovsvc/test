<?php

?>





<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Документ без названия</title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<script src="/js/jquery.js" type="text/javascript"></script>
<script>
	
	
	
	$(document).ready(function() {
		
		// отображаем блок с формой запрса
		$('.claim-button').click(function (e) {
			$('.claim-center').css({'height':'105px'});
			$('.claim-close').css({'height':'20px'});
			$(this).css({'height':'0px', 'border':'0px'});
		});
		
		$('.claim-close').click(function (e) {
			$('.claim-center').css({'height':'0px'});
			$('.claim-close').css({'height':'0px'});
			$('.claim-button').css({
									'margin':'auto',
									'border':'1px solid #AEAFB0',
									'border-radius':'2px',
									'width':'35px',
									'height':'18px',
									'background-color':'#C3C4C4',
									'cursor':'pointer'
									});
		});
		
		// меняем цвет ценника
		$('.advert').mouseover(function () {
			$(this).find('.ap-left,.ap-center,.ap-right')
				.css({'background-color':'#EF7F1A'});
		});
		
		$('.advert').mouseout(function () {
			$(this).find('.ap-left,.ap-center,.ap-right')
				.css({'background-color':'#D8D9D9'});
		});
		
		/*отображение полного текста ссылки в заголовке 
		на странице Запчасти и Автопродажа*/
		$('.advert-name').mouseover(function (e) {
			$(this).removeClass('advert-name');
			$(this).addClass('advert-nameAdd');
		});
		
		$('.advert-name').mouseout(function (e) {
			$(this).addClass('advert-name');
			$(this).removeClass('advert-nameAdd');
		});
		
				
	}); <!-- конец ready-->

</script>
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
        
		<div id="claim-block">
        	<div class="claim-top">
            	<p>Запчасти<span>(самостоятельный подбор)</span></p>
                <div class="claim-close"><p>Закрыть</p></div>
            </div>
            <div class="claim-center">скрывающийся блок с формой</div>
            <div class="claim-bottom">
            	<div class="claim-button">
                	<div class="cb-line"></div>
                    <div class="cb-line"></div>
                    <div class="cb-line"></div>
                </div>
            </div>
        </div> <!--звкрываем claim-block-->
     <div id="content">
     	<div id="catAvtozapchasti">
        
        	<div class="advert">
            	<div class="advert-img"></div>
                <div class="advert-name">
                	<a href="/cat/vizitka">Сиденье водительское супер пуперское</a>
                </div>
                <div class="advert-brend">
                	<p>Марка: <span>Chevrolet</span></p>
                </div>
                <div class="advert-model">
                	<p>Модель: <a href="">Aveo 2006 - 2010</a></p>
                </div>
                <div class="advert-city">
                	<p>Город: <a href="">Симферополь</a></p>
                </div>
                <div class="advert-desc">
                	<p>
                    Деталь в отличном состоянии.
                    </p>
                </div>
                <div class="advert-infoPrice">
                	<div class="advert-info">
                    	<img src="../../img/service/icon11.png" />
                        <img src="../../img/service/icon12.png" />
                        <img src="../../img/service/icon13.png" />
                        <img src="../../img/service/icon14.png" />
                    </div>
                    <div class="advert-price">

                    	<div class="ap-right">
                        	<div class="apt-right"></div>
                        00</div>
                        <div class="ap-center">9000000</div>
                        <div class="ap-left">
                        	<div class="apt-left"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="advert">
            	<div class="advert-img"></div>
                <div class="advert-name">
                	<a href="">Крыло переднее правое</a>
                </div>
                <div class="advert-brend">
                	<p>Марка: <span>Chevrolet</span></p>
                </div>
                <div class="advert-model">
                	<p>Модель: <a href="">Aveo 2006 - 2010</a></p>
                </div>
                <div class="advert-city">
                	<p>Город: <a href="">Симферополь</a></p>
                </div>
                <div class="advert-desc">
                	<p>
                    Деталь в отличном состоянии.
                    </p>
                </div>
                <div class="advert-infoPrice">
                	<div class="advert-info">
                    	<img src="../../img/service/icon11.png" />
                        <img src="../../img/service/icon12.png" />
                        <img src="../../img/service/icon13.png" />
                        <img src="../../img/service/icon14.png" />
                    </div>
                    <div class="advert-price">

                    	<div class="ap-right">
                        	<div class="apt-right"></div>
                        00</div>
                        <div class="ap-center">199000000</div>
                        <div class="ap-left">
                        	<div class="apt-left"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advert">
            	<div class="advert-img"></div>
                <div class="advert-name">
                	<a href="">Крыло переднее правое</a>
                </div>
                <div class="advert-brend">
                	<p>Марка: <span>Chevrolet</span></p>
                </div>
                <div class="advert-model">
                	<p>Модель: <a href="">Aveo 2006 - 2010</a></p>
                </div>
                <div class="advert-city">
                	<p>Город: <a href="">Симферополь</a></p>
                </div>
                <div class="advert-desc">
                	<p>
                    Деталь в отличном состоянии.
                    </p>
                </div>
                <div class="advert-infoPrice">
                	<div class="advert-info">
                    	<img src="../../img/service/icon11.png" />
                        <img src="../../img/service/icon12.png" />
                        <img src="../../img/service/icon13.png" />
                        <img src="../../img/service/icon14.png" />
                    </div>
                    <div class="advert-price">

                    	<div class="ap-right">
                        	<div class="apt-right"></div>
                        00</div>
                        <div class="ap-center">9000000</div>
                        <div class="ap-left">
                        	<div class="apt-left"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advert">
            	<div class="advert-img"></div>
                <div class="advert-name">
                	<a href="">Крыло переднее правое</a>
                </div>
                <div class="advert-brend">
                	<p>Марка: <span>Chevrolet</span></p>
                </div>
                <div class="advert-model">
                	<p>Модель: <a href="">Aveo 2006 - 2010</a></p>
                </div>
                <div class="advert-city">
                	<p>Город: <a href="">Симферополь</a></p>
                </div>
                <div class="advert-desc">
                	<p>
                    Деталь в отличном состоянии.
                    </p>
                </div>
                <div class="advert-infoPrice">
                	<div class="advert-info">
                    	<img src="../../img/service/icon11.png" />
                        <img src="../../img/service/icon12.png" />
                        <img src="../../img/service/icon13.png" />
                        <img src="../../img/service/icon14.png" />
                    </div>
                    <div class="advert-price">

                    	<div class="ap-right">
                        	<div class="apt-right"></div>
                        00</div>
                        <div class="ap-center">10</div>
                        <div class="ap-left">
                        	<div class="apt-left"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advert">
            	<div class="advert-img"></div>
                <div class="advert-name">
                	<a href="">Крыло переднее правое</a>
                </div>
                <div class="advert-brend">
                	<p>Марка: <span>Chevrolet</span></p>
                </div>
                <div class="advert-model">
                	<p>Модель: <a href="">Aveo 2006 - 2010</a></p>
                </div>
                <div class="advert-city">
                	<p>Город: <a href="">Симферополь</a></p>
                </div>
                <div class="advert-desc">
                	<p>
                    Деталь в отличном состоянии.
                    </p>
                </div>
                <div class="advert-infoPrice">
                	<div class="advert-info">
                    	<img src="../../img/service/icon11.png" />
                        <img src="../../img/service/icon12.png" />
                        <img src="../../img/service/icon13.png" />
                        <img src="../../img/service/icon14.png" />
                    </div>
                    <div class="advert-price">

                    	<div class="ap-right">
                        	<div class="apt-right"></div>
                        00</div>
                        <div class="ap-center">9000000</div>
                        <div class="ap-left">
                        	<div class="apt-left"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advert">
            	<div class="advert-img"></div>
                <div class="advert-name">
                	<a href="">Крыло переднее правое</a>
                </div>
                <div class="advert-brend">
                	<p>Марка: <span>Chevrolet</span></p>
                </div>
                <div class="advert-model">
                	<p>Модель: <a href="">Aveo 2006 - 2010</a></p>
                </div>
                <div class="advert-city">
                	<p>Город: <a href="">Симферополь</a></p>
                </div>
                <div class="advert-desc">
                	<p>
                    Деталь в отличном состоянии.
                    </p>
                </div>
                <div class="advert-infoPrice">
                	<div class="advert-info">
                    	<img src="../../img/service/icon11.png" />
                        <img src="../../img/service/icon12.png" />
                        <img src="../../img/service/icon13.png" />
                        <img src="../../img/service/icon14.png" />
                    </div>
                    <div class="advert-price">

                    	<div class="ap-right">
                        	<div class="apt-right"></div>
                        00</div>
                        <div class="ap-center">9000000</div>
                        <div class="ap-left">
                        	<div class="apt-left"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="advert">
            	<div class="advert-img"></div>
                <div class="advert-name">
                	<a href="">Крыло переднее правое</a>
                </div>
                <div class="advert-brend">
                	<p>Марка: <span>Chevrolet</span></p>
                </div>
                <div class="advert-model">
                	<p>Модель: <a href="">Aveo 2006 - 2010</a></p>
                </div>
                <div class="advert-city">
                	<p>Город: <a href="">Симферополь</a></p>
                </div>
                <div class="advert-desc">
                	<p>
                    Деталь в отличном состоянии.
                    </p>
                </div>
                <div class="advert-infoPrice">
                	<div class="advert-info">
                    	<img src="../../img/service/icon11.png" />
                        <img src="../../img/service/icon12.png" />
                        <img src="../../img/service/icon13.png" />
                        <img src="../../img/service/icon14.png" />
                    </div>
                    <div class="advert-price">

                    	<div class="ap-right">
                        	<div class="apt-right"></div>
                        00</div>
                        <div class="ap-center">9000000</div>
                        <div class="ap-left">
                        	<div class="apt-left"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div> <!--закрываем catAvtozapchasti-->
        <div class="next-back">
        	<a href=""><div class="next"></div></a>
            <div class="xt_b"></div>
            <a href=""><div class="back"></div></a>
        </div>
     </div> <!--закрываем content-->
	</div> <!--закрываем container-->
    <div id="footer"></div>

</body>
</html>