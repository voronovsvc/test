
<style>
.tabs {
  float: left; /* Все вкладки располагаем в одну строку */
  margin: 10px; /* Отступы вкладок друг от друга */
}
.content {
  display: none; /* Скрываем содержимое */
  padding-top: 20px; /* Чтобы название вкладки было ниже содержимого */
  position: absolute; /* Чтобы содержимое не двигало элементы на странице */
}
.tabs:active .content {
  display: block; /* Когда кликаем по вкладке, открываем содержимое content */
}
.content:hover {
  display: block; /* Пока курсор наведён на контент, не закрываем его */
}

</style>

<div class="tabs">
  <div class="content">Содержимое 1</div>
  <div>Вкладка 1</div>
</div>
<div class="tabs">
  <div class="content">Содержимое 2</div>
  <div>Вкладка 2</div>
</div>