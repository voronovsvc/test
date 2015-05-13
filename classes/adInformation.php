<?php

	/**********************************
	
	Разработчик: 	Воронов Антон
					Викторович
	Фаил создан:	19.02.2015
	
	Описание:
	Добавить информацию на сайт.
	Класс состоит   из   трех   функций
	вывода.
	menu ()   -  созает   дизайн   меню
	читабельный для пользователя.
	form ()  -  инклюдит    формы    из
	каталога ../forms.
	cont () - согласно условиям выводит
	Инструкции при  помощи  конструкции
	if else
	
	**********************************/
	
	class adInformation extends autosvcObjectCore {
		
		public $open;		// ключ к формам
		
		public $nameBrand;	//форма Добавить марку
		
		public $idBrand;	//форма Добавить модель
		public $nameModel;
		public $volume;
		public $power;
		public $idEtype;
		public $_year;
		public $year_;
		
		public $idSystem;		//форма Добавить з/часть
		public $nameApart;
		
		
		
		private function ucfirst_utf8 ($string) {
			// функция не моя. поднимает в верхний регистр первый символ предложения
			return mb_substr(mb_strtoupper($string, 'utf-8'), 0, 1, 'utf-8') .
			mb_substr($string, 1, mb_strlen($string)-1, 'utf-8');
		}
		
		
		
		public function inform () {
			// метод выводит информационные сообщения
			echo $var = $this->adBrand ();
			echo $var = $this->adModel ();
			echo $var = $this->adApart ();
			
		}
		
		
		
		public function adBrand () {
			
			if ($this->open == "auto-brand") {
				
				// преобразуем первую букву в верхний регистр
				$this->nameBrand = $this->ucfirst_utf8 ($this->nameBrand);
				
				$array = $this->query ($this->select (2000));
				
				if (
				$this->nameBrand == false
				) {
					
					$error = "Вы не заполнили поле <b>...</b>";
					return $error;
					
				}
				
				if ( // почему прописана тождественность? Ответ:
				$array[nameBrand] === $this->nameBrand
				) {
					$error = "Марка автомобиля,
					<b>\"$this->nameBrand\"</b>,
					есть в базе!";
					return $error;
				}
				
				if (!$error) {
					
					$req = "INSERT INTO brands (
						nameBrand
					) VALUES (
						'$this->nameBrand'
					)";
					$result = mysql_query ($req);
					if (!$result) echo
					"Бренд ".$this->nameBrand." не внесен в базу!";
					else
					$inform = "Марка автомобиля, <b>\"$this->nameBrand
					\"</b>, внесена в базу! Спасибо!";
					return $inform;

				}
				
			}
			
		}
		
		
		
		public function adModel () {
			
			if ($this->open == "auto-model") {
				
				// преобразуем первую букву в верхний регистр
				$this->nameModel = $this->ucfirst_utf8 ($this->nameModel);
				
				if (
				$this->idBrand		&&
				$this->nameModel	&&
				$this->volume		&&
				$this->power		&&
				$this->idEtype		&&
				$this->_year		&&
				$this->year_
				
				) {
					
					
					// убераем запятую для корректного сравнения
					$this->volume = str_replace(",",".",$this->volume);
					
					$array = $this->query ($this->select (5000));
					
					if (
					// проверка на дублирование
					$array[idBrand]		== $this->idBrand	&&
					$array[nameModel]	== $this->nameModel	&&
					$array[volumeModel]	== $this->volume	&&
					$array[powerModel]	== $this->power		&&
					$array[idEtype]		== $this->idEtype	&&
					$array[_yearModel]	== $this->_year		&&
					$array[year_Model]	== $this->year_
					
					) {
						
						$error = "Указанная Вами модель
						существует в базе";
						return $error;
						
					} else {
						
						if ($this->_year > $this->year_) {
						
							$error = "Год начала выпуска
							меньше года конца выпуска";
							return $error;
							
						}
						
						if (!$error) {
							
							// запись в базу
							$req = "INSERT INTO models (
								idBrand,
								nameModel,
								volumeModel,
								powerModel,
								idEtype,
								_yearModel,
								year_Model
							) VALUES (
								'$this->idBrand',
								'$this->nameModel',
								'$this->volume',
								'$this->power',
								'$this->idEtype',
								'$this->_year',
								'$this->year_'
							)";
							$result = mysql_query ($req);
							if (!$result) echo
							"Модель <b>\"".$this->nameModel."\"</b> не внесена в базу!";
							else
							$inform = "Марка автомобиля, <b>\"$this->nameModel
							\"</b>, внесена в базу! Спасибо!";
							return $inform;
						}
	
					}
					
				} else {
					
					$error = "Вы заполнили не все поля <b>...</b>";
					return $error;
				}
			}			
			
		}
		
		
		
		public function adApart () {
			
			if ($this->open == "auto-parts") {
				
				// преобразуем первую букву в верхний регистр
				$this->nameApart = $this->ucfirst_utf8 ($this->nameApart);
				
				// Проверки:
				// 1. на дублирование как в добавлении Модели
				$array = $this->query ($this->select(8000));
				
				if (
				$this->idSystem		== false	||
				$this->nameApart	== false
				) {
					
					$error = "Вы заполнили не все
					поля <b>...</b>";
					return $error;
					
				}
				
				if (
				$array[idSystem] == $this->idSystem		&&
				$array[nameApart] == $this->nameApart
				) {
					
					$error = "Указанная Вами запчасть
					существует в базе";
					return $error;
					
				}
				
				if (!$error) {
							
					// запись в базу
					$req = "INSERT INTO aparts (
						idSystem,
						nameApart
					) VALUES (
						'$this->idSystem',
						'$this->nameApart'
					)";
					$result = mysql_query ($req);
					if (!$result) echo
					"Автозапчасть <b>\"".$this->nameApart."\"</b>
					не внесена в базу!";
					else
					$inform = "Автомобильная запчасть,
					<b>\"$this->nameApart\"</b>,
					внесена в базу! Спасибо!";
					return $inform;
				}
				
			}
			
		}
		
		
		
		public function menu ($key) {
			
//			управление дизайном активной ссылки
			$act_01 = ($key == "auto-brand")	? "On" : "Off";
			$act_02 = ($key == "auto-model")	? "On" : "Off";
			$act_03 = ($key == "auto-parts")	? "On" : "Off";
			$act_04 = ($key == "ca-article")	? "On" : "Off";
			$act_05 = ($key == "my-article")	? "On" : "Off";
			
			print '
				<div class="cwblLine'.$act_01.'">
					<a href="/users/objects/?name_page=dobavit-informaciju&key=auto-brand">
						Марка автомобиля
					</a>
				</div>
				<div class="cwblLine'.$act_02.'">
					<a href="/users/objects/?name_page=dobavit-informaciju&key=auto-model">
						Модель автомобиля
					</a>
				</div>
				<div class="cwblLine'.$act_03.'">
					<a href="/users/objects/?name_page=dobavit-informaciju&key=auto-parts">
						Запчасть автомобиля
					</a>
				</div>
				<div class="cwblLine'.$act_04.'">
					<a href="/users/objects/?name_page=dobavit-informaciju&key=ca-article">
						Автомобильная статья
					</a>
				</div>
				<div class="cwblLine'.$act_05.'">
					<a href="/users/objects/?name_page=dobavit-informaciju&key=my-article">
						Статья о моем авто
					</a>
				</div>
			';
			
		}
		
		
		
		public function form ($key) {
			
			if (isset($key))
			// подтягиваем формы из каталога forms
			include_once "../../users/objects/forms/".$key.".php";
			
		}
		
		
		
		public function cont ($key) {
			
			if ($key == "auto-brand") {
				
				print '
				
				<div class="cwbRightBox">
					<div class="cwbRightBoxLine1">
						<p>Вознаграждение 50.00 руб.</p>
					</div>
					<div class="cwbRightBoxLine2">
						<p>Наш каталог пополняется не только  администрацией
						сайта, но и ответственными пользователями, которые
						готовы помочь в создании качественного и
						информационно-полного автомобильного каталога.</p>
					</div>
					<div class="cwbRightBoxLine3">
						<p>Требования:</p>
					</div>
					<div class="cwbRightBoxLine4">
						<p>
						1. Марка не должна дублироваться<br />
						2. В названии марки не должно быть ошибок
						</p>
					</div>
					<div class="cwbRightBoxLine5">
						<p>
						<span>Внимание!</span> Информация  не соответствующая
						требованиям  будет удалена, вознаграждение
						онулированно.
						</p>
					</div>
				</div>
				
				';
				
			}
			
			if ($key == "auto-model") {
				
				print '
				
				<div class="cwbRightBox">
					<div class="cwbRightBoxLine1">
						<p>Вознаграждение 150.00 руб.</p>
					</div>
					<div class="cwbRightBoxLine2">
						<p>Наш каталог пополняется не только  администрацией
						сайта, но и ответственными пользователями, которые
						готовы помочь в создании качественного и
						информационно-полного автомобильного каталога.</p>
					</div>
					<div class="cwbRightBoxLine3">
						<p>Требования:</p>
					</div>
					<div class="cwbRightBoxLine4">
						<p>
						1. Модель не должна дублироваться<br />
						2. В названии модели не должно быть ошибок
						</p>
					</div>
					<div class="cwbRightBoxLine5">
						<p>
						<span>Внимание!</span> Информация  не соответствующая
						требованиям  будет удалена, вознаграждение
						онулированно.
						</p>
					</div>
				</div>
				
				';
				
			}
			
			if ($key == "auto-parts") {
				
				print '
				
				<div class="cwbRightBox">
					<div class="cwbRightBoxLine1">
						<p>Вознаграждение 100.00 руб.</p>
					</div>
					<div class="cwbRightBoxLine2">
						<p>Наш каталог пополняется не только  администрацией
						сайта, но и ответственными пользователями, которые
						готовы помочь в создании качественного и
						информационно-полного автомобильного каталога.</p>
					</div>
					<div class="cwbRightBoxLine3">
						<p>Требования:</p>
					</div>
					<div class="cwbRightBoxLine4">
						<p>
						1. Запчасть не должна дублироваться<br />
						2. В названии запчасти не должно быть ошибок
						</p>
					</div>
					<div class="cwbRightBoxLine5">
						<p>
						<span>Внимание!</span> Информация  не соответствующая
						требованиям  будет удалена, вознаграждение
						онулированно.
						</p>
					</div>
				</div>
				
				';
				
			}
			
		}
		 
		
		
		
		
		
		
		
		 
		 
	
	} //(class adInformation)

	
?>