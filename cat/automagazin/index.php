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
		$('.advert').mouseover(function (e) {
			$(this).find('.ap-left,.ap-center,.ap-right').css({'background-color':'#EF7F1A'});
		});
		
		$('.advert').mouseout(function () {
			$(this).find('.ap-left,.ap-center,.ap-right').css({'background-color':'#D8D9D9'});
		});
		
		// увеличение фото
		$('.olMiniFoto').click(function (e) {
			$(this).removeClass('olMiniFoto');
			$(this).addClass('olBigFoto');
		});
		
		$('.olMiniFoto').mouseout(function (e) {
			$(this).removeClass('olBigFoto');
			$(this).addClass('olMiniFoto');
		});
		
		// отображение полного текста ссылки в группе
		$('.orGroupLi').mouseover(function (e) {
			$(this).addClass('orGroupLiAdd');
		});
		
		$('.orGroupLi').mouseout(function (e) {
			$(this).removeClass('orGroupLiAdd');
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
            	<p>Автомагазины<span>(контакты и комментарии)</span></p>
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
     	<div id="catAutomagazin">
        
        	<div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
            
            <div class="object">
            	<div class="objectLeft">
                	<div class="olTop">
                    	<div class="olMiniFoto"></div>
                        	
                        <div class="olNameUrlAdressPhone">
                        	<div class="olNameUrl">
                            	<div class="olName"><a href="/cat/vizitka">Название объекта (продавца)</a></div>
                                <div class="olUrl">
                                	<a href="" title="На сайт продавца"><div class="linkIcon"></div></a>
                                </div>
                            </div>
                            <div class="olAdress">Адрес: <a href="">Симферополь</a><span>, ул. Гавена, 158</span></div>
                            <div class="olPhone">Телефон: <span>+7978 769 0607</span></div>
                        </div>
                    </div>
                    <div class="olBottom">
                    	<p>Комментарий продавца</p>
                        <div class="olBottomCmment">
                        	Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diem 
                            nonummy nibh euismod tincidunt ut lacreet dolore magna aliguam erat volutpat. 
                            Ut wisis enim ad minim veniam, quis nostrud exerci tution ullamcorper suscipit 
                            lobortis nisl ut aliquip ex ea commodo consequat. 
                        </div>
                    </div>
                </div>
                <div class="objectRight">
                	<div class="orSpecial">
                    	<div class="orSpecialTilte">Специализация</div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                        <div class="orSpecialBody">
                        	<div class="orSpecialBodyImg"></div>
                            <div class="orSpecialBodyLi"><a href="">Volcwagen</a></div>
                        </div>
                    </div>
                    <div class="orGroup">
                    	<div class="orGroupTilte">Магазин размещен в группе(ах)</div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/eye.png" /></div>
                            <div class="orGroupLi"><a href="">Осмотр перед куплей-продажей</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/wheel.png" /></div>
                            <div class="orGroupLi"><a href="">Ходовая, тормозная часть, развал-схождение, шиномонтаж</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/gear.png" /></div>
                            <div class="orGroupLi"><a href="">Коробки передач МКПП и АКПП</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/engine.png" /></div>
                            <div class="orGroupLi"><a href="">Двигатель, топливная система, система охлаждения</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/glushitel.png" /></div>
                            <div class="orGroupLi"><a href="">Система выпуска отработавших газов</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/body.png" /></div>
                            <div class="orGroupLi"><a href="">Кузов и стекла, салон, сварочные и малярные работы</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/fara.png" /></div>
                            <div class="orGroupLi"><a href="">Элекрооборудование, электроника, климат и безопасность</a></div>
                        </div>
                        <div class="orGroupBody">
                        	<div class="orGroupImg"><img src="../../img/service/rul.png" /></div>
                            <div class="orGroupLi"><a href="">Рулевое управление, узлы трансмиссии (кроме А и МКПП)</a></div>
                        </div>
                    	
                    </div>
                </div>
            </div> <!--закрываем object-->
             
        </div> <!--закрываем catAutomagazin-->
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
