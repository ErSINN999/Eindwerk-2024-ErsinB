
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Fotos/PRIMEFIT.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
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
        <div id="container-kopen-product">
            <div id="position">
                <div id="margin">
                    <div id="Links-kolom">
                        <img  id="grote-foto" src="" alt="">
                    </div>

                    <div id="Rechts-kolom">
                        <p id="titel">titel</p>
                        <p id="prijs">prijs</p>
                        <hr>

                        <p id="kleur"></p>

                        <button>Koop nu</button>
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