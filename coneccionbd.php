<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
  die("Error en la conexión: " . $conn->connect_error);
}

// Crear la base de datos "prueba"
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
  echo "Base de datos creada exitosamente\n";
} else {
  echo "Error al crear la base de datos: " . $conn->error;
}

// Seleccionar la base de datos "prueba"
$conn->select_db($dbname);

// Crear la tabla "operaciones"
$sql = "CREATE TABLE operaciones (
  tipo_operacion VARCHAR(50),
  fecha DATE,
  monto DECIMAL(10,2)
)";
if ($conn->query($sql) === TRUE) {
  echo "Tabla 'operaciones' creada exitosamente\n";
} else {
  echo "Error al crear la tabla 'operaciones': " . $conn->error;
}

// Crear la tabla "datos"
$sql = "CREATE TABLE datos (
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  telefono VARCHAR(20)
)";
if ($conn->query($sql) === TRUE) {
  echo "Tabla 'datos' creada exitosamente\n";
} else {
  echo "Error al crear la tabla 'datos': " . $conn->error;
}

// Cerrar la conexión
$conn->close();
