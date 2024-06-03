<?php
    

    include_once("connection.php");
    $result = 0;
    $user = $_POST['voornaam'];
    $email = $_POST['email'];
    $naam = $_POST['naam'];
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];
    
    if ($pass1!=$pass2)
    {
        $melding = "Beide wachtwoorden zijn niet identiek";
        header("Location: signupForm.php?melding=$melding");
    }

    else
    {
        $result = $conn->query("SELECT * FROM users WHERE voornaam='$user'");

            if($result->num_rows==0)
            {
                $sql = "INSERT INTO users (gebruikersnaam, paswoord, email, naam) VALUES ('$user', '$pass1', '$email', '$naam')";

                if($conn ->query($sql) === TRUE)
                {
                    $melding="Account is toegevoegd";
                    session_start();
                    $_SESSION["user"]=$user;
                }
                
                else
                {
                    $melding= "Error: " . $sql . "<br>" . $conn->error;
                }
            }

            else
            {
                $melding= "De email bestaat al";
            }
            header("Location: login.php?melding=$melding");
            $conn->close();
    }
?>