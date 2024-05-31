
<!-- //post welk id -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
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

    
            
                
           

        

    
<div id="main-pag">
    <?php 
        include 'header.php';
        
        if (isset($_GET['id'])){
            $ProductID = $_GET['id'];
            // print $ProductID;
            include 'connection.php';
            $sql = "SELECT * FROM tblproducten WHERE ProductID = '$ProductID'";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()){
        ?>       
    <div id="container-kopen-product" >
        <div id="position">
            <div id="margin">
                <div id="Links-kolom">
                    <div id="foto-tonen">
                        <img id="img1-kleed" alt="kleed" src="Fotos/Kleding/man/<?php echo $row['afbeelding']; ?>">
                        <img id="img2"  alt="kleed" src="Fotos/Kleding/man/<?php echo $row['afbeelding2']; ?>">
                    </div>  
                </div>
                    
                <div id="Rechts-kolom">
                    <h4 id="productid"><?php echo $row['ProductID']; ?></h4> 
                    <h4 id="productnaam"><?php echo $row['Productnaam']; ?></h4> 
                    <p id="prijs">€ <?php echo $row['Prijs']; ?>.00</p>
                    <hr>
                    <p id="p-titeltje">Kleuren:</p><img  id="kleur"  alt="Kleuren" src="Fotos/kleur/<?php echo $row['Kleur']; ?>">
                    <a href="#img2 ">
                        
                        <img id="kleur"  alt="Kleuren" src="Fotos/kleur/<?php echo $row['Kleur2']; ?>">
                    </a>

                    <p id="p-titeltje">Maat:</p>
                    <ul class="maat-ul">
                        <li class="maat-li" ><input id="radio" type="radio" name="maat" id="XS"> <label for=""><?php echo $row['Maat']; ?></label> </li>
                        <li class="maat-li" ><input id="radio" type="radio" name="maat" id="S"> <?php echo $row['Maat2']; ?></li>
                        <li class="maat-li" ><input id="radio" type="radio" name="maat" id="M"> <?php echo $row['Maat3']; ?></li>
                        <li class="maat-li" ><input id="radio" type="radio" name="maat" id="L"> <?php echo $row['Maat4']; ?></li>
                        <li class="maat-li" ><input id="radio" type="radio" name="maat" id="XL"> <?php echo $row['Maat5']; ?></li>
                    </ul>
                      
                    

                    <a href="winkelmandje.php"><button id="Koopnu">Koop nu</button></a>
                </div>
            </div>
        </div>
        <?php 
        };
        $conn->close();}?>
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