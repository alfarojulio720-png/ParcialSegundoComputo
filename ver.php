<?php
include("conexion.php");
$sql = "SELECT * FROM estudiantes ORDER BY nombre ASC";
$result = mysqli_query($conn, $sql);
?>

<link rel="stylesheet" href="style.css">

<h2>Lista de Estudiantes</h2>

<table>
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Correo</th>
    <th>Teléfono</th>
    <th>Carrera</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
    <td><?php echo $row['nombre']; ?></td>
    <td><?php echo $row['apellido']; ?></td>
    <td><?php echo $row['correo']; ?></td>
    <td><?php echo $row['telefono']; ?></td>
    <td><?php echo $row['carrera']; ?></td>
</tr>
<?php } ?>
</table>