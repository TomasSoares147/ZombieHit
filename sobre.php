<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/zombiehit.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZombieHit - Sobre Nós</title>
    <link rel="stylesheet" href="css/contactos.css">
</head>
<body>

<nav class="navbar">
<div class="logo">
    <a href="index.php" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
        <img src="assets/zombiehitwhbg.png" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px;">
        <h1>ZombieHit</h1>
    </a>
</div>


    <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="download.php">Download</a></li>
        <li><a href="sobre.php" class="active">Sobre Nós</a></li>
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

<section class="sobre-nos">
    <h1>Sobre Nós</h1>
    <div class="equipa">
        <div class="membro">
            <img src="assets/soares.jpg" alt="David Soares">
            <h2>David Soares</h2>
            <p class="cargo">Programador</p>
        </div>
        <div class="membro">
            <img src="assets/tommy.jpg" alt="Tomás">
            <h2>Tomás Lopes</h2>
            <p class="cargo">Programador</p>
        </div>
    </div>
</section>




<footer>
    <p>&copy; 2025 ZombieHit. Todos os direitos reservados.</p>
</footer>

</body>
</html>
