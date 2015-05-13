<?php

	header("Content-Type:text/html;charset=utf-8");
	session_start();
	require_once('../config.php');
	
	
	// проверяем есть ли сессия есть, то переадресовываем, если нет, код читается дальше 
	if (isset($_SESSION[phoneObject])) {
					
		exit(header( 'Location: /users/objects' ));
	}
	
	
	$form	= get_post($_GET['form'], $form); // открывает форму регистрации, по умолчанию форма авторизации
	$aForm	= get_post($_GET['aForm'], $aForm);
	$rForm	= get_post($_GET['rForm'], $rForm);
	
	//$rfStatusObject		= get_post($_GET['rfStatusObject'],	$rfStatusObject);
	//$rfNameObject		= get_post($_GET['rfNameObject'],		$rfNameObject);
	$rfCountryObject	= get_post($_GET['rfCountryObject'],	$rfCountryObject);
	$rfRegionObject		= get_post($_GET['rfRegionObject'],		$rfRegionObject);
	$rfCityObject		= get_post($_GET['rfCityObject'],		$rfCityObject);
	$rfPhoneObject		= get_post($_GET['rfPhoneObject'],		$rfPhoneObject);
	$rfPassObject		= get_post($_GET['rfPassObject'],		$rfPassObject);
	$afPhoneObject		= get_post($_GET['afPhoneObject'],		$afPhoneObject);
	$afPassObject		= get_post($_GET['afPassObject'],		$afPassObject);
	
	$idCountry		= get_post($_GET['idCountry'],		$idCountry);	// получаем от select Страна
	$nameCountry	= get_post($_GET['nameCountry'],	$nameCountry);	// получаем от select Страна
	
	$idRegion		= get_post($_GET['idRegion'],		$idRegion);		// получаем от select Регион
	$nameRegion		= get_post($_GET['nameRegion'],		$nameRegion);	// получаем от select Регион
	
	$idCity			= get_post($_GET['idCity'],			$idCity);		// получаем от select Город
	$nameCity		= get_post($_GET['nameCity'],		$nameCity);		// получаем от select Город
	
	// выводим подключение к базе данных (чо то усложнил)
	$obj = new conection;
	$db = $obj->connectDB();
		
		
	// код-обработчик формы регистрации
	if (isset($rForm)) { // ключ*, прилетающий из формы регистрации
		if (
		//isset($rfStatusObject) and
		//isset($rfNameObject) and
		isset($rfCountryObject) and
		isset($rfRegionObject) and
		isset($rfCityObject) and
		isset($rfPhoneObject) and
		isset($rfPassObject)
		) {
			// проверяем совпадение телефонов в системе
			$req = "SELECT phoneObject FROM objects WHERE phoneObject='$rfPhoneObject'";
			$result = mysql_query($req, $db);
			if (!$result) {
				$qw = 'Запрос '.$req.' не прошол.';
			} else {$array = mysql_fetch_array($result);}
			if ($array[phoneObject] ==  $rfPhoneObject) {
				
				$message = '
				<div class="rMessage">
					<p>
					<span>Системное сообщение:</span> 
					Не верный номер телефона. Пользователь, с номером '.$rfPhoneObject.', 
					уже зарегистрирован. Если это Ваш номер телефона, перейдите по ссылке
					"Авторизация" далее "Восстановить пароль" и следуйте инструкциям.
					</p>
				</div>
				';
				
			} else {
				// если все в порядке записываем в базу удаляем переменную $form
				$req = "INSERT INTO objects (
									
										idCity,
										phoneObject,
										passwordObject
										
									) values (
										
										
										'$rfCityObject',
										'$rfPhoneObject',
										'$rfPassObject'
										
									)";
									
				$result = mysql_query($req, $db);
				if ($result) {
					
					$message = '
					<div class="rMessage">
						<p>
						<span>Системное сообщение:</span> 
						Регистрация прошла удачно! Введите номер 
						телефона и пароль указанный при регистрации.
						</p>
					</div>
					';
					unset($form);// убиваем переменную тем самым выводим форму авторизации
					
				} else {
					
					$message = '
					<div class="rMessage">
						<p>
						<span>Системное сообщение:</span> 
						Ошибка записи '.$req.'.
						</p>
					</div>
					';
					
				}
				
			}
			
		} else {
			// выводит сообщение на две формы Авторизация и Регистрация
			if (isset($_GET[submit])) { // управление выводом сообщения
				$message = '
				<div class="rMessage">
					<p>
					<span>Системное сообщение:</span> 
					Для регистрации все поля обязательны для заполнения.
					</p>
				</div>
				';
			}
		} 
	}// закрыли код-обработчик формы регистрации
	
	
	// код-обработчик формы авторизации пользователя
	if (isset($aForm)) { // ключ*, прилетающий из формы авторизации
		if (
		isset($afPhoneObject) and
		isset($afPassObject)
		) {
			// делаем запрос в таблицу objects
			// 1 проверяем наличие введенного телефона 
			// 2 сверяем пароль
			$req = "SELECT phoneObject, passwordObject FROM objects WHERE phoneObject='$afPhoneObject'";
			$result = mysql_query($req, $db);
			if (!$result) {
				$qw = 'Запрос '.$req.' не прошол.';
			} else {$array = mysql_fetch_array($result);}
			if ($array[passwordObject] == $afPassObject) {
				
				// здесь рожаем сессию
				$message = 'пройдена авторизация';
				$_SESSION[phoneObject] = $afPhoneObject;
				if (isset($_SESSION[phoneObject])) {
					
					exit(header( 'Location: /users/objects' ));
					
				} else {
					$message = '
					<div class="rMessage">
						<p>
						<span>Системное сообщение:</span> 
						Сессия не создана.
						</p>
					</div>
					';
				}
				
			} else {
				$message = '
				<div class="rMessage">
					<p>
					<span>Системное сообщение:</span> 
					Неверный телефон или пароль. Убедитеcь, что телефон
					записан в формате +79787690607.
					</p>
				</div>
				';
			}
			
			
			
		} else {
			if (isset($_GET[submit])) { // управление выводом сообщения
				$message = '
				<div class="rMessage">
					<p>
					<span>Системное сообщение:</span> 
					Для авторизации все поля обязательны для заполнения.
					</p>
				</div>
				';
			}
		}
	}// закрываем код-обработчик формы авторизации пользователя

	
	
/*

	Коментарии к терминам
	1. Ключ* - обработчик формы срабатывает только тогда,
	когда из формы через метод гет или пост получает условленную
	переменную, при условии что она существует выполняется код
	в операторных скобках

*/	


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
     <div id="content">
     	<div id="registretion">
            
			<? // выводим сообщения системы
            echo $qw;
            echo $message;
            ?>
            
        	<div class="autchInfo">
            	<p>Мы обнаружили, что Вы не авторизировались. 
                Пройдите авторизацию или зарегистрируйтесь в катклоге.</p>
            </div>
            
			<? if (!isset($form)) {?>
            <form action="/reg" method="get">
            <input name="aForm" type="hidden" value="active">
            <div class="aForm">
            	<div class="afLine"> 
                	<div class="aflLeft"><p></p>Моб телефон</div>
                    <div class="aflRight"><input name="afPhoneObject" type="text"></div>
                </div>
                <div class="afLine"> 
                	<div class="aflLeft"><p>Пароль</p></div>
                    <div class="aflRight"><input name="afPassObject" type="text"></div>
                </div>
                <div class="afLine"> 
                	<input name="submit" type="submit" value="войти">
                </div>
                <div class="afLine"></div> <!--пустышка -->
				<div class="afLine"> 
                	<div class="aflLeft"><a href="/reg?form=registretion">Регистрация</a></div>
                    <div class="aflRight"><a href="">Восстановить пароль</a></div>
                </div>
            </div>
            </form>
            
            <? } else {?>
            
            <form action="/reg" method="get">
            <input name="form" type="hidden" value="registretion">
            <input name="rForm" type="hidden" value="active">
            <div class="rForm">
                <div class="rfLine"> 
                	<div class="rflLeft"><p>Страна</p></div>
                    <div class="rflRight">
                    	<select onchange="location=this.options[this.selectedIndex].value" name="rfCountryObject">
                        	<option value='<? echo $idCountry;?>'><? echo $nameCountry;?></option>
                            <option value='/reg?form=registretion'>-----------</option>
						<?
							$req1 = "SELECT * FROM countries ORDER BY massCountry";
							$result1 = mysql_query($req1);
							if (!$result1) {
								$message = 'Запрос '.$req1.' не прошол.';
							} else {$array1 = mysql_fetch_array($result1);}
							
							do {
								
								printf ("
									<option value='/reg?form=registretion&idCountry=%s&nameCountry=%s'>%s</option>
								",
									$array1[idCountry], $array1[nameCountry], $array1[nameCountry]
								);
								
							} while ($array1 = mysql_fetch_array($result1));						
						?>
                        </select>
                    </div>
                </div>
                <div class="rfLine"> 
                	<div class="rflLeft"><p>Регион</p></div>
                    <div class="rflRight">
                    	<select onchange="location=this.options[this.selectedIndex].value" name="rfRegionObject">
                        	<option value='<? echo $idRegion;?>'><? echo $nameRegion;?></option>
                            <option value='/reg?form=registretion'>-----------</option>
						<?
							$req2 = "SELECT * FROM regions WHERE idCountry='$idCountry' ORDER BY nameRegion";
							$result2 = mysql_query($req2);
							if (!$result2) {
								$message = 'Запрос '.$req2.' не прошол.';
							} else {$array2 = mysql_fetch_array($result2);}
							
							do {
								
								printf ("
									<option value='/reg?form=registretion
									&idCountry=$idCountry&nameCountry=$nameCountry
									&idRegion=%s&nameRegion=%s
									'>%s</option>
								",
									$array2[idRegion], $array2[nameRegion], $array2[nameRegion]
								);
								
							} while ($array2 = mysql_fetch_array($result2));						
						?>
                        </select>
                    </div>
                </div>
                <div class="rfLine"> 
                	<div class="rflLeft"><p>Город</p></div>
                    <div class="rflRight">
                    	<select name="rfCityObject">
                        	<option value='<? echo $idCity;?>'><? echo $nameCity;?></option>
                            <option value='/reg?form=registretion'>-----------</option>
						<?
							$req3 = "SELECT * FROM cities WHERE idRegion='$idRegion' ORDER BY nameCity";
							$result3 = mysql_query($req3);
							if (!$result3) {
								echo  'Запрос '.$req3.' не прошол.';
							} else {$array3 = mysql_fetch_array($result3);}
							
							do {
								
								printf ("
									<option value='%s'>%s</option>
								",
									$array3[idCity], $array3[nameCity]
								);
								
							} while ($array3 = mysql_fetch_array($result3));						
						?>
                        </select>
                    </div>
                </div>
                <div class="rfLine"> 
                	<div class="rflLeft"><p>Моб. телефон</p></div>
                    <div class="rflRight"><input name="rfPhoneObject" type="text"></div>
                </div>
                <div class="rfLine"> 
                	<div class="rflLeft"><p>Пароль 4-6 цифр</p></div>
                    <div class="rflRight"><input name="rfPassObject" type="text"></div>
                </div>
                <div class="rfLine"> 
                	<input name="submit" type="submit" value="регистрация">
                </div>
                <div class="afLine"></div> <!--пустышка -->
                <div class="rfLine"> 
                	<div class="rflLeft"><a href="/reg">Авторизация</a></div>
                    <div class="rflRight"></div>
                </div>
            </div>
            </form>
			<? }?>	
            	
        	
        </div> <!--закрываем registretion-->
        
     </div> <!--закрываем content-->
	</div> <!--закрываем container-->
    <!--<div id="footer"></div>-->

</body>
</html>














