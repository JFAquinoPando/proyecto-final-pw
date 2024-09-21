<?php
    //phpinfo();
    $conexion = new mysqli("localhost", "root", "password", "sys");
    $sql = "SELECT * FROM host_summary";
    $res = $conexion->query($sql);
    $fila = $res->fetch_assoc();
    print_r($fila);