
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
                        <img id="img1-kleed" alt="kleed" src="Fotos/Kleding/accessoires/<?php echo $row['afbeelding']; ?>">
                        <img id="img2"  alt="kleed" src="Fotos/Kleding/accessoires/<?php echo $row['afbeelding2']; ?>">
                    </div>  
                </div>
                    
                <div id="Rechts-kolom">
                    <h4 id="productid"><?php echo $row['ProductID']; ?></h4> 
                    <h4 id="productnaam"><?php echo $row['Productnaam']; ?></h4> 
                    <p id="prijs">€ <?php echo $row['Prijs']; ?>,00</p>
                    <hr>
                    <p class="p-titeltje">Kleuren:</p><img  id="kleur"  alt="Kleuren" src="Fotos/kleur/<?php echo $row['Kleur']; ?>">
                    <a href="#img2 ">
                        
                        <img id="kleur"  alt="Kleuren" src="Fotos/kleur/<?php echo $row['Kleur2']; ?>">
                    </a>

                 
                      
                    

                    <a href="winkelmandje.php?ProductID=<?php print $ProductID;?>"><button id="Koopnu">Koop nu</button></a>
                </div>
            </div>
        </div>
        <?php 
        };
        $conn->close();}?>
    </div> 

      <?php include 'footer.php';?>


    
    </div>
</div>
</body>
</html>