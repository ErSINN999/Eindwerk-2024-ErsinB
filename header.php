<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    h1#verzending
    {
        margin: 0;
    }

    div#main-nav
    {
        padding: 0 ;
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

            <a href="index.html"><img id="logo" src="Fotos/PRIMEFIT(wit).png" alt="PRIMEFIT"></a>
            
            <div id="nav-rechts">
                <ul>
                    <li><a href="login.php"><?php if ($user!='gast') print 'Welkom '.$user;?><img id="user" src="Fotos/user.png" alt=""></a></li>
                    <?php if ($user=='gast') print '<li><a href="signupForm.php"><span class="glyphicon glyphicon-user"></span></a></li>';?>
                    <?php if ($user=='gast') print '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';?>
                    <li><a href="logout.php"><?php if ($user!='gast') print 'Logout';?></a></li>
                    <li><a href=""><img id="shoppingbag" src="Fotos/shoppingbag.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </nav>

    </body>
</html>
