
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Fotos/PRIMEFIT.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>PrimeFit</title>
</head>
<script>
    function myFunction() {
      var x = document.getElementById("nav-links");
      if (x.style.display === "block") {
        x.style.display = "none";
      } else {
        x.style.display = "block";
      }
    }
  </script>
<body>
    
<!-----------------------Navigatie--------------------->

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
                    <li><a href="login.php"><img id="user" src="Fotos/user.png" alt=""></a></li>
                    <li><a href=""><img id="shoppingbag" src="Fotos/shoppingbag.png" alt=""></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="main-page">

    <?php 
        include 'connection.php';
        $sql = "SELECT * FROM `tblproducten`";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()) {
    ?>
        <div id="video">
            <video  width="100%" autoplay muted src="Fotos/videohome.mp4"></video>
                <div id="voor-video">
                    <div id="position-shop-nu">
                        <a href="#p-trend"><button id="shop-nu">SHOP NU</button></a>
                    </div>
                </div>         
        </div>
    <!----------------------Producten code--------------------->
        <div id="geslacht">
            <a href="#p-man">
                <button id="btn-man">
                man
                </button>
            </a>

            <a href="#p-vrouw">
                <button id="btn-vrouw">
                vrouw
                </button>
            </a>
        </div>
        
        <div id="container-producten">

    <!----------------------------------------------------------------------------------------------------->
<!-- TREND PRODUCTEN- -->
            <div id="p-trend">
                Trend Producten
            </div>

            <div id="container-verkoop">

                <div class="Product">
                    <div class="foto-container">
<!--Product box-->      <a href="product.php?id=<?php echo $row['ProductID']?>"><img class="Kleed-foto" alt="schoenen" src="Fotos/Kleding/man/<?php echo $row['afbeelding']; ?>">
                        <img class="hover-pic" src="Fotos/Kleding/man/cashmere(2).jpg" alt=""></a> 
                        
                    </div>
                    <div>
                        <p class="brand-name">217 UGLY PANTS</p>
                        <p class="prijs"><span class="originale-prijs-korting">€38,00 </span> <span class="korting">€34,00 </span></p>

                        <div class="kleur-box">
                            <a href="">
                                <img class="kleur" src="Fotos/Kleur/cashmere.png" alt="donkerblauw">
                                <img class="kleur" src="Fotos/Kleur/grey-cashmere.png" alt="grey-cashmere">
                                <img class="kleur" src="Fotos/Kleur/hypnosis.png" alt="hypnosis">
                                <img class="kleur" src="Fotos/Kleur/night.png" alt="night">
                            </a>
                        </div>
                    </div>   
                </div>
<!----------------------------------------------------------------------------------------------------->
                <div class="Product">
                    <div class="foto-container">
<!--Product box--> 
                            <a href="product.php?id=<?php echo $row['ProductID']?>"><img class="Kleed-foto" alt="kleed" src="Fotos/Kleding/man/<?php echo $row['afbeelding']; ?>">
                            <img class="hover-pic" src="Fotos/Kleding/man/zwart-hoodie(2).jpg" alt="SKYLINE">
                        </a>
                    </div>
                    <div>
                        <p class="brand-name">350 FREEFLOW Zwarte HOODIE</p>
                        <p class="prijs">€45,00</p>

                        <div class="kleur-box">
                            <a href="">
                                <img class="kleur" src="Fotos/Kleur/donkerblauw.png" alt="">
                                <img class="kleur" src="Fotos/Kleur/donkergroen.png" alt="">
                            </a>
                        </div>
                    </div>   
                </div>
<!----------------------------------------------------------------------------------------------------->
                <div class="Product">
                    <div class="foto-container">
<!--Product box-->   <a href="product-pagina">
                            <img class="Kleed-foto" src="Fotos/Kleding/man/Lah-casa(1).jpg" alt="">
                            <img class="hover-pic" src="Fotos/Kleding/man/Lah-casa(2).jpeg" alt="">
                        </a>
                    </div>
                    <div>
                        <p class="brand-name">510 Lah casa shirt</p>
                        <p class="prijs">€35,00</p>

                        <div class="kleur-box">
                            <a href="">
                                <img class="kleur" src="Fotos/Kleur/donkerblauw.png" alt="">
                                <img class="kleur" src="Fotos/Kleur/donkergroen.png" alt="">
                            </a>
                        </div>
                    </div>   
                </div>
<!----------------------------------------------------------------------------------------------------->
                <div class="Product">
                    <div class="foto-container">
<!--Product box-->   <a href="product-pagina">
                            <img class="Kleed-foto" src="Fotos/Kleding/man/Jungle-shorts.jpg" alt="">
                            <img class="hover-pic" src="Fotos/Kleding/man/Lah-casa(2).jpeg" alt="">
                        </a>
                        </div>
                    <div>
                        <p class="brand-name">510 Lah casa short</p>
                        <p class="prijs">€40,00</p>

                        <div class="kleur-box">
                            <a href="">
                                <img class="kleur" src="Fotos/Kleur/donkerblauw.png" alt="">
                                <img class="kleur" src="Fotos/Kleur/donkergroen.png" alt="">
                            </a>
                        </div>
                    </div>   
                </div>     
            </div>
        </div>

<!-------------LANGE FOTO   -->
        <div id="main-longpicture(1)">
            <img id="main-langfoto1" src="Fotos/Kleding/main-longpicture(1).jpeg" alt="">
        </div>
<!----------------------------------------------------------------------------------------------------->

<!-- PRODUCTEN MAN -->
        <div id="p-man">
            MAN
        </div>

        <div id="container-verkoop">

            <div class="Product">
                <div class="foto-container">
<!--Product box--><a href="product-pagina">
                        <img class="Kleed-foto" src="Fotos/Kleding/man/tshirt(skyline1).jpg" alt="">
                        <img class="hover-pic" src="Fotos/Kleding/man/tshirt(skyline2).jpg" alt="">
                    </a>
                </div>
                <div>
                    <p class="brand-name">464 SKYLINE SUPER SIZED TEES</p>
                    <p class="prijs">€40,00</p>

                    <div class="kleur-box">
                        <a href="">
                            <img class="kleur" src="Fotos/Kleur/rose.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/donkerbruin.png" alt="">
                        </a>
                    </div>
                </div>   
            </div>
<!----------------------------------------------------------------------------------------------------->
            <div class="Product">
                <div class="foto-container">
    <!--Product box--><a href="product-pagina">
                        <img class="Kleed-foto" src="Fotos/Kleding/man/Zwart-skull hoodie.jpg" alt="">
                        <img class="hover-pic" src="Fotos/Kleding/man/Zwart-skullhoodie(2).jpg" alt="">
                    </a>
                </div>
                <div>
                    <p class="brand-name">290 Skelet hoodie</p>
                    <p class="prijs">€48,00</p>
    
                    <div class="kleur-box">
                        <a href="">
                            <img class="kleur" src="Fotos/Kleur/Zwart-galaxy.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Grey-galaxy.png" alt="">
                        </a>
                    </div>
                </div>   
            </div>
<!----------------------------------------------------------------------------------------------------->
            <div class="Product">
                <div class="foto-container">
    <!--Product box--><a href="product-pagina">
                        <img class="Kleed-foto" src="Fotos/Kleding/man/Club-Short.jpg" alt="">
                        <img class="hover-pic" src="Fotos/Kleding/man/Club-Short(2).jpg" alt="">
                    </a>
                </div>
                <div>
                    <p class="brand-name">153 Club short</p>
                    <p class="prijs">€35,00</p>
    
                    <div class="kleur-box">
                        <a href="">
                            <img class="kleur" src="Fotos/Kleur/Zwart.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Bruin.png" alt="">
                        </a>
                    </div>
                </div>   
            </div>
<!----------------------------------------------------------------------------------------------------->
            <div class="Product">
                <div class="foto-container">
            <!--Product box--><a href="product-pagina">
                        <img class="Kleed-foto" src="Fotos/Kleding/man/Milano-shirt (1).jpg" alt="">
                        <img class="hover-pic" src="Fotos/Kleding/man/Milano-shirt(2).jpg" alt="">
                    </a>
                </div>
                <div>
                    <p class="brand-name">408 MILANO SHIRT</p>
                    <p class="prijs">€40,00</p>

                    <div class="kleur-box">
                        <a href="">
                            <img class="kleur" src="Fotos/Kleur/Pure-witt.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/donkergroen.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Zwart.png" alt="">
                        </a>
                    </div>
                </div>   
            </div>
        </div>

<!-------------LANGE FOTO   -->
        <div id="container-langfoto">
            <img id="main-langfoto1" src="Fotos/Kleding/main-longpicture(2).jpg" alt="">
        </div>
<!----------------------------------------------------------------------------------------------------->
        <div id="p-vrouw">
            vrouw
        </div>

        <div id="container-verkoop">

            <div class="Product">
                <div class="foto-container">
<!--Product box--><a href="product-pagina">
                        <img class="Kleed-foto" src="Fotos/Kleding/vrouw/Cool-jogger(1).jpg" alt="">
                        <img class="hover-pic" src="Fotos/Kleding/vrouw/Cool-jogger(2).png" alt="">
                    </a>
                </div>
                <div>
                    <p class="brand-name">350 Cool jogger</p>
                    <p class="prijs">€50,00</p>

                    <div class="kleur-box">
                        <a href="">
                            <img class="kleur" src="Fotos/Kleur/marble.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/eclipse.png" alt="">
                        </a>
                    </div>
                </div>   
            </div>
<!----------------------------------------------------------------------------------------------------->
            <div class="Product">
                <div class="foto-container">
    <!--Product box--><a href="product-pagina">
                        <img class="Kleed-foto" src="Fotos/Kleding/vrouw/kort-tshirt.jpg" alt="">
                        <img class="hover-pic" src="Fotos/Kleding/vrouw/Kort-tshirt(2).jpg" alt="">
                    </a>
                </div>
                <div>
                    <p class="brand-name">426 Kort t-shirt</p>
                    <p class="prijs"><span class="originale-prijs-korting">€28,00 </span> <span class="korting">€24,00 </span></p>
    
                    <div class="kleur-box">
                        <a href="">
                            <img class="kleur" src="Fotos/Kleur/Pure-witt.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Zwart.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/licht-blauw.png" alt="">
                        </a>
                    </div>
                </div>   
            </div>
<!----------------------------------------------------------------------------------------------------->
            <div class="Product">
                <div class="foto-container">
    <!--Product box--><a href="product-pagina">
                        <img class="Kleed-foto" src="Fotos/Kleding/vrouw/seamless-leggings(1).jpg" alt="">
                        <img class="hover-pic" src="Fotos/Kleding/vrouw/seamless-leggings(2).jpg" alt="">
                    </a>
                </div>
                <div>
                    <p class="brand-name">243 SEAMLESS LEGGING</p>
                    <p class="prijs">€48,00</p>
    
                    <div class="kleur-box">
                        <a href="">
                            <img class="kleur" src="Fotos/Kleur/cyan.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Pure-witt.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/donker-rose.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Zwart.png" alt="">
                        </a>
                    </div>
                </div>   
            </div>
<!----------------------------------------------------------------------------------------------------->
            <div class="Product">
                <div class="foto-container">
            <!--Product box--><a href="product-pagina">
                        <img class="Kleed-foto" src="Fotos/Kleding/vrouw/seamless-bra (1).jpg" alt="">
                        <img class="hover-pic" src="Fotos/Kleding/vrouw/seamless-bra (2).jpg" alt="">
                    </a>
                </div>
                <div>
                    <p class="brand-name">343 Seamless bra</p>
                    <p class="prijs">€35,00</p>

                    <div class="kleur-box">
                        <a href="">
                            <img class="kleur" src="Fotos/Kleur/cyan.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Zwart.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Pure-witt.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/donker-rose.png" alt="">
                            <img class="kleur" src="Fotos/Kleur/Bruin.png" alt="">
                        </a>
                    </div>
                </div>   
            </div>
        
        </div>
    <?php };
    $conn->close();?>

<!----------------------------------------------------------------------------------------------------->
        <div class="Product">
            <a href="Product.php">
                <?php 
                include 'connection.php';
                $sql = "SELECT * FROM `tblproducten`";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                ?>

                <div class="schoenen">     
                         
                    <a href="product.php?id=<?php echo $row['ProductID']?>"><img id="imgSchoenen" alt="schoenen" src="Fotos/Kleding/man/<?php echo $row['afbeelding']; ?>"></a> 
                    <h4><?php echo $row['Productnaam']; ?></h4> 
                    
                    <p><b>Kleur: </b><?php echo $row['Kleur']; ?></p>
                    <a href="Product.php?product=<?php echo $row['kleur']?>"><img id="imgSchoenen" alt="schoenen" src="Fotos/Kleding/kleur/<?php echo $row['kleur']; ?>"></a> 
                    <p><b>Beschikbaar in volgende maten: </b><?php echo $row['Maat']; ?></p><br>
                    <p class="prijs"><b>Prijs: </b>€ <?php echo $row['Prijs']; ?></p>

                </div>
                <?php };
                $conn->close();?>
            </a>
        </div>
    </div>
        </div>
    </div>


        <footer>
            <div id="footer-container">
                <div id="positie-logo-footer">
                    <img id="footer-logo" src="Fotos/PRIMEFIT(wit).png" alt="">
                </div>

                <div id="positie-paginas">
                    <ul id="footer-ul">
                        <a href="Home.html"><li>Home</li></a>
                        <a href="Man.html"><li>Man</li></a>
                        <a href="Vrouw.html"><li>Vrouw</li></a>
                        <a href="accesoires.html"><li>Accessoires</li></a>
                    </ul>
                </div>

                <div id="sociaal">
                    <p id="volg">Volg ons</p>
                    <a href="https://www.instagram.com/officiallyersin/"><img id="social-instagram" src="Fotos/instagram.svg"></i></a> <!--INSTA ERSIN-->
                </div>

                <p id="copywrite">PRIMEFIT - ERSIN B. © 2023</p>
                <i class="bi bi-instagram"></i>
                
            </div>
        </footer>
    </div>
</div>
</body>
</html>