<?php
// ES: Incluir conexión
// EN: Include connection
include __DIR__ . "/db.php";

// ES: Obtener slug
// EN: Get slug
$slug = $_GET['t'] ?? '';

if ($slug === '') {
  die("Contact not available");
}

// ES: Consulta
// EN: Query
$stmt = $conn->prepare("
  SELECT nombre, whatsapp, email, rol
  FROM tecnicos
  WHERE slug = ?
");
$stmt->bind_param("s", $slug);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows === 0) {
  die("Contact not found");
}

$tec = $res->fetch_assoc();

// ES: Limpieza de datos
// EN: Data cleaning
$nombre = trim($tec['nombre']);
$rol    = trim($tec['rol']);
$email  = trim($tec['email']);

// ES: Limpiar teléfono
// EN: Clean phone number
$telefono = preg_replace('/[^0-9]/', '', $tec['whatsapp']);
$telefono = '+' . $telefono;

// ES: Headers VCF
// EN: VCF headers
header('Content-Type: text/vcard; charset=utf-8');
header('Content-Disposition: attachment; filename="'.$slug.'.vcf"');

// ES: Generar vCard
// EN: Generate vCard
echo "BEGIN:VCARD\r\n";
echo "VERSION:3.0\r\n";
echo "FN:$nombre\r\n";
echo "N:$nombre;;;;\r\n";
echo "ORG:Demo Company\r\n"; // Empresa genérica
echo "TITLE:$rol\r\n";
echo "TEL;TYPE=CELL:$telefono\r\n";

if (!empty($email)) {
  echo "EMAIL;TYPE=INTERNET:$email\r\n";
}

echo "END:VCARD\r\n";
exit;