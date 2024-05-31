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
        <div id="container-kopen-product">
            
        
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

        <h3 id="boodschaap">WINKELMANDJE </h3><?php echo $user; ?>
        
       
        <?php
        if ($user!="Gast")
         {
            
 
            $sql = "SELECT * FROM tblwinkelmandje WHERE klantID='$klantID'";
            $totaal = 0;
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                $product = $row['ProductID'];
                echo "Product: " . $row['ProductID'];
                
                $sql2 = "SELECT * FROM tblproducten WHERE ProductID='$product'";
                $result2 = $conn->query($sql2);
                while ($row2 = $result2->fetch_assoc()) { ?>

                <div class="Product">
                    <div class="foto-container">
                        <img id="kleed-winkel" alt="kleed" src="fotos/kleding/man/<?php echo $row2['afbeelding'];?>">
                    </div>
                    <p id="p-titeltje">Kleuren:</p><img  id="kleur"  alt="Kleuren" src="Fotos/kleur/<?php echo $row['Kleur']; ?>">
                    <p class="brand-name"><?php print $row2['Productnaam'];?></p>
                    <p class="prijs">€<?php print $row2['Prijs'];?>,00</p>
                </div>

                
                <p id="p-titeltje">Kleuren:</p><img  id="kleur"  alt="Kleuren" src="Fotos/kleur/<?php echo $row['Kleur']; ?>">
                <b>Prijs: </b>€ <?php echo $row2['Prijs']; ?>
                <?php $totaal = $row2['Prijs']; ?>
                <b>Aantal: </b><?php echo $row['aantal']; ?>
                <a href="deleteWinkelmandje.php?productID=<?php echo $row['ProductID']; ?>">Verwijder</a>
                <br>
                <?php }
            }
            $conn->close(); ?>
            <p>Totaal: € <?php echo $totaal; ?></p>

            
            <h4>Totale prijs: <?php echo $totaal; ?> euro</h4>
            <?php if ($totaal > 0) { ?>
                <button onclick="location.href=''">Koop</button>
            <?php } }
            else{
                print"<span id='boodschaap'> Je moet eerst inloggen om een winkelmandje te gerbuiken.</span>";
            }
            ?>
        
        </div>
    </div>
    
</body>
</html>
