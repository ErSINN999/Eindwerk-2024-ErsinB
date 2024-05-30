
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
    <?php 
    include 'header.php';?>
  
  <div id="main-page">
   
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
         <div id="p-trend">
                Trend Producten
            </div>

        <div id="container-producten">

    <!----------------------------------------------------------------------------------------------------->
<!-- TREND PRODUCTEN- -->
           
            
    
            <div id="container-verkoop">
            
<!----------------------------------------------------------------------------------------------------->
                <div class="Product">
                    <?php 
                    include 'connection.php';
                    $sql = "SELECT * FROM tblproducten";
                    $result = $conn->query($sql);
                    
                    while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="Product">
                        <div class="foto-container">
                            
    <!--Product box-->        <a href="product.php?id=<?php echo $row['ProductID']?>">
                                <img class="Kleed-foto" alt="echo $row['afbeelding'];" src="Fotos/Kleding/man/<?php echo $row['afbeelding']; ?>">
                                <?php if ($row['afbeelding2']<>"")
                                {?>
                                <img class="hover-pic" alt="echo $row['afbeelding2'];" src="Fotos/Kleding/man/<?php echo $row['afbeelding2']; ?>">
                                <?php 
                                }?>

                                <!-- <img class="hover-pic" src="Fotos/Kleding/man/cashmere(2).jpg" alt="SKYLINE"> -->
                                <p class="brand-name"><?php print $row['Productnaam'];?></p>
                            <p class="prijs"><?php print $row['Prijs'];?> euro</p>
                            <p>Op voorraad? <?php print $row['Voorraad'];?></p>


                            <div class="kleur-box">
                                <a href="">
                                    <img class="kleur" src="Fotos/Kleur/donkerblauw.png" alt="">
                                    <img class="kleur" src="Fotos/Kleur/donkergroen.png" alt="">
                                </a>
                            </div>

                            
                        </div>
                    </div>
                    
                    <?php };
                    $conn->close();?> 
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

<!----------------------------------------------------------------------------------------------------->


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