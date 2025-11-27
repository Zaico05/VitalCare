<?php
include("conexion.php");
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitizar y validar
    $nombre = trim($_POST['nombre']);
    $correo = filter_var(trim($_POST['correo']), FILTER_SANITIZE_EMAIL);
    $telefono = trim($_POST['telefono']);
    $password = $_POST['password'];

    if (empty($telefono) || !preg_match("/^[0-9]{10}$/", $telefono)) {
    die("El teléfono debe contener exactamente 10 números.");
}

    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&]).{8,}$/", $password)) {
        die("La contraseña debe incluir mayúsculas, minúsculas, números y símbolos (mínimo 8 caracteres).");
    }
    if (empty($nombre) || empty($correo) || empty($password)) {
        $mensaje = "Por favor llena todos los campos requeridos.";
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $mensaje = "El correo no es válido.";
    } else {

        // Validar correo duplicado
        $check = $conn->prepare("SELECT id FROM usuarios WHERE correo = ?");
        $check->bind_param("s", $correo);
        $check->execute();
        $check->store_result();

        if ($check->num_rows > 0) {
            $mensaje = "Este correo ya está registrado.";
        } else {

            // Hashear contraseña
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO usuarios (nombre, correo, telefono, password) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $nombre, $correo, $telefono, $passwordHash);

            if ($stmt->execute()) {
                echo "<script>
                        alert('Registro exitoso. Ahora puedes iniciar sesión.');
                        window.location.href='login.php';
                      </script>";
                exit;
            } else {
                $mensaje = "Error al registrar: " . $stmt->error;
            }
            $stmt->close();
        }
        $check->close();
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Registro | VitalCare</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Evitar caché en PWA -->
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />

  <!-- CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <!-- Íconos -->
  <link rel="manifest" href="/VitalCare/manifest.json">
  <meta name="theme-color" content="#0d6efd">

  <!-- Registrar Service Worker -->
  <script>
    if ("serviceWorker" in navigator) {
      navigator.serviceWorker.register("/VitalCare/service-worker.js")
        .then(() => console.log("SW registrado"))
        .catch(err => console.log("Error SW:", err));
    }
  </script>
</head>

<body>

<nav class="navbar navbar-light bg-white px-4 py-3">
    <a href="index.php" class="navbar-brand">
        <h1 class="text-primary m-0"><i class="fas fa-star-of-life me-3"></i>VitalCare</h1>
    </a>
</nav>

<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-5 col-md-7">
      <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body p-5">
          <h2 class="text-center text-primary mb-4">Crear cuenta</h2>

          <?php if (!empty($mensaje)): ?>
            <div class="alert alert-warning text-center">
              <?= htmlspecialchars($mensaje) ?>
            </div>
          <?php endif; ?>

          <form id="registroForm" method="POST" autocomplete="off" novalidate>

            <div class="form-group mb-3">
              <input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required>
            </div>

            <div class="form-group mb-3">
              <input type="email" class="form-control" name="correo" placeholder="Correo electrónico" required>
            </div>

            <div class="form-group mb-3">
              <input type="text" class="form-control" name="telefono" id="telefono" maxlength="10" pattern="[0-9]{10}"  required placeholder="Teléfono (10 dígitos)">
            </div>

            <div class="form-group mb-3 position-relative">
                <input type="password" class="form-control" name="password" id="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&]).{8,}" required placeholder="Contraseña segura">
                <i id="togglePassword" class="fas fa-eye position-absolute" style="right: 15px; top: 50%; transform: translateY(-50%); cursor: pointer;"></i>
            </div>

            <button type="submit" class="btn btn-primary w-100">Registrarse</button>

          </form>

          <p class="text-center mt-3">
            ¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a>
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
document.getElementById("registroForm").addEventListener("submit", function(e) {

    const nombre = document.querySelector("input[name='nombre']").value.trim();
    const correo = document.querySelector("input[name='correo']").value.trim();
    const telefono = document.getElementById("telefono").value.trim();
    const password = document.getElementById("password").value;

    const regexTel = /^[0-9]{10}$/;
    const regexPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*#?&]).{8,}$/;

    // VALIDAR NOMBRE
    if (nombre.length < 3) {
        alert("El nombre debe tener al menos 3 caracteres.");
        e.preventDefault();
        return;
    }

    // VALIDAR EMAIL
    if (!correo.includes("@") || !correo.includes(".")) {
        alert("El correo electrónico no es válido.");
        e.preventDefault();
        return;
    }

    // VALIDAR TELÉFONO
    if (!regexTel.test(telefono)) {
        alert("El teléfono debe contener exactamente 10 números.");
        e.preventDefault();
        return;
    }

    // VALIDAR CONTRASEÑA
    if (!regexPass.test(password)) {
        alert("La contraseña debe tener:\n- Mayúscula\n- Minúscula\n- Número\n- Símbolo\n- Mínimo 8 caracteres");
        e.preventDefault();
        return;
    }
});

document.getElementById("togglePassword").addEventListener("click", function () {

    const input = document.getElementById("password");

    // Cambiar tipo de input
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


</body>
</html>

<?php $conn->close(); ?>
