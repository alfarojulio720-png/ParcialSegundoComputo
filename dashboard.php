<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Bienvenido <?php echo $_SESSION['usuario']; ?></h2>

    <a href="formulario.php">Registrar Estudiante</a>
    <a href="ver.php">Ver Estudiantes</a>
    <a href="logout.php">Cerrar sesión</a>
</div>