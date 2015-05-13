<?php
	
																	/*
	key - ключ управляющий выводом форм, контента
	и управляющий дизайном меню 
																	*/

?>
            
                <input name="key" type="hidden" value="auto-parts">
                <div class="cwbcTop">
                    <p>Добавить автомобильную запчасть</p>
                </div>
                <div class="cwbcBrendField_06">
                	<?
                    $obj = new adInformation;
					$obj->listSystem ('','', '','');
					?>
                </div>
                <div class="cwbcBrendField_07">
                	<input name="nameApart" type="text" placeholder="Название запчасти">
                </div>
                <!--<div class="cwbcBrendField_08">
                	<?
                    //$obj->listPosition ();
					?>
                </div>-->
                <div class="cwbcBottom">
                    <p>Для добавления новой <span>Запчасти</span>
                    автомобиля в каталог внесите в  окна  выше
                    параметры и нажмите Сохранить.
                    </p>
                </div>