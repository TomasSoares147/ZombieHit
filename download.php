<?php
 session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['user'])) {
    header("Location: acesso_negado.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/zombiehit.png" type="assets/zombiehit.png">
    <title>ZombieHit - Download</title>
    <link rel="stylesheet" href="css/download.css">
</head>
<body>

<nav class="navbar">
<div class="logo">
    <a href="download.php" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
        <img src="assets/zombiehitwhbg.png" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px;">
        <h1>ZombieHit</h1>
    </a>
</div>


    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="download.php" class="active">Download</a></li>
        <li><a href="sobre.php">Sobre Nós</a></li>
        <li><a href="contactos.php">Contactos</a></li>
        <?php if (isset($_SESSION['user'])): ?>
            <li class="dropdown">
                <a href="#" class="dropbtn"><?php echo $_SESSION['user']; ?> ⌄</a>
                <div class="dropdown-content">
                    <a href="logout.php">Terminar Sessão</a>
                </div>
            </li>
        <?php else: ?>
            <li><a href="registo.php">Registar</a></li>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>

<section class="download-section">
    <h1>Descarregar o Jogo</h1>
    <p>Baixa agora a versão mais recente do ZombieHit e começa a jogar!</p>
    <a href="assets/ZombieHit.zip" class="cta-btn" download>Descarregar Agora</a>
</section>

<footer>
    <p>&copy; 2025 ZombieHit. Todos os direitos reservados.</p>
</footer>

</body>
</html>
