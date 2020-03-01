(function(){
  var http = new XMLHttpRequest();
	  http.open('GET', 'https://hadija.ru/get_video.php');  
	  http.onreadystatechange = function () { 
	    if (this.readyState == 2) {  	      
	    	kaaba.innerHTML='Видео не найдено';
	    }
	    if (this.readyState == 4 && this.status == 200) {  	      
	    	const response=this.responseText;
	      	const kaaba = document.querySelector("#kaaba");
	      	kaaba.innerHTML=response;
    }
	  }
	  http.send(null);  
})();