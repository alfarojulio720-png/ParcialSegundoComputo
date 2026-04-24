<?php
$conn = mysqli_connect("localhost", "root", "", "parcial ugb");

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>