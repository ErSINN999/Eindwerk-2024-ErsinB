<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>  
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="Fotos/PRIMEFIT.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <?php
        include_once("header.php");
    ?>        
    <div class="container">
        <div class="row">
            <h1>Sign Up</h1>
            <p>Vul onderstaande gegevens in:</p>
        </div>
        <div class="row" style="margin-left: 30px;">
            <section class="container-fluid">
          
            <section class="row justify-content-center">
            <section class="col-12 col-sm-8 col-md-6" style="width: 400px; height: 100px;">
                <form class="form-container" action="signup.php" method="post" autocomplete="off" >                  
                      
                    <div class="form-group">
                        <input type="text" name="voornaam" id="voornaam" placeholder="Voornaam" required>                                    
                    </div>

                    <div class="form-group">
                        <input type="text" name="naam" id="naam" placeholder="Naam" required>                                    
                    </div>

                    <div class="form-group">
                        
                        <input type="email" name="email" id="email" placeholder="E-mail" required>                                    
                    </div>

                    <div class="form-group">
                        
                        <input type="password" name="password1" id="password1" placeholder="Wachtwoord" required>                                    
                    </div>

                    <div class="form-group">
                        
                        <input type="password" name="password2" id="password2" placeholder="Wachtwoord herhaal" required>                                    
                    </div>

                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" value="MAAK MIJN ACCOUNT" alt='person'>
                    </div>
                    <div class="form-footer">
                        <p> Heb je al een account? <a href="login.php">Login</a></p>
                    </div>
                    <?php 
                    if (isset($_GET["melding"])){ $melding=$_GET["melding"];}?>
                    <p id="fout"><?php if (isset($_GET["melding"])){print $melding;}?></p>
                </form>
         </div>
    </div>
    
    </body>
</html>