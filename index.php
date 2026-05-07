<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>GestionArticulos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>GESTIÓN DE ARTÍCULOS</h1>

<form action="guardar.php" method="POST">

    <input type="text" name="nombre" placeholder="Nombre" required>

    <input type="text" name="marca" placeholder="Marca" required>

    <input type="number" name="cantidad" placeholder="Cantidad" required>

    <input type="text" name="bodega" placeholder="Bodega" required>

    <button type="submit">Guardar</button>

</form>

<table>

<tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Marca</th>
    <th>Cantidad</th>
    <th>Bodega</th>
    <th>Acciones</th>
</tr>

<?php

$sql = "SELECT * FROM articulos";
$resultado = mysqli_query($conexion, $sql);

while($fila = mysqli_fetch_assoc($resultado)){
?>

<tr>
    <td><?php echo $fila['id']; ?></td>
    <td><?php echo $fila['nombre']; ?></td>
    <td><?php echo $fila['marca']; ?></td>
    <td><?php echo $fila['cantidad']; ?></td>
    <td><?php echo $fila['bodega']; ?></td>

    <td>

        <a href="editar.php?id=<?php echo $fila['id']; ?>">
            Editar
        </a>

        |

        <a href="eliminar.php?id=<?php echo $fila['id']; ?>">
            Eliminar
        </a>

    </td>

</tr>

<?php
}
?>

</table>

</body>
</html>

