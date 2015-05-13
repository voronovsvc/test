<?php

	/**********************************
	
	Разработчик: 	Воронов Антон
					Викторович
	Фаил создан:	03.03.2015
	
	Описание:
	Добавить   объявление   о   продаже
	автозапчасти.
	
	
	**********************************/
	
	class adsAutopart extends autosvcObjectCore {
		
		public $group;		// ключ и название группы объявления
		
		public $idBrand;	// получаем от поля - Марка
		public $idModel;	// от поля - Модель
		public $idSystem;	// от поля - Система
		public $idApart;	// от поля - Название детали
		public $idPosition;	// от поля - Расположение
		public $price;		// от поля - Цена
		public $comment;	// от поля - Комментарий Объекта
		
		public $notnew;		// chekcbox Деталь б/у
		public $setting;	// chekcbox Можем установить
		public $delivery;	// chekcbox Доставляем клиету
		public $auction;	// chekcbox Ценра обуждается
		
		public $image; // массив для загрузки изображения
		
		
		
		public function viewInform () {
			// задача метода: выводит информацию 
			// в браузер из методов
			echo $this->createAdvertApart ();
			
		}
		
		
		
		public function imageHandler ( $_files ) {
			
			$array = $this->query ( $this->select ( 1000 ) );
				
			$exten = ".jpg";
			$date = date("dmyHis");
			$idObject = $array[idObject];
			
			$namefile = $idObject.$date.$exten;
			$dir = "../../img/quarantine/" . $namefile;
			
			// проверяем max размер допустимый к загрузке
			if ( $_files[size] > 3000000 )
			$error[] = "Файл превышает размер три мегабайта";
			
			if (!isset ( $error ) )
			// перемещаем из tmp в каталог хранения
			move_uploaded_file ( $_files[tmp_name], $dir );
			
			// проверяем записался в каталог файл
			if( !file_exists( $dir ) )
            $error[] = 'Файл не существует: ' . $namefile;
			
			if (!isset ( $error ) )
			// запрашиваем параметры изображения (файла).
			// убеждаемся, что это изображение.
			$imagesize = getimagesize( $dir ); 
			
			
			
			
			$res_x = 100;
			$res_y = 100;
			
			$src_x = 100;//( $imagesize[0] - 180 ) / 2; //вычесляем координату от левог края 
			$src_y = 100;//( $imagesize[1] - 180 ) / 2; //вычесляем координату от верхнего края 
			
			$res_w = 180; // размер окна в которое выводится изображение
			$res_h = 180; 
			
			$src_w = 180;
			$src_h = 180;
			
			// ресэмплирование
			$res_image	= imagecreatetruecolor ( $res_w, $res_h );
			$src_image	= imagecreatefromjpeg ( $dir );
			
			// imagecopyresized
			$result = imagecopyresampled (
			
			$res_image ,	// Ресурс целевого изображения.
			$src_image ,	// Ресурс исходного изображения.
			
			$res_x ,		// x-координата результирующего изображения. 
			$res_y ,		// y-координата результирующего изображения. 
			
			$src_x ,		// x-координата исходного изображения. 
			$src_y ,		// y-координата исходного изображения. 
			
			$res_w ,		// Результирующая ширина. 
			$res_h ,		// Результирующая высота. 
			
			$src_w ,		// Ширина исходного изображения.
			$src_h			// Высота исходного изображения.
			
			);
			
			if ( $result ) {
				// тип содержимого
				imagejpeg($res_image, $dir, 100);
			}
			
			// вывод
			//imagejpeg($res_image, null, 100);
			
			
			
			
			
			
			
			
			
			
			
			
			
			echo "<pre>";
			print_r ( $imagesize );
			echo "</pre>";
			
			
			
			
			
			
			
			
			
			
			// вывод ошибок в браузер
			if ( !empty ( $error ) ) {
				
				foreach ( $error as $value )
				echo $value."<br />";	
			}
			
			
			
			
			
			
			
		} 
		
		
		
		public function createAdvertApart () { // ВНИМАНИЕ! Видимость функции protected
			
			if ($this->group == "apart") {
				
				// проверка на заполнение всех полей,
				if( // кроме фото и чекбоксов
				$this->idBrand		== false ||
				$this->idModel		== false ||
				$this->idSystem		== false ||
				$this->idApart		== false ||
				$this->idPosition	== false ||
				$this->price		== false ||
				$this->comment		== false){
				$error = "Вы заполнили не все 
				ключевые поля ...";
				return $error;
				}
				
				
				/*if ( $_files[error] != 0 )
				$error = "Файл содержит ошибку";
				
				if ( $_files[size] > 3000000 )
				$error = "Согласно пользовательского
				соглашения,  изображение  товара  не
				должно превышать 3Mb";
				
				$whitelist = array(
				".gif",".png",".jpg",
				".jpeg");
				
				//Проверяем разрешение файла
				foreach ( $whitelist as $value ) {
					
					$result = strripos( $_files[name], $value );
					if ( $result != false ) $coincidenceExpansion; 
				
				}
				
				if ( !$coincidenceExpansion ) {
				$error = "Ошибка, Вы можете
				загружать картинки только с
				расширением  gif,  png, jpg,
				jpeg ...";
				return $error;
				}
				
				$type = $_files[type];
				
				if ( // нужно ли это? 
				$type == "image/bmp"	||
				$type == "image/gif"	||
				$type == "image/ief"	||
				$type == "image/jpeg"	||
				$type == "image/png" )
				"тут фаил в белом списке";
				else {
				$error = "Ошибка, Вы можете
				загружать картинки только с
				расширением  gif,  png, jpg,
				jpeg";
				return $error;
				}
				
				if (!совпадения) {
					
					
					
				}
				
				if ( !is_uploaded_file ($_files[tmp_name]) ) {
				$error = "Пытаешься взломать меня? Не стоит,
				Я тебе ни чего не сделал, не трогай меня!";
				return $error;
				}*/
				
				
				/*
				Сначала проверяешь размеры загруженного файла через getimagesize().
				Если размеры выдаёт, то далее меняешь размер изображения (imagecreatetruecolor(новая_ширина, и_высота) , imagecopyresampled()).
				Если ошибок нет, то далее сохраняешь с правильным расширением.
				В новом изображении старых метаданных не будет. Вставки кода, если были, испортятся.
				
				*/
				
				if (!$error) {
					
					
					
					// получаем idObject из сессии, запишим в таблицу
					$array = $this->query ($this->select (1000));
					
					/*обрабатываем цену меняем запятую на точку*/
					$this->price = $this->symbol ($this->price);
					
					$req = "INSERT INTO ads (
						groupAds,
						idObject,
						idBrand,
						idModel,
						idSystem,
						idApart,
						idPosition,
						priceAds,
						commentAds,
						service1Ads,
						service2Ads,
						service3Ads,
						service4Ads,
						imgNameAds
					) VALUES (
						'$this->group',
						'$array[idObject]',
						'$this->idBrand',
						'$this->idModel',
						'$this->idSystem',
						'$this->idApart',
						'$this->idPosition',
						'$this->price',
						'$this->comment',
						'$this->notnew',
						'$this->setting',
						'$this->delivery',
						'$this->auction',
						'$imgNameAds'
					)";
					$result = mysql_query ($req);
					if (!$result) echo
					"Ошибка в запросе ".$req;
					else
					$inform = "Спасибо! Ваше обявление создано ...";
					return $inform;
	
				}
			}
		}
		
		
		
	} //(class adsAutopart)

	
?>