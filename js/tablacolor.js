 function tabla(usuario){
 	var boton = document.getElementById(usuario).checked;

  if (boton == true){
  	let data = new FormData();
  	data.append('id',usuario);
  	data.append('valor',0);
   fetch('Model/ajax/model_estado.php',{
  	method: 'POST',
  	body:data
   })
   .then(function(response){
   	if(response.ok){
   		return response.text();
   	}else{
   		throw "error en la traida de datos";
   	}
   })
   .then(function(texto){
   		console.log(texto);
   	})
   	.catch(function(error){
   		console.log(error);
   	});
   }else{
     let data = new FormData();
  	data.append('id',usuario);
  	data.append('valor',1);
   fetch('Model/ajax/model_estado.php',{
  	method: 'POST',
  	body:data
   })
   .then(function(response){
   	if(response.ok){
   		return response.text();
   	}else{
   		throw "error en la traida de datos";
   	}
   })
   .then(function(texto){
   		console.log(texto);
   	})
   	.catch(function(error){
   		console.log(error);
   	});
    }
};

  
  






