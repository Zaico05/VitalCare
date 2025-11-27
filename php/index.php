<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head> 
    <meta charset="utf-8">
    <title>Panel | VitalCare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- Fuentes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 
    <!-- Iconos y librerías externas -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Librerías locales -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <!-- Estilos principales -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <!-- Manifest PWA -->
    <link rel="manifest" href="../manifest.json">
    <meta name="theme-color" content="#0d6efd">

</head>

<body>

    <!-- Spinner -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Cargando...</span>
        </div>
    </div>

    <!-- Topbar -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0 align-items-center" style="height: 45px;">
            <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                <div class="d-flex flex-wrap">
                    <a href="#" class="text-light me-4"><i class="fas fa-map-marker-alt text-primary me-2"></i>Ubicación</a>
                    <a href="#" class="text-light me-4"><i class="fas fa-phone-alt text-primary me-2"></i>+01234567890</a>
                    <a href="#" class="text-light me-0"><i class="fas fa-envelope text-primary me-2"></i>fvitalcare@gmail.com</a>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex align-items-center justify-content-end">
                    <a href="https://www.facebook.com/profile.php?id=61583097403187" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/fvitalcare/" class="btn btn-light btn-square border rounded-circle nav-fill me-3"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white px-4 px-lg-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>VitalCare</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link active">Inicio</a>                        
                    <a href="service.php" class="nav-item nav-link">Carrito</a>
                    <a href="about.php" class="nav-item nav-link">Historial</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Emergencias</a>
                        <div class="dropdown-menu m-0">
                            <a href="appointment.php" class="dropdown-item">Hospitales</a>
                            <a href="feature.php" class="dropdown-item">Farmacias</a>
                        </div>
                    </div>
                </div>
                <a href="logout.php" class=" btn btn-outline-danger rounded-pill text-dark py-2 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-slash" viewBox="0 0 16 16">
                    <path d="M13.879 10.414a2.501 2.501 0 0 0-3.465 3.465zm.707.707-3.465 3.465a2.501 2.501 0 0 0 3.465-3.465m-4.56-1.096a3.5 3.5 0 1 1 4.949 4.95 3.5 3.5 0 0 1-4.95-4.95ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m.256 7a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
                    </svg>
                </a>
            </div>
        </nav>
    </div>

    <!-- Sección principal -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-img pb-5 ps-5">
                        <img src="../img/Farmacia1.jpg" class="img-fluid rounded w-100" style="object-fit: cover;" alt="Image">
                        <div class="about-img-inner">
                            <img src="../img/Farmacia2.jpg" class="img-fluid rounded-circle w-100 h-100" alt="Image">
                        </div>
                        <div class="about-experience">Buscando excelencia</div>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.4s">
                    <div class="section-title text-start mb-5">
                        <h4 class="sub-title pe-3 mb-0">Acerca de Nosotros</h4>
                        <h1 class="display-3 mb-4">Nuestra Historia</h1>
                        <p class="mb-4">Farmacia VitalCare nació con el propósito de transformar la manera en que las personas acceden a sus medicamentos.
                        En un mundo donde el tiempo vale oro, decidimos crear una farmacia digital que combine rapidez, confianza y atención personalizada.</p>
                        <div class="mb-4">
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>Compra de medicamentos.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>Servicios de atención 24 hrs.</p>
                            <p class="text-secondary"><i class="fa fa-check text-primary me-2"></i>Recordatorios de medicamentos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Section -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-3 mb-4">Por qué deberían elegirnos</h1>
                <p class="mb-0">En VitalCare, no somos solo una farmacia en línea. Somos tu aliado en salud, bienestar y comodidad.</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <!-- <img src="../img/Mision.png" alt="Misión" style="width: 50%; height: 100%;"> -->
                                <h5 class="mb-4">Misión</h5>
                            </div>
                        </div>
                        
                        <br>
                        <p>Brindar a nuestros clientes acceso rápido, confiable y seguro a medicamentos y productos de salud, ofreciendo un servicio digital personalizado que promueva el bienestar y la atención integral las 24 horas del día.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-4">
                            <div class="p-3 d-inline-flex bg-white rounded">
                                <!-- <img src="../img/Vision.png" alt="Visión" style="width: 50%; height: 100%;"> -->
                                 <h5 class="mb-4">Visión</h5>
                            </div>
                        </div>
                            <p>Ser la farmacia digital líder en atención al cliente y servicios de salud, reconocida por su innovación, compromiso y calidad humana.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    
                    <div class="feature-item p-4">
                        <div class="feature-icon mb-4">
                        <div class="p-3 d-inline-flex bg-white rounded">
                            <!-- <img src="../img/Valores.png" alt="Valores" style="width: 80%; height: 50%;"> -->
                             <h5 class="mb-4">Valores</h5>
                        </div>
                    </div> 
                        <ul>
                            <li><b>Compromiso:</b> Cuidamos la salud y satisfacción de cada cliente.</li>
                            <li><b>Confianza:</b> Seguridad y transparencia en cada servicio.</li>
                            <li><b>Innovación:</b> Tecnología para mejorar la atención farmacéutica.</li>
                            <li><b>Empatía:</b> Escuchamos y entendemos las necesidades de los usuarios.</li>
                            <li><b>Excelencia:</b> Superamos expectativas en cada experiencia.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
        <div class="container py-5 text-center text-white">
            <h4><i class="fas fa-star-of-life me-3"></i>VitalCare</h4>
            <p class="mb-0">© 2025 VitalCare. Todos los derechos reservados.</p>
            <div class="mt-3">
                <a class="btn btn-primary rounded-circle mx-1" href="https://www.facebook.com/profile.php?id=61583097403187"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary rounded-circle mx-1" href="https://www.instagram.com/fvitalcare/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("loginForm");
    if (form) form.reset();
    window.addEventListener("pageshow", e => {
        if (e.persisted) form.reset();
    });
    });
    </script>

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>

    <script>
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('../service-worker.js')
    .then(reg => console.log("SW registrado:", reg))
    .catch(err => console.log("Error al registrar SW:", err));
}
</script>

</body>
</html>
