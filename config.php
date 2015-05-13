<?php
	
	define("HOST","localhost");
	define("USER","root");
	define("PASSWORD","");
	define("DB","autosvc.ru");
	
	
	class conection {
		
		protected $db;
		protected $query;
		
		public function connectDB () {
			
			$this->db = mysql_connect(HOST, USER, PASSWORD);
			if ($this->db){
				if (!mysql_select_db(DB, $this->db)) {
					exit('База данных с именем, '.DB.', нет.');
				}
			} else {
				exit('Ошибка соединения с базой данных.');
			}
			// определяем кодировку запросов в базу данных
			mysql_query('SET names "utf-8"');
			return $this->db;
		} /* закрываем function conection */
		
		
		
		
		function reqSelect($req) {
			
			$result = mysql_query($req);
			if ($result) {
				$array = mysql_fetch_array($result);
			} else {exit ("запрос, ".$req.", не прошол");}
			
			return $array;
		}
		
		
		
		// часто запрашиваем id пользователя по этому, функция ;)
		function idObject () {
			
			$this->connectDB ();
			
			$request = "SELECT idObject
			FROM objects
			WHERE phoneObject='$_SESSION[phoneObject]'";
			$result = mysql_query ($request);
			if ($result)
			$array = mysql_fetch_array ($result);
			$idObject = $array[idObject];
			return $idObject;
		}
	
	} /* закрываем class conection */
	
	// Функция обработки POST и GET переменных
	function get_post($get_post, $var){
		if(isset($get_post)){
			$var = $get_post; // значение глобальной переменной привсаиваем простой переменной
			$var = trim($var); // удаляем лишние пробелы пользователя
			$var = stripslashes($var); // убераем ковычки и слеши... 
			$var = htmlspecialchars($var); // убираем теги html
			if($var == ""){unset($var);}
		}	// убиваем пустую переменную	
		return $var;
	} # закрываем class conection
	
	
	
	function GP($getPost){//////////////// Функция обработки POST и GET данных. 	НОВАЯ РЕДАКЦИЯ
		$var = $getPost;				// данные полученные методом Get Post заносим в переменную 
		$var = trim($var);				// удаляем лишние пробелы
		$var = stripslashes($var);		// преобразовываем ковычки и слеши... 
		$var = htmlspecialchars($var);	// преобразовываем теги html
		if($var == ""){unset($var);}	// убиваем пустую переменную	
		return $var;					//
	}#(getPost)///////////////////////////
	
	
	
?>