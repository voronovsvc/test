<?php
	
	$obj = new adsAutopart;
	
	$obj->createAdvertApart ();
	
	$obj->group			= GP(false, $_POST[group]);
	
	$obj->idBrand		= GP(false, $_POST[idBrand]);
	$obj->idModel		= GP(false, $_POST[idModel]);
	$obj->idSystem		= GP(false, $_POST[idSystem]);
	$obj->idApart		= GP(false, $_POST[idApart]);
	$obj->idPosition	= GP(false, $_POST[idPosition]);
	$obj->price			= GP(false, $_POST[price]);
	$obj->comment		= GP(false, $_POST[comment]);
	
	$obj->notnew		= GP(false, $_POST[notnew]);
	$obj->setting		= GP(false, $_POST[setting]);
	$obj->delivery		= GP(false, $_POST[delivery]);
	$obj->auction		= GP(false, $_POST[auction]);
	
	//$obj->image			= $_FILES[image];
	
?>
            
            <form action="/users/objects/" method="post" enctype="multipart/form-data">
            <input name="name_page" type="hidden" value="dobavit-zapchast">
            <input name="group" type="hidden" value="apart">
            <div class="controlWindow">
            	<div class="cwHeader">
                	<div class="cwhTitle">
                    	<p>Добавить запчасть в продажу 
                        <span>
						<?
						$obj->viewInform ();
						?>
                        </span></p> 
                    </div>
                    <div class="cwhSave">
                    	<input name="submit" type="submit" value="Сохранить">
                    </div>
                    <div class="cwhClose">
                    	<p><a href="/users/objects">Закрыть</a></p>
                    </div>
                </div>
                <div class="cwBody">
                	<div class="cwbAds">
                    	<div class="cwbAdsLeft">
                        	<div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Марка</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                        <?
										// заменить имя класса на свой например adApart
                                        $obj = new adInformation;
										$obj->listBrand ('dobavit-zapchast', GP(false, $_GET[idBrand]));
										?>
									</div>
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Модель</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                        <?
                                        $obj->listModel ('dobavit-zapchast',
										GP(false, $_GET[idBrand]), GP(false, $_GET[idModel]));
										?>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Система</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                        <?
                                        $obj->listSystem ('dobavit-zapchast',
										GP(false, $_GET[idBrand]), GP(false, $_GET[idModel]),
										GP(false, $_GET[idSystem]));
										?>
									</div>
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Название детали</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                       <?
                                       $obj->listApart(GP(false, $_GET[idSystem]));
									   ?>
									</div>
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Расположение</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                        <?
										$obj->listPosition ();
										?>
									</div>
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Цена</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<input name="price" type="text">
                                </div>
                            </div>
                            <div class="cwbAdsLeftTextarea">
                            	<textarea name="comment"></textarea>
                            </div>
                        </div>
                        <div class="cwbAdsRight">
                        	<div class="cwbAdsRightLine"><p>Дополнительная информация</p></div>
                            <div class="cwbAdsRightLine">
                            	<div class="cwbAdsRightColumn1">
                                	<input id="chBox_01" name="notnew" type="checkbox" value="1">
                                </div>
                                <div class="cwbAdsRightColumn2">
                                	<p><label for="chBox_01">Деталь б/у</label></p>
                                </div>
                            </div>
                            <div class="cwbAdsRightLine">
                            	<div class="cwbAdsRightColumn1">
                                	<input id="chBox_02" name="setting" type="checkbox" value="1">
                                </div>
                                <div class="cwbAdsRightColumn2">
                                	<p><label for="chBox_02">Можем установить</label></p>
                                </div>
                            </div>
                            <div class="cwbAdsRightLine">
                            	<div class="cwbAdsRightColumn1">
                                	<input id="chBox_03" name="delivery" type="checkbox" value="1">
                                </div>
                                <div class="cwbAdsRightColumn2">
                                	<p><label for="chBox_03">Доставляем покупателю</label></p>
                                </div>
                            </div>
                            <div class="cwbAdsRightLine">
                            	<div class="cwbAdsRightColumn1">
                                	<input id="chBox_04" name="auction" type="checkbox" value="1">
                                </div>
                                <div class="cwbAdsRightColumn2">
                                	<p><label for="chBox_04">Цена обсуждается</label></p>
                                </div>
                            </div>
                            <div class="cwbAdsRightFoto">
                            	<div class="cwbAdsRightFotoLine1">
                                	<p>Объявления с фото выводятся выше</p>
                                </div>
                                <div class="cwbAdsRightFotoLine2">
                                	<input type="file" name="image">
                                </div>
                                <div class="cwbAdsRightFotoLine3">
                                	<p>К загрузке допустимы файлы .png .jpg.
                                    Рекомендуемая ширина и высота изображения
                                    180 х 180 пикселей.</p>
                                </div>
                            </div>
                            <div class="cwbAdsRightInfo">
                                <p><span>Внимание!</span> Объявление размещается на 30 
                                    дней с возможностью продления.</p>
                            </div>
                        </div>
                    </div>
                    
                    <?
                    $obj = new adsAutopart;
					echo $obj->imageHandler ($_FILES[image]);
					
					?>
                    
                    
                    <!--<div class="cwbAdd">
                    	<div class="cwbAddLine1">
                        	<p>Схема объявления о продаже запчасти</p>
                        </div>
                        <div class="cwbAddLine2">
                        	<img src="../../../img/service/sample_ads_01.png" />
                        </div>
                        <div class="cwbAddLine3">
                        	<div class="cwbAddLine3Left">
                            	<p>При создании объявления не нашли нужную<br />
										запчасть, модель или марку? </p>
                            </div>
                            <div class="cwbAddLine3Right">
                            	<a href="/users/objects/?name_page=dobavit-informaciju">
                                	<div class="cwbAddLine3Link" title="Добавить информацию в каталог"></div>
                                </a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
			</form>











