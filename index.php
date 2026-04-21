<?php
// ES: Incluir conexión a base de datos
// EN: Include database connection
include __DIR__ . "/db.php";

// ES: Obtener slug desde la URL
// EN: Get slug from URL
$slug = $_GET['t'] ?? '';

if ($slug === '') {
  die("User not specified");
}

// ES: Consulta segura
// EN: Secure query
$stmt = $conn->prepare("SELECT * FROM tecnicos WHERE slug = ?");
$stmt->bind_param("s", $slug);
$stmt->execute();
$res = $stmt->get_result();

if ($res->num_rows === 0) {
  die("User not found");
}

// ES: Obtener datos
// EN: Fetch data
$tec = $res->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- ES: Título dinámico sin nombre de empresa -->
<!-- EN: Dynamic title without company name -->
<title><?= $tec['nombre'] ?> | BioLink</title>

<link rel="stylesheet" href="css/style.css">
</head>

<body>

<main class="container">

<header class="profile-header">

  <!-- ES: Logo por defecto si no existe -->
  <!-- EN: Default logo fallback -->
  <img src="img/<?= (!isset($tec['logo']) || trim($tec['logo']) === '') ? 'default.png' : $tec['logo'] ?>" class="logo">

  <h1 class="name"><?= $tec['nombre'] ?></h1>
  <p class="role"><?= $tec['rol'] ?></p>

</header>

<section class="links">

<?php if($tec['slug']) { ?>
<a class="link" href="vcf.php?t=<?= urlencode($tec['slug']) ?>">
  <span class="icon-box">
    <img src="img/cont.png" alt="Contact">
  </span>
  Save Contact
</a>
<?php } ?>

<?php
// ES: Mensaje de WhatsApp genérico
// EN: Generic WhatsApp message
$mensaje_wpp = "Hello {$tec['nombre']}, I am contacting you from your BioLink. I would like more information.";
?>

<a class="link" target="_blank"
   href="https://wa.me/<?= $tec['whatsapp'] ?>?text=<?= urlencode($mensaje_wpp) ?>">
  <span class="icon-box">
    <img src="img/wpp.png" alt="WhatsApp">
  </span>
  WhatsApp
</a>

<a href="#"
   class="link email-btn"
   data-email="<?= $tec['email'] ?>"
   data-subject="Information Request"
   data-body="Hello <?= $tec['nombre'] ?>,%0D%0AI would like more information.">

  <span class="icon-box">
    <img src="img/gmail.png" alt="Email">
  </span>
  Email
</a>

<?php if($tec['facebook'] || $tec['instagram'] || $tec['web'] || $tec['linkedin']) { ?>

<div class="social-wrapper">

  <button class="link social-toggle" type="button">
    <span class="icon-box">
      <img src="img/redes.png" alt="Social">
    </span>
    Social Media
  </button>

  <div class="social-links">

    <?php if($tec['web']) { ?>
    <a class="social-icon" target="_blank" href="<?= $tec['web'] ?>">
      <img src="img/web.png" alt="Web">
    </a>
    <?php } ?>

    <?php if($tec['facebook']) { ?>
    <a class="social-icon" target="_blank" href="<?= $tec['facebook'] ?>">
      <img src="img/face.png" alt="Facebook">
    </a>
    <?php } ?>

    <?php if($tec['instagram']) { ?>
    <a class="social-icon" target="_blank" href="<?= $tec['instagram'] ?>">
      <img src="img/ins.png" alt="Instagram">
    </a>
    <?php } ?>

    <?php if($tec['linkedin']) { ?>
    <a class="social-icon" target="_blank" href="<?= $tec['linkedin'] ?>">
      <img src="img/linkedin.png" alt="LinkedIn">
    </a>
    <?php } ?>

  </div>
</div>

<?php } ?>

</section>

<footer class="footer">

<!-- ES: Carrusel con enlaces genéricos -->
<!-- EN: Carousel with generic links -->
<div class="footer-carousel">
  <div class="carousel-track" id="carousel">

    <a href="#" class="carousel-item">Category 1</a>
    <a href="#" class="carousel-item">Category 2</a>
    <a href="#" class="carousel-item">Category 3</a>

  </div>
</div>

<br><br><br>

<small>BioLink © 2026</small>

</footer>
</main>

<script src="js/email.js"></script>
<script src="js/carousel.js"></script>

</body>
</html>