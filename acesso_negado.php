<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="assets/zombiehit.png" type="image/png">
    <title>Acesso Negado - ZombieHit</title>
    <link rel="stylesheet" href="css/estilo.css"> <!-- Usa o CSS que você forneceu -->
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo" style="display: flex; align-items: center;">
            <img src="assets/zombiehitwhbg.png" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px;">
            <h1>ZombieHit</h1>
        </div>
    </nav>

    <!-- Seção de Aviso -->
    <div class="download-section">
        <h1>Acesso Negado</h1>
        <p>É necessário dar login para instalar ZombieHit.</p>
        <a href="login.php" class="cta-btn">Fazer Login</a>
        <a href="javascript:history.back()" class="cta-btn" style="background: #ff0000; box-shadow: 0 0 20px #ff0000;">Voltar</a>
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; 2025 ZombieHit. Todos os direitos reservados.</p>
    </footer>

</body>
</html>
