<?php

	session_start();
	
	// получаем ключ $close с параметром active убиваем сессию
	if ($_GET[close]) {
		unset($_SESSION[phoneРersonnel]);
		session_destroy();
	}
	
	// проверяем есть ли сессия есть, то переадресовываем, если нет, код читается дальше 
	if (!isset($_SESSION[phoneРersonnel])) {
					
		exit(header( 'Location: /reg' ));
	}
	
	

	header("Content-Type:text/html;charset=utf-8");
	require_once('../../config.php');
	require_once('../personnel/program.php');

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Документ без названия</title>
<link href="/css/objects.css" rel="stylesheet" type="text/css">
<script src="/js/jquery.js" type="text/javascript"></script>
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
    	
        
	</div> <!--container-->
    
    
	<div id="footer"></div>
</body>
</html>