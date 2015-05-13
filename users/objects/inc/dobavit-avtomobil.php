            <form action="/users/objects/" method="post" enctype="multipart/form-data">
            <input name="name_page" type="hidden" value="dobavit-avtomobil">
            <div class="controlWindow">
            	<div class="cwHeader">
                	<div class="cwhTitle">
                    	<p>Добавить автомобиль в продажу</p> 
                    </div>
                    <div class="cwhSave">
                    	<input name="" type="submit" value="Сохранить">
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
										// заменить имя класса на свой например adCar
                                        $obj = new adInformation;
										$obj->listBrand ('dobavit-avtomobil', GP(false, $_GET[idBrand]));
										?>
									</div>
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Модель</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                        <select name="">
                                            <option>Acura</option>
                                            <option>Alfa Romeo</option>
                                            <option>Asia</option>
                                            <option>Audi</option>
                                            <option>BMW</option>
                                            <option>Brilliance</option>
                                            <option>Cadillac</option>
                                            <option>Chevrolet</option>
                                            <option>Chrysler</option>
                                            <option>Citroen</option>
                                        </select>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Год выпуска</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                        <select name="">
                                            <option></option>
                                            <option>----------------</option>
                                            <option>Acura</option>
                                            <option>Alfa Romeo</option>
                                            <option>Asia</option>
                                            <option>Audi</option>
                                            <option>BMW</option>
                                            <option>Brilliance</option>
                                            <option>Cadillac</option>
                                            <option>Chevrolet</option>
                                            <option>Chrysler</option>
                                            <option>Citroen</option>
                                        </select>
									</div>
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Цвет автомобиля</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                        <select name="">
                                            <option></option>
                                            <option>----------------</option>
                                            <option>Acura</option>
                                            <option>Alfa Romeo</option>
                                            <option>Asia</option>
                                            <option>Audi</option>
                                            <option>BMW</option>
                                            <option>Brilliance</option>
                                            <option>Cadillac</option>
                                            <option>Chevrolet</option>
                                            <option>Chrysler</option>
                                            <option>Citroen</option>
                                        </select>
									</div>
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Тип кузова</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<div class="cwbAdsLeftColumn2Select">
                                        <select name="">
                                            <option></option>
                                            <option>----------------</option>
                                            <option>Acura</option>
                                            <option>Alfa Romeo</option>
                                            <option>Asia</option>
                                            <option>Audi</option>
                                            <option>BMW</option>
                                            <option>Brilliance</option>
                                            <option>Cadillac</option>
                                            <option>Chevrolet</option>
                                            <option>Chrysler</option>
                                            <option>Citroen</option>
                                        </select>
									</div>
                                </div>
                            </div>
                            <div class="cwbAdsLeftLine">
                            	<div class="cwbAdsLeftColumn1"><p>Цена</p></div>
                                <div class="cwbAdsLeftColumn2">
                                	<input name="" type="text">
                                </div>
                            </div>
                            <div class="cwbAdsLeftTextarea">
                            	<textarea name=""></textarea>
                            </div>
                        </div>
                        <div class="cwbAdsRight">
                        	<div class="cwbAdsRightLine"><p>Дополнительная информация</p></div>
                            <div class="cwbAdsRightLine">
                            	<div class="cwbAdsRightColumn1">
                                	<input id="chBox_01" name="" type="checkbox" value="">
                                </div>
                                <div class="cwbAdsRightColumn2">
                                	<p><label for="chBox_01">Автомобиль б/у</label></p>
                                </div>
                            </div>
                            <div class="cwbAdsRightLine">
                            	<div class="cwbAdsRightColumn1">
                                	<input id="chBox_02" name="" type="checkbox" value="">
                                </div>
                                <div class="cwbAdsRightColumn2">
                                	<p><label for="chBox_02">Автомобиль с документами</label></p>
                                </div>
                            </div>
                            <div class="cwbAdsRightLine">
                            	<div class="cwbAdsRightColumn1">
                                	<input id="chBox_03" name="" type="checkbox" value="">
                                </div>
                                <div class="cwbAdsRightColumn2">
                                	<p><label for="chBox_03">Автомобиль не битый</label></p>
                                </div>
                            </div>
                            <div class="cwbAdsRightLine">
                            	<div class="cwbAdsRightColumn1">
                                	<input id="chBox_04" name="" type="checkbox" value="">
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
                                	<input type="file" name="userfile">
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
                    <div class="cwbAdd">
                    	<div class="cwbAddLine1">
                        	<p>Схема объявления о продаже автомобиля</p>
                        </div>
                        <div class="cwbAddLine2">
                        	<img src="../../../img/service/sample_ads_02.png" />
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
                        
                        
                    
                    </div>
                </div>
            </div>
			</form>











