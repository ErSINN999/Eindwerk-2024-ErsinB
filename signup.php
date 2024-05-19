<?php
    include_once("connection.php");
    $result = 0;
    $user = $_POST['username'];
    $pass1 = $_POST['password1'];
    $email = $_POST['email'];
    $naam = $_POST['naam'];
   
    


    $result = $conn->query("SELECT * FROM users WHERE gebruikersnaam='$user'");

        if($result->num_rows==0)
        {
            $sql = "INSERT INTO users (gebruikersnaam, paswoord, Naam, email) VALUES ('$user', '$pass1', '$email', '$naam')";

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
            $melding= "De gebruikersnaam bestaat al";
        }
        header("Location: signupForm.php?melding=$melding");
        $conn->close();
?>