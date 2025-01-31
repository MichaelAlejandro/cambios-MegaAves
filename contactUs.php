<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    $to = "maalejandro@puce.edu.ec"; // Cambia esto por tu correo
    $subject = "Nuevo mensaje de contacto de $nombre $apellido";
    $message = "Nombre: $nombre $apellido\n";
    $message .= "Email: $email\n\n";
    $message .= "Mensaje:\n$mensaje";
    
    $headers = "From: $email";
    
    mail($to, $subject, $message, $headers);
    
    // Redirigir o mostrar mensaje de éxito
    $success = "Mensaje enviado correctamente";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contáctanos - Megaves</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets\css\headerFooter.css">
    <link rel="stylesheet" href="assets\css\contactUs.css">
</head>
<body>
    <!-- Sección 1: Header -->
    <header class="header">
        <div class="slider-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="assets\images\footerNavbar\logo\logo.png" alt="Logo" class="logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="links nav-link" href="aboutUs.html">Sobre la empresa</a>
                            </li>
                            <!--
                            <li class="nav-item">
                                <a class="links nav-link" href="#">Productos</a>
                            </li>
                            -->
                            <li class="nav-item">
                                <a class="links nav-link" href="contactUs.php">Trabaja con nosotros</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>

    <section class="info-contact">
        <div class="container">
            <div class="row">
                <!-- Formulario de Contacto -->
                <div class="col-lg-6 mb-4">
                    <div class="contact-form">
                        <?php if (isset($success)): ?>
                            <div class="alert alert-success"><?php echo $success; ?></div>
                        <?php endif; ?>

                        <form method="POST" action="">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>

                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
                            </div>

                            <button type="submit" class="btn btn-submit">Enviar Mensaje</button>
                        </form>
                    </div>
                </div>

                <!-- Información de Contacto -->
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>Información de Contacto</h2>
                        <p>Estamos aquí para ayudarte. No dudes en contactarnos por cualquiera de nuestros canales de comunicación.</p>
                        
                        <ul>
                            <li><strong>Dirección:</strong> Tu dirección aquí</li>
                            <li><strong>Teléfono:</strong> +593 XXXXXXXX</li>
                            <li><strong>Email:</strong> info@megaves.com</li>
                            <li><strong>Horario de Atención:</strong> Lunes a Viernes 8:00 - 17:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección 5: Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <ul class="footer-links">
                        <li><a href="index.html">Inicio</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                <div class="col-md-4 text-center">
                    <div class="social-icons">
                        <a href="#">
                            <img src="assets\images\footerNavbar\icon\icon_linkedin.png" alt="">
                        </a>
                        <a href="#">
                            <img src="assets\images\footerNavbar\icon\icon_instagram.png" alt="">
                        </a>
                    </div>
                    <p class="footer-text">Nuestras Redes</p>
                </div>
                <div class="col-md-4">
                    <img src="assets\images\footerNavbar\logo\Megaves_principal 1.png" alt="Logo" class="footer-logo">
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>