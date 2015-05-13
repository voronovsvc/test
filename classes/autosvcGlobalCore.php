<?php

																														/*
	
	Разработчик: 	Воронов Антон
					Викторович
	Фаил создан:	11.02.2015
	
	Описание: глобальное ядро
	Ядро  сайта  autosvc.ru.   Содержит
	классы и функции влияющие на работу
	всего сайта в целом.
	
	Так   же   файл   содержит  фунцию,
	которая  в  автоматическом   режиме
	подключает   классы,    если    они
	существуют  из указанного каталога.
	spl_autoload_register(function ())
	
	СТАНДАРТЫ:
	Основные цвета используемые на сайте:
	- для шапки сайта:							#7A95D1
	- для текста шапки:							#FFFFFF
	- для текста заголовков:					#414141
	- для фона заголовков:						#E4E4E4
	- для текста:								#676767, #949494
	- для текста в формах:						#A05843
	- для выделенного ткста:					#F17E00 оранжевый
	- для ссылок:								#006600
	- для ссылок + (:hover):
	- для ссылок меню + (:hover):				#52648A + #3E4B68
	- для ссылок скрытых под текст (:hover):
	- для фона ссылки при наведении курсора:
	- для рамок (border):						#B2B2B2
	- для тени блока:
	- для тени текста:
	
	
	План работ по реализации проекта
	1. Создать все предварительные заказы
		1.1. Размешение визитки в каталоге
		1.2. 
	2. Создать список счетов и пополнение баланса	
	3. Просмотр оплаченных счетов + дебет кредит																											*/
	
	class autosvcGlobalCore {
		 
		
		const HOST = "localhost";
		const USER = "root";
		const PASS = "";
		const BASE = "autosvc.ru";
		 
		
		
		public function __construct () {
			
			$db = mysql_connect (self::HOST, self::USER, self::PASS);
			if ($db) {
				 
				 if (!mysql_select_db (self::BASE, $db))
				 exit ("Базы данных с именем \"".self::HOST."\" не существует!");
				 
			} else {
				
				exit ("Ошибка соединения с базой данных!");
				
			}
			
			mysql_query ('SET names "utf-8"'); // устанавливаем кодировку запросов в базу данных
			
		}#(__construct)
		
		
		
		// реестр запросов "SELECT"
		public function select ($index) {
			
			$SELECT = array(
				
				1000 => "SELECT idObject FROM objects WHERE phoneObject='$_SESSION[phoneObject]'",
				1001 => "SELECT * FROM visitingcards",
				
				2000 => "SELECT nameBrand FROM brands WHERE nameBrand='$this->nameBrand'",
				2001 => "SELECT idBrand, nameBrand FROM brands WHERE idBrand!='70'",
				2002 => "SELECT idBrand, nameBrand FROM brands WHERE idBrand='$this->idBrand'",
				
				3000 => "SELECT idEtype, nameEtype FROM etyps",
				
				4000 => "SELECT year FROM years",
				
				5000 => "SELECT * FROM models WHERE nameModel='$this->nameModel' and 
				volumeModel='$this->volume' and powerModel='$this->power' and 
				idEtype='$this->idEtype' and _yearModel='$this->_year' and
				year_Model='$this->year_'",
				
				6000 => "",
				
				7000 => "SELECT idPosition, namePosition FROM positions",
				
				8000 => "SELECT * FROM aparts WHERE idSystem='$this->idSystem' and
				nameApart='$this->nameApart'"
				
					
			);
			
			return $SELECT[$index];	
		}
		
		
		// метод сокращает запрос в основном коде
		public function query ($select) {
			
			$result = mysql_query ($select);
			
			if (!$result)
			exit ("Запрос, ".$select.", не прошол!");
			
			if ($result)
			$array = mysql_fetch_array ($result);
			
			return $array;
			
		}
		
		
		
		public function listBrand ($page, $idBrand) {
			/*
			получилось горомоздко, будет возможность - переделать!
			*/
			if ($page) {
				// Эта борода нужна для перезагрузки форм в объявлениях
				$renew = 'onchange="location=this.options[this.selectedIndex].value"';
				$url = "/users/objects/?name_page=".$page."&idBrand=";
			}
			
			// для цикла 
			$result = mysql_query ($this->select (2001));
			$array = mysql_fetch_array ($result);
			
			$query = "SELECT idBrand, nameBrand
			FROM brands WHERE idBrand='$idBrand'";
			$array1 = $this->query ($query);
			
			print '
				<select name="idBrand" '.$renew.'>
					<option value="'.$array1[idBrand].'">'
					.$array1[nameBrand].'</option>
					<option value="'.$url.'">---------------------------</option>';
			do {
			
			printf ('
					<option value="'.$url.'%s">%s</option>
			
			',
				$array[idBrand], $array[nameBrand]
			);
			
			} while ($array = mysql_fetch_array ($result));
			
			print '
				</select>';
			
		}
		
		
		
		public function listModel ($page, $idBrand, $idModel) {
			
			// подготовить цикл вывода моделей для объявлений
			// с входящим параметром idBrand для сортировки
			
			if ($idModel) {
				
				$query1 = "SELECT idModel, nameModel
				FROM models WHERE idModel='$idModel'";
				$result1 = mysql_query ($query1);
				$array1 = mysql_fetch_array ($result1);	
				
			}
			
			if ($page) {
				// Эта борода нужна для перезагрузки форм в объявлениях
				$renew = 'onchange="location=this.options[this.selectedIndex].value"';
				$url = "/users/objects/?name_page=".$page."&idBrand=$idBrand&idModel=";
			}
			
			$query = "SELECT idModel, nameModel
			FROM models WHERE idBrand='$idBrand'";
			$result = mysql_query ($query);
			$array = mysql_fetch_array ($result);
			
			print '
				<select name="idModel" '.$renew.'>
					<option value="'.$array1[idModel].'">'.$array1[nameModel].'</option>
					<option value="">---------------------------</option>';
			
			do {
				
				
				printf ('
				
					<option value="'.$url.'%s">%s</option>
				
				',
					$array[idModel], $array[nameModel]
				);	
				
				
			} while ($array = mysql_fetch_array ($result));
			
			print '
				</select>';
		}
		
		
		
		public function listEtype () {
			
			// для цикла 
			$result = mysql_query ($this->select (3000));
			$array = mysql_fetch_array ($result);
			
			print '
				<select name="idEtype">
					<option value=""></option>';
			do {
			
			printf ('
					<option value="%s">%s</option>
			
			',
				$array[idEtype], $array[nameEtype]
			);
			
			} while ($array = mysql_fetch_array ($result));
			
			print '
				</select>';
			
		}
		
		
		
		public function _year () {
			
			// для цикла 
			$result = mysql_query ($this->select (4000));
			$array = mysql_fetch_array ($result);
			
			print '
				<select name="_year">
					<option value=""></option>';
			do {
			
			printf ('
					<option value="%s">%s</option>
			
			',
				$array[year], $array[year]
			);
			
			} while ($array = mysql_fetch_array ($result));
			
			print '
				</select>';
			
		}
		
		
		
		public function year_ () {
			
			// для цикла 
			$result = mysql_query ($this->select (4000));
			$array = mysql_fetch_array ($result);
			
			print '
				<select name="year_">
					<option></option>
					<option value="9999">наст. время</option>';
			do {
			
			printf ('
					<option value="%s">%s</option>
			
			',
				$array[year], $array[year]
			);
			
			} while ($array = mysql_fetch_array ($result));
			
			print '
				</select>';
			
		}
		
		
		
		public function listSystem ($page, $idBrand, $idModel, $idSystem) {
			/*
			Список Систем выводится в двух вариантах:
			1. Без перезагрузки страницы
			2. С перезагрузкой страницы и передачей параметра
			$page - ключ к странице
			$idSystem - для запроса в базу и вывода nameSystem
			в option, а твк же для передачи параметра в listApart
			*/
			if ($idSystem) {
				
				// запрос для opnion
				$query = "SELECT idSystem, nameSystem
				FROM systems WHERE idSystem='$idSystem'"; 
				$result = mysql_query ($query);
				$array = mysql_fetch_array ($result);
				
			}
			
			if ($page) {
				// Эта борода нужна для перезагрузки форм в объявлениях
				$renew = 'onchange="location=this.options[this.selectedIndex].value"';
				$url = "/users/objects/?name_page=".$page."&idBrand=$idBrand&
				idModel=$idModel&idSystem=";
			}
			
			
			// для цикла
			$query1 = "SELECT idSystem, nameSystem FROM systems"; 
			$result1 = mysql_query ($query1);
			$array1 = mysql_fetch_array ($result1);
			
			print '
				<select name="idSystem"'.$renew.'>
					<option value="'.$array[idSystem].'">'
					.$array[nameSystem].'</option>
					<option value="'.$url.'">
					---------------------------</option>';
			do {
			
			printf ('
					<option value="'.$url.'%s">%s</option>
			
			',
				$array1[idSystem], $array1[nameSystem]
			);
			
			} while ($array1 = mysql_fetch_array ($result1));
			
			print '
				</select>';
			
		}
		
		
		
		public function listPosition () {
			
			// для цикла 
			$result = mysql_query ($this->select (7000));
			$array = mysql_fetch_array ($result);
			
			print '
				<select name="idPosition">
					<option value=""></option>';
			do {
			
			printf ('
					<option value="%s"><img src="../img/service/ap-right.png" /> %s</option>
			
			',
				$array[idPosition], $array[namePosition]
			);
			
			} while ($array = mysql_fetch_array ($result));
			
			print '
				</select>';
			
		}
		
		
		
		public function listApart($idSystem) {
			
			$query = "SELECT *
			FROM aparts WHERE idSystem='$idSystem'"; 
			$result = mysql_query ($query);
			$array = mysql_fetch_array ($result);
			
			print '
				<select name="idApart">
					<option value="'.$array[idApart].'">'
					.$array[nameApart].'</option>
					<option>---------------------------</option>';
			do {
			
			printf ('
					<option value="%s">%s</option>
			
			',
				$array[idApart], $array[nameApart]
			);
			
			} while ($array = mysql_fetch_array ($result));
			
			print '
				</select>';
			
			
		}
		
		
		
		
	}#(class autosvcGlobalCore)
	
	
	
	spl_autoload_register(function ($class) {		// автоподключение классов см. Мануал
    	
		require_once
		("../../classes/".$class.".php");
		
	});
	
	
																/*
	Функции вне класса подтягиваются только  из  этого Ядра,
	так как они выводится инклюдом в индексный фаил не через
	spl_autoload_register
																*/
	
	/*function GP($getPost){							// Функция обработки POST и GET данных. 	НОВАЯ РЕДАКЦИЯ
		$var = $getPost;							// - данные полученные методом Get Post заносим в переменную 
		$var = trim($var);							// - удаляем лишние пробелы
		$var = stripslashes($var);					// - преобразовываем ковычки и слеши... 
		$var = htmlspecialchars($var);				// - преобразовываем теги html
		if($var == ""){unset($var);}				// - убиваем пустую переменную	
		return $var;								// - возвращаем результат в функцию
	}#(GP)*/
	
	function GP($get, $post){							// Функция обработки POST и GET данных. 	НОВАЯ РЕДАКЦИЯ
		
		if($get) {
			$var = $get;								// - данные полученные методом Get Post заносим в переменную 
			$var = trim($var);							// - удаляем лишние пробелы
			$var = stripslashes($var);					// - преобразовываем ковычки и слеши... 
			$var = htmlspecialchars($var);				// - преобразовываем теги html
			if($var == ""){unset($var);}				// - убиваем пустую переменную	
			return $var;								// - возвращаем результат в функцию
		}
		if($post) {
			$var = $post;								// - данные полученные методом Get Post заносим в переменную 
			$var = trim($var);							// - удаляем лишние пробелы
			$var = stripslashes($var);					// - преобразовываем ковычки и слеши... 
			$var = htmlspecialchars($var);				// - преобразовываем теги html
			if($var == ""){unset($var);}				// - убиваем пустую переменную	
			return $var;								// - возвращаем результат в функцию
		}
	}#(GP)
	
	
?>