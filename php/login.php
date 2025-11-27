<?php
session_start();
include("conexion.php");
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = trim($_POST['correo']);
    $password = $_POST['password'];

    if (empty($correo) || empty($password)) {
        $mensaje = "Por favor, llena todos los campos.";
    } else {

        $sql = "SELECT id, nombre, correo, password FROM usuarios WHERE correo = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error en la consulta SQL: " . $conn->error);
        }

        $stmt->bind_param("s", $correo);
        $stmt->execute();
        $resultado = $stmt->get_result();

        if ($resultado && $resultado->num_rows > 0) {

            $usuario = $resultado->fetch_assoc();

            if (password_verify($password, $usuario['password'])) {

                // Sesión segura
                session_regenerate_id(true);

                $_SESSION['usuario'] = $usuario['correo'];
                $_SESSION['nombre'] = $usuario['nombre'];
                $_SESSION['id'] = $usuario['id'];

                echo "<script>
                        alert('Bienvenido, " . htmlspecialchars($usuario['nombre']) . "');
                        window.location.href='../php/index.php';
                      </script>";
                exit;

            } else {
                $mensaje = "La contraseña no es correcta.";
            }

        } else {
            $mensaje = "No existe una cuenta con este correo.";
        }

        $stmt->close();
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Iniciar Sesión | VitalCare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Evitar caché -->
  <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">

  <!-- CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

  <!-- PWA -->
  <link rel="manifest" href="../manifest.json">
  <meta name="theme-color" content="#0d6efd">

</head>

<body>

    <nav class="navbar navbar-light bg-white px-4 py-3">
        <a href="../index.php" class="navbar-brand">
            <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>VitalCare</h1>
        </a>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <h2 class="text-center text-primary mb-4">Iniciar sesión</h2>

                        <?php if (!empty($mensaje)): ?>
                            <div class="alert alert-warning text-center"><?= htmlspecialchars($mensaje) ?></div>
                        <?php endif; ?>

                        <form id="loginForm" method="POST" autocomplete="off" novalidate>

                            <div class="form-group mb-3">
                                <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required>
                            </div>

                            <div class="form-group mb-3 position-relative">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>

                                <!-- Mostrar contraseña -->
                                <i id="togglePassword"
                                   class="fas fa-eye position-absolute"
                                   style="right: 15px; top: 50%; transform: translateY(-50%); cursor:pointer;">
                                </i>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">Iniciar sesión</button>
                        </form>

                        <p class="text-center mt-3">
                            ¿No tienes cuenta? 
                            <a href="registro.php">Regístrate</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center py-3 bg-dark text-white mt-5">
        <p class="mb-0">&copy; 2025 VitalCare. Todos los derechos reservados.</p>
    </footer>

<script>
// Mostrar / ocultar contraseña
document.getElementById("togglePassword").addEventListener("click", function () {

    const input = document.getElementById("password");

    if (input.type === "password") {
        input.type = "text";
        this.classList.remove("fa-eye");
        this.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        this.classList.remove("fa-eye-slash");
        this.classList.add("fa-eye");
    }

});
</script>

<script>
// Registrar Service Worker
if ("serviceWorker" in navigator) {
    navigator.serviceWorker.register("/VitalCare/service-worker.js")
        .then(() => console.log("SW registrado"))
        .catch(err => console.error("Error SW:", err));
}
</script>

</body>
</html>
