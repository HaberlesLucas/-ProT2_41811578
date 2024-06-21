<?php
$ifRegisteredUser = false;
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'Tu Sitio Web'; ?></title>
    <!-- Bootstrap local -->
    <link href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/styles.css'); ?>" rel="stylesheet">
</head>

<body class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- IMAGEN COMO LOGOTIPO -->
            <a class="navbar-brand" href="<?= base_url('/') ?>">
                <img src="<?= base_url('/assets/img/logo.jpeg') ?>" class="img-fluid" style="width: 40px; height: 40px;">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('/') ?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/quienes-somos') ?>">Quiénes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('/acerca-de') ?>">Acerca de</a>
                    </li>
                    <?php if (!$ifRegisteredUser): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/login') ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('/registrarse') ?>">Registrarse</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Mi Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cerrar Sesión</a>
                        </li>
                    <?php endif; ?>
                </ul>
                <!-- Buscador -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS local -->
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>
