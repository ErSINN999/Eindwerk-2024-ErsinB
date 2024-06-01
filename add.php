<?php
    include 'connection.php';

    $Productnaam = $_POST['Productnaam'];
    $kleur = $_POST['kleur'];
    $kleur = $_POST['kleur2'];
    $prijs = $_POST['prijs'];
    $afbeelding = $_POST['afbeelding'];
    $afbeelding = $_POST['afbeelding2'];


    $sql = "INSERT INTO primefit . tblproducten (`ProductID`, `Productnaam`, `prijs`, `kleur`, `afbeelding` , `afbeelding2`) VALUES (NULL, '$Productnaam', '$prijs', '$kleur', '$afbeelding' '$afbeelding2')";
   

    if ($conn->query($sql) === TRUE) {
        header("location: addPage.php?melding=Record toegevoegd");
     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
    $conn->close();

    
?>