<?php
    include 'connection.php';

    $product = $_POST['naam'];
    $kleur = $_POST['kleur'];
    
    $prijs = $_POST['prijs'];
    $afbeelding = $_POST['afbeelding'];
    $afbeelding2 = $_POST['afbeelding2'];

    $sql = "INSERT INTO tblproducten (`ProductID`, `Productnaam`, `Prijs`, `Kleur`, `afbeelding` , `afbeelding2`) VALUES (NULL, '$product', '$prijs', '$kleur', '$afbeelding', '$afbeelding2')";
  //  $sql = "INSERT INTO tblproducten (`ProductID`, `Productnaam`, `Prijs`, `Kleur`,  `afbeelding` , `afbeelding2`) VALUES (NULL, 'TEst', '10', 'zwart', 'test.jpg', 'test.jpg')";


    if ($conn->query($sql) === TRUE) {
       header("location: addPage.php?melding=Record toegevoegd");
     } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
    $conn->close();

    
?>