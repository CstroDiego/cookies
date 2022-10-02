<?php

$colorFondo = "#FFFFFF";

if (isset($_POST['color'])) {
    setcookie('colorFondo', $_POST["color"], time() + 60 * 60, '/');
    header('Location: ?');
}

if (isset($_COOKIE['colorFondo'])) {
    $colorFondo = $_COOKIE['colorFondo'];

}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            background: <?= $colorFondo ?>;
        }
    </style>
</head>
<body>
<form method="POST">
    <label>
        <input type="color" name="color" value="<?= $colorFondo ?>">
    </label>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
