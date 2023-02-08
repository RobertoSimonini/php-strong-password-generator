<?php
include './head.php';
session_start();

$password = $_SESSION['pass'];

?>


<body class="text-center py-5">
    <h1>
        La password è <?= $password ?>
    </h1>

    <a href="http://localhost/php-strong-password-generator" class="btn btn-secondary">Torna al form</a>
</body>

</html>