// JavaScript Document
	
	/*$(document).ready(function() {
		
			
	});*/ <!-- конец ready-->
		
		
	
	
	function showContent(link) {
		
		if (link == "page1.php") {
			$(".menu-box01").css("background-color", "#F17E00");
			$(".mb01-part01-line02, .mb01-part01-line03 a").css("color", "#FFF");
			$(".mb01-part03-img").css("background-image", "url(img/service/object07.png)");
		} else {
			$(".menu-box01").css("background-color", "#C3C4C4");
			$(".mb01-part01-line02").css("color", "#676766");
			$(".mb01-part01-line03 a").css("color", "#A05843");
			$(".mb01-part03-img").css("background-image", "url(img/service/object06.png)");
		}
		
		if (link == "page2.php") {
			$(".menu-box02").css("background-color", "#F17E00");
			$(".mb02-part01-line02, .mb02-part01-line03 a").css("color", "#FFF");
			$(".mb02-part03-img").css("background-image", "url(img/service/object07.png)");
		} else {
			$(".menu-box02").css("background-color", "#C3C4C4");
			$(".mb02-part01-line02").css("color", "#676766");
			$(".mb02-part01-line03 a").css("color", "#A05843");
			$(".mb02-part03-img").css("background-image", "url(img/service/object06.png)");
		}
		
		if (link == "page3.php") {
			$(".menu-box03").css("background-color", "#F17E00");
			$(".mb03-part01-line02, .mb03-part01-line03 a").css("color", "#FFF");
			$(".mb03-part03-img").css("background-image", "url(img/service/object07.png)");
		} else {
			$(".menu-box03").css("background-color", "#C3C4C4");
			$(".mb03-part01-line02").css("color", "#676766");
			$(".mb03-part01-line03 a").css("color", "#A05843");
			$(".mb03-part03-img").css("background-image", "url(img/service/object06.png)");
		}
		
		if (link == "page4.php") {
			$(".menu-box04").css("background-color", "#F17E00");
			$(".mb04-part01-line02, .mb04-part01-line03 a").css("color", "#FFF");
			$(".mb04-part03-img").css("background-image", "url(img/service/object07.png)");
		} else {
			$(".menu-box04").css("background-color", "#C3C4C4");
			$(".mb04-part01-line02").css("color", "#676766");
			$(".mb04-part01-line03 a").css("color", "#A05843");
			$(".mb04-part03-img").css("background-image", "url(img/service/object06.png)");
		}
		
		if (link == "page5.php") {
			$(".menu-box05").css("background-color", "#F17E00");
			$(".mb05-part01-line02, .mb05-part01-line03 a").css("color", "#FFF");
			$(".mb05-part03-img").css("background-image", "url(img/service/object07.png)");
		} else {
			$(".menu-box05").css("background-color", "#C3C4C4");
			$(".mb05-part01-line02").css("color", "#676766");
			$(".mb05-part01-line03 a").css("color", "#A05843");
			$(".mb05-part03-img").css("background-image", "url(img/service/object06.png)");
		}
		
		
		
		
        var cont = document.getElementById('menu-view');  
        var loading = document.getElementById('loading');  
  
        cont.innerHTML = loading.innerHTML;  
  
        var http = createRequestObject();  
        if( http )   
        {  
            http.open('get', link);  
            http.onreadystatechange = function ()   
            {  
                if(http.readyState == 4)   
                {  
                    cont.innerHTML = http.responseText;  
                }  
            }  
            http.send(null);      
        }  
        else   
        {  
            document.location = link;  
        }  
    }  
  
    // создание ajax объекта  
    function createRequestObject()   
    {  
        try { return new XMLHttpRequest() }  
        catch(e)   
        {  
            try { return new ActiveXObject('Msxml2.XMLHTTP') }  
            catch(e)   
            {  
                try { return new ActiveXObject('Microsoft.XMLHTTP') }  
                catch(e) { return null; }  
            }  
        }  
    }
