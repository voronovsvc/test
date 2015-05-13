
		<form action="/users/objects/" method="post" enctype="multipart/form-data">
			<input name="name_page" type="hidden" value="dobavit-informaciju">
            
            <div class="controlWindow">
            	<div class="cwHeader">
                	<div class="cwhTitle">
                    	<p>Добавить информацию на сайт</p> 
                    </div>
                    <div class="cwhSave">
                    	<input name="" type="submit" value="Сохранить">
                    </div>
                    <div class="cwhClose">
                    	<p><a href="/users/objects">Закрыть</a></p>
                    </div>
                </div>
                <div class="cwBody">
                	<div class="cwbLeft">
                        <?
                        $obj = new adInformation;
						
						//принимаем параметры для переменных класса
						$obj->open = GP(false,$_POST["key"]);
						
						$obj->nameBrand = GP(false,$_POST["nameBrand"]);
						
						$obj->idBrand	= GP($_GET["idBrand"],$_POST["idBrand"]);
						$obj->nameModel	= GP(false,$_POST["nameModel"]);
						$obj->volume	= GP(false,$_POST["volume"]);
						$obj->power		= GP(false,$_POST["power"]);
						$obj->idEtype	= GP(false,$_POST["idEtype"]);
						$obj->_year		= GP(false,$_POST["_year"]);
						$obj->year_		= GP(false,$_POST["year_"]);
						
						$obj->idSystem	= GP(false,$_POST["idSystem"]);
						$obj->nameApart	= GP(false,$_POST["nameApart"]);
						
						// выводим меню
						$obj->menu (GP($_GET["key"],$_POST["key"]));
						?>
                    </div>
                    <div class="cwbCenter">
						<?
						$obj->form (GP($_GET["key"],$_POST["key"]));
						?>
                    	<div class="adsErrorBox">
							<?
// 							$obj->adModel (); удалить. просматриваем переменные с принятыми параметрами
                            echo "<p>";
							$obj->inform ();
							echo "</p>";
                            ?>
                        </div>
                    </div>
                    <div class="cwbRight">
						<?
                        $obj->cont (GP($_GET["key"],$_POST["key"]));
                        ?>
                    </div>
                </div>
            </div>
		</form>











