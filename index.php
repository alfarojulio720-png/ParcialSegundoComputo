<?php
session_start();
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['usuario'];
    $pass = md5($_POST['contraseña']);

    $sql = "SELECT * FROM usuarios WHERE usuario='$user' AND contraseña='$pass'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['usuario'] = $user;
        header("Location: dashboard.php");
    } else {
        $error = "Datos incorrectos";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>UGB - Login</h2>

    <?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

    <form method="POST">
        <input type="text" name="usuario" placeholder="Usuario" required>
        <input type="password" name="contraseña" placeholder="Contraseña" required>
        <button type="submit">Ingresar</button>
    </form>
</div>