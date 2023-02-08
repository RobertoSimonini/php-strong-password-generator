<?php
include './head.php';
session_start();

$password = $_SESSION['pass'];

?>


<body>
    <h1 class="text-center py-5">
        La password è <?= $password ?>
    </h1>
</body>

</html>