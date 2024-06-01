<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelmandje</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="producten">
        <div id="container-winkelmandje">
            
        
        <?php
        if ($user!="Gast") {
           
            if (isset($_GET["ProductID"])) 
            {
                $product = $_GET['ProductID'];
                $aantal+=1;
                print $klantID;
                
                $sql = "INSERT INTO tblwinkelmandje (`ID`, `klantID`, `ProductID`, `aantal`) VALUES (NULL, '$klantID', '$product', '$aantal')";
                if ($conn->query($sql) === TRUE) {
                    $melding = "Product is toegevoegd";
                    header("location: winkelmandje.php?melding=$melding");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        ?>

        <h3 id="boodschaap">WINKELMANDJE  <?php echo $user; ?></h3>
        
       <div id="display-flex-winkel">
        <?php
        if ($user!="Gast")
         {
            
 
            $sql = "SELECT * FROM tblwinkelmandje WHERE klantID='$klantID'";
            $totaal = 0;
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                $product = $row['ProductID'];
                
                
                
                $sql2 = "SELECT * FROM tblproducten WHERE ProductID='$product'";
                $result2 = $conn->query($sql2);
                while ($row2 = $result2->fetch_assoc()) { ?>

                <div class="product-winkelmandje">
                    <p id="position-id"><?php echo "Product: " . $row['ProductID']; ?></p>
                    <div class="foto-container">
                        <img id="kleed-winkel" alt="kleed" src="fotos/kleding/man/<?php echo $row2['afbeelding'];?>">
                        <!-- <img id="kleed-winkel" alt="kleed" src="fotos/kleding/vrouw/<?php //echo $row2['afbeelding'];?>"> -->
                    </div>
                    <p id="position-brandname" class="brand-name"><?php print $row2['Productnaam'];?></p>
                    <p id="position-maat" class="maat"><?php print $row2['Maat'];?></p>
                    <p id="position-kleur"></p><img  id="kleur"  alt="Kleur" src="Fotos/kleur/<?php echo $row2['Kleur']; ?>">
                    
                    <p id="position-prijs" class="prijs">€<?php print $row2['Prijs'];?>,00</p>
                

                
                
                <?php $totaal += $row2['Prijs']; ?>
                <p id="position-aantal"><b>Aantal: </b><?php echo $row['aantal']; ?></p>
                <p id="position-verwijderen"><a href="delete.php?ProductID=<?php echo $row['ProductID']; ?>"><img id="verwijderen" src="fotos/verwijderen.png" alt=""></a></p>
                
                </div>
                <hr>
                <?php }
            }
            $conn->close(); ?>

            </div>
            <div id="totaal-kopen">
            <h4 id="totaal">TOTAAL: €<?php echo $totaal; ?></h4>
            
            <?php if ($totaal > 0) { ?>
                <a><button id="Koopnu">Koop nu</button></a>
                </div>
            <?php } 
            }
            else{
                print"<span id='boodschaap'> Je moet eerst inloggen om een winkelmandje te gerbuiken.</span>";
            }
            ?>
        
        </div>
    </div>
    
</body>
</html>
