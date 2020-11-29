<?php

    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from productos where id_producto='$id_producto';");

    while ($row = $resultado->fetchArray()) {
        $id_producto = $row["id_producto"];
        $producto = $row["producto"];
        $precio = $row["precio"];
        $existencia = $row["existencia"];
    }

    $form = "
        <div class='form-group'>
            <label for='id_producto'>ID</label>
            <input type='text' readonly class='form-control' id='id_producto' name='id_producto' aria-describedby='Id producto' value='$id_producto'>
        </div>
        <div class='form-group'>
            <label for='producto'>Nombre</label>
            <input type='text' class='form-control' id='producto' name='producto' aria-describedby='producto' value='$producto'>
        </div>
        <div class='form-group'>
            <label for='precio'>Precio</label>
            <input type='number' class='form-control' id='precio' name='precio' aria-describedby='precio' value='$precio'>
        </div>
        <div class='form-group'>
            <label for='existencia'>Existencia</label>
            <input type='number' class='form-control' id='existencia' name='existencia' aria-describedby='existencias' value='$existencia'>
        </div>

        ";

    print($form);
?>