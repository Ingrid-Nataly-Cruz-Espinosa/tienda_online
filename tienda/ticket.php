<?php
 $carrito = $_POST["texta"];
 $total = $_POST ['totalCompra'];
 $pago = $_POST['pagar'];
 $cambio =  $pago - $total;
?>
<!DOCTYPE html>
<html lang="es">
  <head>

    <link rel="stylesheet" type="text/css" href="css/styles.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css" media="screen"/>
    <script type="text/javascript" src="js/carrito.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/sweetalert2.all.min.js" charset="utf-8"></script>
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