<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>

    <?php

    echo "Bem-vindo, " . $_SESSION["nome"] . "!";

    ?>

</body>
</html>