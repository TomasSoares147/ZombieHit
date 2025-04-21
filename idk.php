<?php
include 'config.php';

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']); // Prevenção XSS
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Verifica se o utilizador já existe
    $checkQuery = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        $erro = "Nome de utilizador ou e-mail já registado!";
    } else {
        // Insere novo utilizador
        $query = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("sss", $username, $password, $email);

        if ($stmt->execute()) {
            header("Location: login.php");
            exit();
        } else {
            $erro = "Erro ao registar!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/zombiehit.png" type="assets/zombiehit.png">
    <title>Registo - ZombieHit</title>
    <link rel="stylesheet" href="css/registar.css">
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
 
    <!-- Formulário de Registo -->
    <div class="form-container">
        <h2>Registar Conta</h2>
        <?php if (!empty($erro)) { echo "<p class='error'>$erro</p>"; } ?>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Nome de Utilizador" required>
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Palavra-passe" required>
            <button type="submit">Registar</button>
        </form>
        <p>Já tens conta? <a href="login.php">Inicia sessão</a></p>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 ZombieHit. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
