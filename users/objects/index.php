<?php

	session_start();
	
	// получаем ключ $close с параметром active убиваем сессию
	if ($_GET[close]) {
		unset($_SESSION[phoneObject]);
		session_destroy();
	}
	
	// проверяем есть ли сессия есть, то переадресовываем, если нет, код читается дальше 
	if (!isset($_SESSION[phoneObject])) {
					
		exit(header( 'Location: /reg' ));
	}
	
	

	header("Content-Type:text/html;charset=utf-8");
	// подключаем глобальное Ядро апвтоподключением классов и с функциями
	require_once('../../classes/autosvcGlobalCore.php');
	
	
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01
Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Документ без названия</title>
<link href="/css/objects.css" rel="stylesheet" type="text/css">
<script src="/js/jquery.js" type="text/javascript"></script>
<script>
	
	$(document).ready(function() {
				
		// управление чекбоксами в Специализации 
		$(".ecсlLeft :checkbox").click(function() {
			if($(".ecсlLeft :checked").length>6) this.checked = false;
		});
		
	}); <!-- конец ready-->

</script>
</head>

<body>

	<div id="header">
    	<div id="head">
        	<div id="logo">
            	<a href="/">AUTOSVC.RU</a>
            </div>
            <div id="close">
                <a href="/users/objects/?close=active">Выйти</a>
            </div>
        </div>
    </div>
    <div id="container">
    	<div id="content">
        
        	<div class="tab"></div>
            
        	<? 
            											/*
			ключ откывающий  блок controlWindow.
														*/
			$aoc = new autosvcObjectCore;
			$aoc->page (GP ($_GET['name_page'],$_POST['name_page']));
			
			/*if ($_GET['name_page'])
			$aoc->page (GP($_GET['name_page'])) ;
			else
			$aoc->page (GP($_POST['name_page']));*/
			?>
            
            <div id="objectBlock">
            	<div class="obLeft">
                    <div class="oblUser">
						<div class="oblUserImg"></div>
                        <div class="oblUserContent">
                        	<div class="oblUserName">
                            	<p>"МИГ" Станция ТО</p>
                            </div>
                            <div class="oblUserAddress">
                            	<p>Адрес: <span>г. Симферополь, ул. Гавена, 125</span></p>
                            </div>
                            <div class="oblUserPhone">
                            	<p>Телефон: <span>+79787690607</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="oblUserStatus">
                    	<p>Ваша Визитка не публикуется. <a href="">Как активировать публикацию?</a></p>
                    </div>
                    
                </div>
                <div class="obRight">
                	<div class="claimClients">
                    	<div class="ccTop">
                        	<p>Последние запросы по запчастям</p> 
                        </div>
                        <p><a href="">15.06.2015 Крыло переднее правое Chevrolet Aveo, 2006, Симферополь</a></p>
                        <p><a href="">15.06.2015 Крыло переднее правое Chevrolet Aveo, 2006, Симферополь</a></p>
                        <p><a href="">15.06.2015 Крыло переднее правое Chevrolet Aveo, 2006, Симферополь</a></p>
                        <p><a href="">15.06.2015 Крыло переднее правое Chevrolet Aveo, 2006, Симферополь</a></p>
                        <p><a href="">15.06.2015 Крыло переднее правое Chevrolet Aveo, 2006, Симферополь</a></p>
                        <p>Все активные запросы можно посмотреть в разделе «Сообщения»</p>
                    </div>
                </div>
            </div>
            
        	<div id="menuBlock">
            	<div id="mbLeft">
                    <div class="mbBox">
                    	<div class="mbBoxTop">
                        	<p>Объявления autosvc</p>
                        </div>
                        <div class="mbBoxBottom">
                        	<p><a href="">Мои объявления</a></p>
                        	<p><a href="/users/objects?name_page=dobavit-zapchast">Добавить запчасть</a></p>
                            <p><a href="/users/objects?name_page=dobavit-avtomobil">Добавить автомобиль</a></p>
                        </div>
                    </div>
                    
                </div> <!--закрываем mbLeft-->
                
                <div id="mbCenter">
                	<div class="mbBox">
                    	<div class="mbBoxTop">
                        	<p>Настройки</p>
                        </div>
                        <div class="mbBoxBottom">
                        	<p><a href="/users/objects?name_page=dobavit-informaciju">Добавить информацию</a></p>
                            <p><a href="/users/objects?name_page=izmenit-region">Регистрационные данные</a></p>
                            <p><a href="/users/objects?name_page=izmenit-dannye-vizitke">Изменить данные в визитке</a></p>
                        </div>
                    </div>
                    
                </div ><!--закрываем mbCenter-->
                
                <div id="mbRight">
                	<div class="mbBox">
                    	<div class="mbBoxTop">
                        	<p>Инструкции autosvc</p>
                        </div>
                        <div class="mbBoxBottom">
                            <p><a href="">Как работать с сервисом</a></p>
                            <p><a href="">Пользовательское соглашение</a></p>
                        </div>
                    </div>
					
                </div> <!--закрываем mbRight-->
            </div> <!--закрываем menuBlock-->
            
        </div> <!--закрываем content-->
        
	</div> <!--закрываем container-->
    
    
	<div id="footer"></div>
</body>
</html>