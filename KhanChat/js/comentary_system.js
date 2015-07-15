function OnEnter(evt)
			{
			    var key_code = evt.keyCode  ? evt.keyCode  :
			                       evt.charCode ? evt.charCode :
			                       evt.which    ? evt.which    : void 0;
			 
			 
			    if (key_code == 13)
			    {
			    	key_code = 33;
			        return true;
			    }
			}

			function atualiza(){
				var myVar = setInterval("exibe()", 2000);

				//	document.title = "Ajax para fodas";
			}

			function exibe(){

				var chamada;
				if(window.XMLHttpRequest){
					chamada = new XMLHttpRequest();
				}else{
					chamada = new ActiveXObject("microsoft.XMLHTTP");
				}

				chamada.onreadystatechange = function(){

					if(chamada.readyState == 4 && chamada.status == 200){
						document.getElementById('box').innerHTML = chamada.responseText;
					}
				}

				chamada.open("GET", "sys/show_message.php", true);
				chamada.send();
			}

			function test(e){
				if(OnEnter(e)){
					var y = document.getElementById('textName').value;
					var x = document.getElementById('text').value;

					var chamada;
					if(window.XMLHttpRequest){
						chamada = new XMLHttpRequest();
					}else{
						chamada = new ActiveXObject("microsoft.XMLHTTP");
					}

					chamada.onreadystatechange = function(){

						if(chamada.readyState == 4 && chamada.status == 200){
							document.getElementById('resposta').innerHTML = chamada.responseText;
							exibe();
						}
					}

					chamada.open("POST", "sys/insert_message.php", true);
					//OBRIGATORIO ENVIAR UM HEADER
					chamada.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
					chamada.send("q=" + encodeURIComponent(x) +
						"&name=" + encodeURIComponent(y));

					
					document.getElementById('text').value = "";
					
					
					setInterval("scrolli()", 1);
					}
			}
		function excluir_mensagens(){
			var chamada;
					if(window.XMLHttpRequest){
						chamada = new XMLHttpRequest();
					}else{
						chamada = new ActiveXObject("microsoft.XMLHTTP");
					}

					chamada.onreadystatechange = function(){

						if(chamada.readyState == 4 && chamada.status == 200){
							
						}
					}
					chamada.open("GET", "sys/delete_message.php", true);
					//OBRIGATORIO ENVIAR UM HEADER
					chamada.send();
			}

			function scrolli() {
		    	var objDiv = document.getElementById("box");
				objDiv.scrollTop = 10000;
				}