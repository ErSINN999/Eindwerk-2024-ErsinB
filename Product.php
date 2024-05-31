
<!-- //post welk id -->
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
<div id="productenn">
    <?php 
    include 'header.php';
    if (isset($_GET['ID'])){
        $ProductID = $_GET['ID'];
      //  print $ProductID;
        include 'connection.php';
        $sql = "SELECT * FROM 'tblproducten' WHERE ProductID = '$ProductID'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
        ?>       
            <h4><?php echo $row['Productnaam']; ?></h4>  
            <h4><?php echo $row['ProductID']; ?></h4>      
            <img id="imgSchoenen" alt="schoenen" src="Fotos/Kleding/man/<?php echo $row['afbeelding']; ?>">

                
            <p><b>Kleur: </b><?php echo $row['Kleur']; ?></p>
            <p><b>Beschikbaar in volgende maten: </b><?php echo $row['Maat']; ?></p><br>
            <p class="prijs"><b>Prijs: </b>€ <?php echo $row['Prijs']; ?></p>
            

        <?php 
        };
        $conn->close();}

    ?>

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