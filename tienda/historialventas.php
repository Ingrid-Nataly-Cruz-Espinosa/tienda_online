<?php
    $db = new SQLite3("../tienda.db");
    $resultado = $db->query("SELECT * from tickets;");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>HISTORIAL DEL VENTAS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Historial de ventas</h2>        
  <table class="table table-dark">
    <thead>
      <tr>
        <th>id ticket</th>
        <th>Fecha y hora</th>
        <th>Cantidad producto</th>
        <th>Producto</th>
        <th>Total de productos</th>
      </tr>
    </thead>
    <tbody>
                     <?php 
                        
                        while ($row = $resultado->fetchArray())
                        {
                            
                        
                            {
                    ?>
                                <tr>
                                    <td><?php echo $row['idticket']?></td>
                                    <td><?php echo $row['fecha_hora']?></td>
                                    <td><?php echo $row['cantidad_producto']?></td>
                                    <td><?php echo $row['producto']?></td>
                                    <td><?php echo $row['total_producto']?></td>
                                   
                                </tr> 
                     
		           
                    <?php
                            }
                        }
                       
                    ?> 
    </tbody>
  </table>
</div>

</body>
</html>