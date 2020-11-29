<?php
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $existencia = $_GET['existencia'];


    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO productos (producto,precio,existencia) VALUES ('$producto', '$precio', '$existencia');");
    
    header("Location: ../index.php");