<?php
	
																	/*
	key - ключ управляющий выводом форм, контента
	и управляющий дизайном меню 
																	*/

?>
            
                <input name="key" type="hidden" value="auto-model">
                <div class="cwbcTop">
                    <p>Добавить модель автомобиля</p>
                </div>
                <div class="cwbcBrendField_02">
                	<?
					// выводим список Марок автомобиля из подядра
                    $obj = new adInformation;
					$obj->listBrand ('', '');
					?>
                </div>
                <div class="cwbcBrendField_03">
                    <input name="nameModel" type="text">
                </div>
                <div class="cwbcBrendField_04">
                    <div class="cwbcBrendField_04-1">
                        <input name="volume" type="text" maxlength="4"
                        title="Объем двигателя. Например: 2.5 ">
                    </div>
                    <p>л.,</p>
                    <div class="cwbcBrendField_04-2">
                        <input name="power" type="text" maxlength="4"
                        title="Мощность двигателя в лошадиных силах.">
                    </div>
                    <p>л.с.,</p>
                    <div class="cwbcBrendField_04-3">
                        <?
						$obj = new adInformation;
                        $obj->listEtype ();
						?>
                    </div>
                </div>
                <div class="cwbcBrendField_05">
                    <div class="cwbcBrendField_05-1">
                        <?
                        $obj->_year ();
						?>
                    </div>
                    <div class="cwbcBrendField_05-2">
                        <?
                        $obj->year_ ();
						?>
                    </div>
                </div>
                <div class="cwbcBottom">
                    <p>Для добавления новой <span>Модели</span>
                    автомобиля в каталог внесите в  окна  выше
                    параметры и нажмите Сохранить.
                    </p>
                </div>