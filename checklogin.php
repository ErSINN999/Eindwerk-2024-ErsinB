<?php
    include_once("connection.php");

    $result = 0;
    $email = htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);

    $sql = "SELECT * FROM users WHERE email = '$email' AND paswoord = '$pass'";
    $result = $conn ->query($sql);
    print $sql;
    if ($result->num_rows)
    {
        print"welkom";
        session_start();

        while ($row= $result -> fetch_assoc()){
            $_SESSION["user"]=$row['email'];
            $_SESSION["ID"]=$row['ID'];
            header("Location: login.php?melding=Je bent aangemeld");
        }
       
        
    }

    else
    {
        header("Location: login.php?melding=E-mail of wachtwoord is niet correct");
    }
    $conn->close();
?>
