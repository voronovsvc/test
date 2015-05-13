
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Документ без названия</title>
<link href="/css/style.css" rel="stylesheet" type="text/css">
<script src="/js/jquery.js" type="text/javascript"></script>


<script>
	
	$(document).ready(function() {
		
		$('.div1').mouseover(function () {
			$(this).find('.div2').css({'background-color':'#EF7F1A'});
		});
		
		$('.div1').mouseout(function () {
			$(this).find('.div2').css({'background-color':'#fff'});
		});
				
	}); <!-- конец ready-->

</script>

<style>

.div1 {
	border:1px solid;
	width:100px;
	height:100px;
	float:left;
}

.div2 {
	border:1px solid;
	width:10px;
	height:10px;
}

</style>

<div class="div1">
	<div class="div2"></div>
</div>

<div class="div1">
	<div class="div2"></div>
</div>


