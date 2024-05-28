<!doctype html>
<html lang="nl">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demo Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
</head>

<body>
    <?php
        include 'header.php';
    ?> 
    <div class="volledige-pagina">
    <div class="container">
        
            <div class="row">
                <h1 id="login">LOGIN</h1>
                <p>Voer je e-mail en wachtwoord in:</p>
            </div>
            <div class="row" style="margin-left: 30px;">
        
                <section class="row justify-content-center" >
                <section class="col-12 col-sm-8 col-md-6" style="width: 400px; height: 100px;">
                    <form class="form-container" action="checklogin.php" method="post" autocomplete="off" >
                    
                        <div class="form-group"> 
                                <input type="email" name="email" id="email" placeholder="E-mail" required>                                    
                        </div>
                        <div class="form-group">   
                            <input type="password" name="password" id="password" required placeholder="Wachtwoord">                                    
                        </div>
                            <input class="btnbtn-primary"  type="submit" value="LOGIN" alt='person'>
                        <div class="form-footer">
                            <p>Heb je nog geen account?<a href="signupForm.php">Maak account</a></p>
                            <?php 
                            if (isset($_GET["melding"])){ $melding=$_GET["melding"];}?>
                            <p id="fout"><?php if (isset($_GET["melding"])){print $melding;}?></p>
                        </div>
                        
                    </form>
            </div>
        </div>
    </div>
</body>
</html>