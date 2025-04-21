<?php
session_start();
include 'config.php';

$erro = "";
$sucesso = "";

// Verifica se há uma mensagem de sucesso na sessão e exibe
if (isset($_SESSION['sucesso'])) {
    $sucesso = $_SESSION['sucesso'];
    unset($_SESSION['sucesso']); // Remove para não exibir novamente
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows == 1) {
        $utilizador = $resultado->fetch_assoc();
        if (password_verify($password, $utilizador['password'])) {
            $_SESSION['user'] = $utilizador['username']; // Aqui garantimos que estamos armazenando o nome correto
            header("Location: index.php");
            exit();
        } else {
            $erro = "Palavra-passe incorreta!";
        }
    } else {
        $erro = "Utilizador não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/zombiehit.png" type="assets/zombiehit.png">
    <title>Login - ZombieHit</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo" style="display: flex; align-items: center;">
            <img src="assets/zombiehitwhbg.png" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px;">
        <h1>ZombieHit</h1>
    </div>

        <ul class="nav-links">
            <li><a href="registo.php">Registar</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>

    <!-- Formulário de Login -->
    <div class="form-container">
        <h2>Iniciar Sessão</h2>
        <?php if (!empty($sucesso)) { echo "<p class='success'>$sucesso</p>"; } ?>
        <?php if (!empty($erro)) { echo "<p class='error'>$erro</p>"; } ?>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Nome de Utilizador" required>
            <input type="password" name="password" placeholder="Palavra-passe" required>
            <button type="submit">Entrar</button>
        </form>
        <p>Ainda não tens conta? <a href="registo.php">Regista-te aqui</a></p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 ZombieHit. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
