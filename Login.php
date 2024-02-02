<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "encuesta";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";

$user = $_POST['inputID'];
$pass = $_POST['PasswordID'];

// Consulta SQL para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE username = '$user' AND password = '$pass'";
$resultado = $conn->query($sql);

// Verificar si se encontraron coincidencias
if ($resultado->num_rows > 0) {
    // Inicio de sesión exitoso, guarda información en la sesión
    session_start();

    $_SESSION['username'] = $user;

    $row = $resultado->fetch_assoc();

    // Almacena información relevante en la sesión
    $_SESSION['usuarioID'] = $row['UsuarioID'];
    $_SESSION['tipoUsuario'] = $row['TipoUsuario'];

    // Redirige según el tipo de usuario
    if ($row['TipoUsuario'] == 'admin') {
        header("Location: admin_home.php");
    } else {  
        header("Location: cliente_home.php");
    }
} else {
    header("Location: index.php?error");
}

// Cerrar conexión
$conn->close();;
?>