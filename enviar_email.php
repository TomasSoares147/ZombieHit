<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Certifique-se de que o PHPMailer está instalado via Composer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'zombiehit3d@gmail.com'; 
        $mail->Password = 'whta ktjy tipa fsin'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom($email, $nome);
        $mail->addAddress('zombiehit3d@gmail.com');

        $mail->isHTML(true);
        $mail->Subject = "Novo contato de $nome";
        $mail->Body = "<strong>Nome:</strong> $nome <br> <strong>Email:</strong> $email <br> <strong>Mensagem:</strong> $mensagem";

        $mail->send();
        echo "";
    } catch (Exception $e) {
        echo "Erro ao enviar: {$mail->ErrorInfo}";
    }
}
?>

<?php session_start(); ?>
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
    <a href="inicio.php" style="text-decoration: none; color: inherit; display: flex; align-items: center;">
        <img src="assets/zombiehitwhbg.png" alt="Logo" style="width: 40px; height: 40px; margin-right: 10px;">
        <h1>ZombieHit</h1>
    </a>
</div>


    <ul class="nav-links">
        <li><a href="inicio.php">Home</a></li>
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
    <h1>Mensagem enviada com sucesso!</h1>
</section>

<footer>
    <p>&copy; 2025 ZombieHit. Todos os direitos reservados.</p>
</footer>

</body>
</html>
