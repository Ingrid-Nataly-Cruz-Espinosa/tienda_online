<!DOCTYPE html>
<html lang="es">
  <head>
    <link rel="stylesheet" type="text/css" href="css/estiloT.css" media="screen"/>
    <script type="text/javascript" src="js/carrito.js" charset="utf-8"></script>
    <title>TIENDA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h2 class="miestilolabel">PRODUCTOS DE MI TIENDA</h2>
      <form method="POST" action="ticket.php">
        <select name="producto" class="custom-select mb-3" id="producto">
          <option selected>Selecciona tu productos favorito</option>
          <option value="25">Fabuloso</option>
          <option value="9">Chetos FlamingHot</option>
          <option value="15">Jabon Corporal</option>
          <option value="5">TupsiPop</option>
          <option value="3">Sopas</option>
          <option value="19">Jabon Polvo</option>
          <option value="9">Matequilla</option>
          <option value="38">CocaCola</option>
        </select>  
        <label for="cant">CANTIDAD:</label>
        <input type="number" class="form-control" id="cantidad" placeholder="Ingresa la cantidad que deceas" name="cantidad">
        <br>
        <textarea class="form-control" rows="5" id="texta" name="texta" ></textarea>
        <br>
        <br>
        <label for="totalCompra">Total:</label>
        <input type="text" class="campodeshabilitado" value="0" id="totalCompra" name="totalCompra" >
        <br>
        <br>
        <button type="button" class="btn btn-primary btn-lg" onclick="limpiar()">NUEVA COMPRA</button>

        <button type="button" class="btn btn-primary btn-lg" onclick="insertar()">INSERTAR</button> 
        <br>
        <label for="pagar">pagar:</label>
        <input type="number" class="form-control" id="pagar" placeholder="El pago del cliente" name="pagar">
        <br>
        <input type="submit" name="cobrar" class="btn btn-primary btn-lg" "value="Pagar">
    </div>
  </body>
</html>