<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Fotos/PRIMEFIT.png" type="image/x-icon">
    <title>Winkelmandje</title>
</head>
<body>
    <?php include "header.php"; ?>
    <div class="producten">
    <div id="container-winkelmandje">
        <?php
        if ($user != "Gast") {
            if (isset($_GET["ProductID"])) {
                $productID = $_GET['ProductID'];
                $aantal = 1;

                $sql = "INSERT INTO tblwinkelmandje (`ID`, `klantID`, `ProductID`, `aantal`) VALUES (NULL, '$klantID', '$productID', '$aantal')";
                if ($conn->query($sql) === TRUE) {
                    $melding = "Product is toegevoegd";
                    header("Location: winkelmandje.php?melding=$melding");
                    exit();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
        ?>

        <h3 id="boodschaap">WINKELMANDJE  <?php echo $user; ?></h3>

        <div id="display-flex-winkel">
            <?php
            if ($user != "Gast") {
                $sql = "SELECT * FROM tblwinkelmandje WHERE klantID='$klantID'";
                $totaal = 0;  // Zorg ervoor dat $totaal wordt geïnitialiseerd
                $result = $conn->query($sql);

                while ($row = $result->fetch_assoc()) {
                    $productID = $row['ProductID'];

                    // Ophalen van productdetails
                    $sqlProduct = "SELECT * FROM tblproducten WHERE ProductID = '$productID'";
                    $resultProduct = $conn->query($sqlProduct);
                    $rowProduct = $resultProduct->fetch_assoc();

                    if ($rowProduct) {
                        $isMan = in_array($productID, range(1, 8));
                        $isVrouw = in_array($productID, range(9, 12));
                        $isAccessoires = ($productID == 13);

                        ?>

                        <div class="product-winkelmandje">
                            <p id="position-id"><?php echo "Product: " . $row['ProductID']; ?></p>
                            <div class="foto-container">
                                <?php
                                if ($isMan) {
                                    echo '<img id="kleed-winkel" alt="kleed" src="fotos/kleding/man/' . $rowProduct["afbeelding"] . '">';
                                } elseif ($isVrouw) {
                                    echo '<img id="kleed-winkel" alt="kleed" src="fotos/kleding/vrouw/' . $rowProduct["afbeelding"] . '">';
                                } elseif ($isAccessoires) {
                                    echo '<img id="kleed-winkel" alt="kleed" src="fotos/kleding/accessoires/' . $rowProduct["afbeelding"] . '">';
                                } else {
                                    echo "Ongeldige ProductID.";
                                }
                                ?>
                            </div>
                            <p id="position-brandname" class="brand-name"><?php echo $rowProduct['Productnaam']; ?></p>
                            <p id="position-maat" class="maat"><?php echo $rowProduct['Maat']; ?></p>
                            <p id="position-kleur">
                                <img id="kleur" alt="Kleur" src="fotos/kleur/<?php echo $rowProduct['Kleur']; ?>">
                            </p>
                            <p id="position-prijs" class="prijs">€<?php echo $rowProduct['Prijs']; ?>,00</p>
                            
                            <?php $totaal += $rowProduct['Prijs'] * $row['aantal']; ?>
                            <p id="position-aantal"><b>Aantal: </b><?php echo $row['aantal']; ?></p>
                            <p id="position-verwijderen">
                                <a href="delete.php?ProductID=<?php echo $row['ProductID']; ?>">
                                    <img id="verwijderen" src="fotos/verwijderen.png" alt="">
                                </a>
                            </p>
                        </div>
                        <hr>
                        <?php
                    }
                
            }
            ?>
        </div>

        <div id="totaal-kopen">
            <h4 id="totaal">TOTAAL: €<?php echo $totaal; ?></h4>

            <?php if ($totaal > 0) { ?>
                <button id="Koopnu" onclick="location.href='orderverwerken.php'">Koop nu</button> 
            <?php } }
            else{
                print"<p id='boodschaap'> Je moet eerst inloggen om een winkelmandje te gerbuiken.</p>";
            }
            ?>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
    
</body>
</html>
