function ajax(){
			var req = new XMLHttpRequest();

			req.onreadystatechange = function(){
				if (req.readyState == 4 && req.status == 200) {
					document.getElementById('tabla').innerHTML = req.responseText;
				}
			}

			req.open('GET', '../Model/vistas/tabla.php', true);
			req.send();
		}
		//creamos una funcion que cada segundo ejecute nuestra funcion ajax que estara llamando los datos (como refrescar)
		setInterval(function(){ajax();}, 1000);