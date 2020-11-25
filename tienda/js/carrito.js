function insertar(){
  var cantidad= $("#cantidad").val();
  var nombre= $("#producto option:selected").text();  
  var precio=$("#producto").val();
  var carritoC=$("#texta").val(); 
  if(cantidad<10 & cantidad >0 &  precio >0) {
    
    $("#texta").text("Cantidad : "+ cantidad + " El producto es: " + nombre +  " Precio:$" + precio + "\nEl total es de:$"+ parseFloat(cantidad)*parseFloat(precio)+"\n"+carritoC);
    listo(parseFloat(cantidad)* parseFloat(precio));
  }
  if (cantidad <=0 & precio<=0 ){
    alert("Lo siento necesito un valor")
  }

  else if (cantidad>0 & cantidad>=10 & precio>0){
    alert("Solo permito valores mayores a 0 pero menores a 10")
  }

  else if (precio>0 & cantidad<=0 || precio<=0 & cantidad>0 ){
    alert("Lo siento no tengo ningun valor en tu cantidad")
  }
}


function limpiar(){
  $("#texta").empty();
  $("#totalCompra").val('0');
}

function listo(costo){
  var totalNew =$("#totalCompra").val();
  var totalEnd = parseFloat(totalNew)+parseFloat(costo);
  $("#totalCompra").val(totalEnd)
}