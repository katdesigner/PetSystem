<?php
    $color = $_POST['color'];

    setcookie(color, $color, time()+60*24, "/");

    header("Location: ../index.php");
die();