<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    h1#verzending
    {
        margin: 0;
    }
</style>

<div id="main">
    <h1 id="verzending">Gratis verzending vanaf €50</h1>
   

    <nav class="navbar" >
        <div id="main-nav">
            <div id="nav-links">
                <ul>
                    <li><a href="Man.html">man</a></li>
                    <li><a href="vrouw.html">vrouw</a></li>
                    <li><a href="Accessoires.html">Accessoires</a></li>
                </ul>
            </div>

            <a href="index.php"><img id="logo" src="Fotos/PRIMEFIT(wit).png" alt="PRIMEFIT"></a>
            <!--  -->
            <div id="nav-rechts">
                <ul>
                    <li><a href="login.php"><img id="user" src="Fotos/user.png" alt=""><?php if ($user!='Login') print $user;?></a></li>
                    
                    <li><a href=""><img id="shoppingbag" src="Fotos/shoppingbag.png" alt=""></a></li>
                    <li><a href="logout.php">
                        <?php if ($user!='Login') print '<img id="user" src="Fotos/logout.png" alt="">';?>
                    </a></li>
                </ul>
            </div>
        </div>
    </nav>

    </body>
</html>
