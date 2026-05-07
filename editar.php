<?php

include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM articulos WHERE id='$id'";
$resultado = mysqli_query($conexion, $sql);

$fila = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h1>EDITAR ARTÍCULO</h1>

<form action="actualizar.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $fila['id']; ?>">

    <input type="text" name="nombre"
    value="<?php echo $fila['nombre']; ?>">

    <input type="text" name="marca"
    value="<?php echo $fila['marca']; ?>">

    <input type="number" name="cantidad"
    value="<?php echo $fila['cantidad']; ?>">

    <input type="text" name="bodega"
    value="<?php echo $fila['bodega']; ?>">

    <button type="submit">Actualizar</button>

</form>

</body>
</html>