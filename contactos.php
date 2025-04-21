<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/zombiehit.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZombieHit - Contactos</title>
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
        <li><a href="sobre.php">Sobre Nós</a></li>
        <li><a href="contactos.php" class="active">Contactos</a></li>
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

<div class="mapa-contactos-container">
    <!-- Formulário de Contacto -->
    <section id="contactos" class="contactos-section">
        <h2>Contacta-nos</h2>
        <form action="enviar_email.php" method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>
    </section>

    <!-- Secção do Mapa -->
    <section id="mapa" class="mapa-section">
        <h2>Onde Estamos</h2>
        <p>Visita-nos na nossa localização!</p>
        <div class="mapa-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3000.5006732684283!2d-8.62017512485703!3d41.23265070558038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd24665606eefb45%3A0xc5dd8b06cc341a7b!2sEscola%20Secund%C3%A1ria%20da%20Maia!5e0!3m2!1spt-PT!2spt!4v1741770640206!5m2!1spt-PT!2spt"
                allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</div>

<footer>
    <p>&copy; 2025 ZombieHit. Todos os direitos reservados.</p>
</footer>

</body>
</html>
