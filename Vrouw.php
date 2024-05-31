
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
<body>
    
<!-----------------------Navigatie--------------------->
<div id="main">
   <?php include 'header.php';?> 

    <div id="main-page"> 
        <div id="alleen-producten">
            <div id="container-producten">
                <div id="container-verkoop">   
                        <?php 
                        include 'connection.php';
                        $sql = "SELECT * FROM tblproducten WHERE ProductID IN(9,10,11,12)";
                        $result = $conn->query($sql);
                        
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="Product">
                            <div class="foto-container">
                                
    <!--Product box-->          <a href="productvrouw.php?id=<?php echo $row['ProductID']?>">
                                    <img class="Kleed-foto" alt="echo $row['afbeelding'];" src="Fotos/Kleding/vrouw/<?php echo $row['afbeelding']; ?>">
                                    
                                    <?php if ($row['afbeelding2']<>"")
                                    {?>
                                    <img class="hover-pic" alt="echo $row['afbeelding2'];" src="Fotos/Kleding/vrouw/<?php echo $row['afbeelding2']; ?>">
                                    <?php 
                                    }?>
                                </a>
                            </div>

                                <p class="brand-name"><?php print $row['Productnaam'];?></p>
                                <p class="prijs">€<?php print $row['Prijs'];?>,00</p>
                                <p>Op voorraad? <?php print $row['Voorraad'];?></p>
                                <div class="kleur-box">
                                        <img class="kleur"  alt="Kleuren" src="Fotos/kleur/<?php echo $row['Kleur']; ?>">
                                        <img class="kleur"  alt="Kleuren" src="Fotos/kleur/<?php echo $row['Kleur2']; ?>">                                   
                                </div>               
                        </div>
                        <?php };
                        $conn->close();?> 
                </div>    
            </div> 
        </div>
    </div>
</div>
</body>
</html>