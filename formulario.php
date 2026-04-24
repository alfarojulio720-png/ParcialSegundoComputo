<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $carrera = $_POST['carrera'];

    if (!empty($nombre) && !empty($apellido) && !empty($correo)) {

        $sql = "INSERT INTO estudiantes (nombre, apellido, correo, telefono, carrera)
                VALUES ('$nombre', '$apellido', '$correo', '$telefono', '$carrera')";

        mysqli_query($conn, $sql);
        $msg = "Estudiante registrado";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Registro</h2>

    <?php if(isset($msg)) echo "<p style='color:green'>$msg</p>"; ?>

    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="text" name="apellido" placeholder="Apellido" required>
        <input type="email" name="correo" placeholder="Correo" required>
        <input type="text" name="telefono" placeholder="Teléfono">

        <select name="carrera">
            <option>Ingeniería</option>
            <option>Administración</option>
            <option>Derecho</option>
        </select>

        <br><br>
        Modalidad:<br>
        <input type="radio" name="modalidad"> Presencial
        <input type="radio" name="modalidad"> Virtual

        <button type="submit">Guardar</button>
    </form>
</div>