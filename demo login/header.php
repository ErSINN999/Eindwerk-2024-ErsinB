
<nav class="navbar navbar-inverse">
<div class="container-fluid">
    <div class="navbar-header">
         <a class="navbar-brand" href="#">DEMO LOGIN</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Webshop</a></li>
        <li><a href="#">Informatie</a></li>
        
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li><a href=""><?php if ($user!='gast') print 'Welkom '.$user;?></a></li>
        <?php if ($user=='gast') print '<li><a href="signupForm.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>';?>
        <?php if ($user=='gast') print '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';?>
        <li><a href="logout.php"><?php if ($user!='gast') print 'Logout';?></a></li>
    </ul>
</div>

</nav>
