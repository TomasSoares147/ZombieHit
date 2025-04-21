<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/zombiehit.png" type="image/png">
    <title>ZombieHit - Início</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
<div class="logo">
    <a href="index.php" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
        <img src="assets/zombiehitwhbg.png" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px;">
        <h1>ZombieHit</h1>
    </a>
</div>

</div>

    <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="download.php">Download</a></li>
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

<section class="hero">
    <h1>Bem-vindo ao ZombieHit</h1>
    <h2>Este jogo foi desenvolvido no âmbito da Prova de Aptidão Profissional com intuito de o jogador matar zombies e com o tempo a passar mais ondas de zombies virão e a dificuldade aumentará.</h2> 

    <!-- Vídeo adicionado -->
    <video width="600" controls>
        <source src="assets/zombiehitvideo.mp4" type="video/mp4">
        Seu navegador não suporta a exibição de vídeos.
    </video>

    <h3>Interessado? <a href="download.php" style="color:rgb(27, 163, 27); text-decoration: underline;">Clique aqui</a> e testa já o teu jogo de Zombie favorito.</h3>

</section>


<!-- Footer -->
<footer>
    <p>&copy; 2025 ZombieHit. Todos os direitos reservados.</p>
</footer>

</body>
</html>
