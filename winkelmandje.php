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
        if ($user!="Login") {
           
            if (isset($_GET["productID"])) 
            {
                $product = $_GET['productID'];
                $aantal+=1;
                print $klantID;
                
                $sql = "INSERT INTO tblwinkelmandje (`ID`, `klantID`, `productID`, `aantal`) VALUES (NULL, '$klantID', '$product', '$aantal')";
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
        if ($user!="Login")
         {
            print $klantID;
 
            $sql = "SELECT * FROM tblwinkelmandje WHERE klantID='$klantID'";
            $totaal = 0;
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) 
            {
                $product = $row['productID'];
                echo "Product: " . $row['productID'];
                $sql2 = "SELECT * FROM tblproducten WHERE id='$product'";
                $result2 = $conn->query($sql2);
                while ($row2 = $result2->fetch_assoc()) { ?>
                <?php echo $row2['productnaam']; ?>
                <img id="imgSchoenen" alt="schoenen" src="fotos/kleding/man<?php echo $row2['afbeelding'];?>">
                
                <b>Kleur: </b><?php echo $row2['kleur']; ?>
                <b>Prijs: </b>€ <?php echo $row2['prijs']; ?>
                <?php $totaal = $row2['prijs']; ?>
                <b>Aantal: </b><?php echo $row['aantal']; ?>
                <a href="deleteWinkelmandje.php?productID=<?php echo $row['productID']; ?>">Verwijder</a>
                <?php }
            }
            $conn->close(); ?>
            <p>Totaal: € <?php echo $totaal; ?></p>

            
            <h4>Totale prijs: <?php echo $totaal; ?> euro</h4>
            <?php if ($totaal > 0) { ?>
                <button onclick="location.href='orderverwerken.php'">Koop</button>
            <?php } }
            else{
                print"<span id='boodschaap'> Je moet eerst inloggen om een winkelmandje te gerbuiken.</span>";
            }
            ?>
        
        </div>
    </div>
    
</body>
</html>
