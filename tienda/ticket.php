<?php
 $carrito = $_POST["texta"];
 $total = $_POST ['totalCompra'];
 $pago = $_POST['pagar'];
 $cambio =  $pago - $total;
 $idProductos = isset($_POST['idProductos']) ? $_POST['idProductos'] : '';
 $productoS= $_POST['producto'];
    
    include 'condb.php';  
    $db = new SQLite3("../tienda.db");
    

    $productos = explode(";",$idProductos);
    foreach ($productos as $producto) {
    $productoYCantidad = explode(":", $carrito);
    if(!isset($productoYCantidad[0]) || !isset($productoYCantidad[1])){
        continue;
    }
    $db->exec('UPDATE productos SET existencia= existencia - '.$productoYCantidad[1].' WHERE id_producto="'.$productoYCantidad[0].'"');
    $existencias = $db->query('SELECT  existencia= existencia - '.$productoYCantidad[1].'FROM productos WHERE id_producto="'.$productoYCantidad[0].'"');
    $db->exec("INSERT INTO tickets (cantidad_producto,producto,total_producto) VALUES ('$productoYCantidad[1]', '$productoYCantidad[0]', '$existencias');");
   
		
		
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <script type="text/javascript" src="js/carrito.js" charset="utf-8"></script>
    <title>Ticket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div">
      <h1 >Tienda Nataly</h1>
      <br>
      <h3>Ticket:</h3>
      <p>=======================================================</p>
      <p >Tus compras son: <br><?php print($carrito);?></p>
     <p>=======================================================</p>
      <p>El total a pagar : <?php print("$".$total);?></p>
      <p>Usted pago : <?php print("$".$pago);?></p>
       <p>Su cambio es de : <?php print("$".$cambio);?></p>
      <p><?php echo date("D M j G:i:s:A Y");?></p>
      <p>=======================================================</p>
      <p >Gracias por su compra</p>
      <p>=======================================================</p>
      
    </div>
  </body>
</html>