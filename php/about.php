<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>VitalCare - Physical Therapy Website Template</title>
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
        <link rel="manifest" href="manifest.json">
<meta name="theme-color" content="#0d6efd">

    </head>

    <body>

        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span>
            </div>
        </div>        
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

                        <a href="index.php" class="nav-item nav-link ">Inicio</a>                        
                        <a href="service.php" class="nav-item nav-link">Carrito</a>
                        <a href="about.php" class="nav-item nav-link active">Historial</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Emergencias</a>
                            <div class="dropdown-menu m-0">
                                <a href="appointment.php" class="dropdown-item">Hospitales</a>
                                <a href="feature.php" class="dropdown-item">Farmacias</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        <!-- Navbar End -->
        
         <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Historial de Compras</h1>
                <p>Aquí puedes revisar todas tus compras realizadas con VitalCare.</p>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s"></ol>    
            </div>
        </div>
        <!-- Header End -->

        <!--Body Start-->
        <div class="container my-5">
            <div class="text-center mb-5">
                
            </div>

            <div id="history-container" class="wow fadeIn" data-wow-delay="0.2s"></div>

            <div class="text-center mt-4">
                <a href="service.html" class="btn btn-secondary rounded-pill px-4 me-2">Volver al Carrito</a>
                <button id="clear-history" class="btn btn-danger rounded-pill px-4">Borrar Historial</button>
            </div>
            </div>
        <!--Body End-->
    
        <!-- Footer Start -->
         <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4"><i class="fas fa-star-of-life me-3"></i>VitalCare</h4>
                            <p></p>
                            <div class="d-flex align-items-center">
                                <i class="fas fa-share fa-2x text-white me-2"></i>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.facebook.com/profile.php?id=61583097403187"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn-square btn btn-primary text-white rounded-circle mx-1" href="https://www.instagram.com/fvitalcare/"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-6 col-xl-3">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-white"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-white">
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-primary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   
        
        <script>
            document.addEventListener("DOMContentLoaded", () => {
            const history = JSON.parse(localStorage.getItem("history")) || [];
            const container = document.getElementById("history-container");

            if (history.length === 0) {
                container.innerHTML = `
                <div class="alert alert-info text-center">
                    No hay compras registradas aún 🛍️
                </div>`;
                return;
            }

            history.slice().reverse().forEach(order => {
                const card = document.createElement("div");
                card.className = "card mb-4 shadow-sm border-0 rounded-3";
                card.innerHTML = `
                <div class="card-body">
                    <h5 class="card-title text-primary mb-3">
                    Compra del <strong>${order.date}</strong>
                    </h5>
                    <ul class="list-group list-group-flush mb-3">
                    ${order.items.map(i => `
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        <span>${i.name} <small class="text-muted">x${i.quantity}</small></span>
                        <strong>$${(i.price * i.quantity).toFixed(2)} MXN</strong>
                        </li>
                    `).join('')}
                    </ul>
                    <p class="text-end fw-bold fs-5 mb-0">
                    💰 Total: $${order.total} MXN
                    </p>
                </div>
                `;
                container.appendChild(card);
            });
            });

            document.addEventListener("click", e => {
            if (e.target.id === "clear-history") {
                if (confirm("¿Seguro que deseas borrar todo el historial de compras?")) {
                localStorage.removeItem("history");
                location.reload();
                }
            }
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
    </body>
</html>