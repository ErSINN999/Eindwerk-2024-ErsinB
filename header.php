<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
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
    <?php 
    include 'connection.php';
    include 'sessionCheckUser.php';
    ?>

    <nav class="navbar" style="" >
        <div id="main-nav">
            <div id="nav-links">
                <ul>
                    <li><a href="Man.php">man</a></li>
                    <li><a href="vrouw.php">vrouw</a></li>
                    <li><a href="Accessoires.php">Accessoires</a></li>
                </ul>
            </div>

            <a href="index.php"><img id="logo" src="Fotos/PRIMEFIT(wit).png" alt="PRIMEFIT"></a>
            <!--  -->
            <div id="nav-rechts">
                <ul id="nav-ul">
                    <li id="gast"><a href="login.php"><img id="user" src="Fotos/user.png" alt=""><?php if ($user!='Gast') print $user;?></a></li>
                    <li id="log-out"><a href="logout.php">
                        <?php if ($user!='Gast') print '<img id="user" src="Fotos/logout.png" alt="" >';?>
                    </a></li>
                    <li id="winkelmandje"><a href="winkelmandje.php"><img id="shoppingbag" src="Fotos/shoppingbag.png" alt="" ></a></li>
                    

                    
                </ul>
            </div>
        </div>
    </nav>

    </body>
</html>
