<?php
// ES: Activa reportes de errores de MySQLi
// EN: Enable MySQLi error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// ES: Configuración de conexión (usar valores de prueba)
// EN: Database connection config (use demo values)
$host = "localhost";
$db   = "biolink_demo";
$user = "root";
$pass = "";

try {
  // ES: Crear conexión
  // EN: Create connection
  $conn = new mysqli($host, $user, $pass, $db);

  // ES: Establecer charset UTF-8
  // EN: Set UTF-8 charset
  $conn->set_charset("utf8mb4");

} catch (Exception $e) {
  // ES: Error genérico (no exponer detalles)
  // EN: Generic error (do not expose details)
  die("Database connection error");
}