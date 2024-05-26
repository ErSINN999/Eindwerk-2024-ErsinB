<?php
    include_once("connection.php");

    $result = 0;
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);

    $result = $conn->query("SELECT * FROM users WHERE email = '$email' AND paswoord = '$pass'");

    if ($result->num_rows)
    {
        print"welkom";
        session_start();
        $_SESSION["email"]=$email;
        header("Location: login.php?melding=Je bent aangemeld");
    }

    else
    {
        header("Location: login.php?melding=E-mail of wachtwoord is niet correct");
    }
    $conn->close();
?>
