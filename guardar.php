<?php
// Conexión a la base de datos
$host = "localhost";
$usuario = "root";
$contrasena = ""; // o tu contraseña si la tienes
$base_de_datos = "turismo";

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Verificar conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Recibir datos del formulario
$categoria = $_POST['categoria'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];

// Insertar datos
$sql = "INSERT INTO registros (categoria, nombre, descripcion) 
        VALUES ('$categoria', '$nombre', '$descripcion')";

if ($conexion->query($sql) === TRUE) {
    echo "Registro guardado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

$conexion->close();
?>