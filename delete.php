<?php
include 'header.php';
include_once "sessionCheckUser.php";

// Zorg ervoor dat klantID wordt opgehaald uit de sessie
if (isset($_SESSION['klantID'])) {
    $klantID = $_SESSION['klantID'];
}

if (isset($_GET['ProductID'])) {
    include 'connection.php';
    $product = $_GET['ProductID'];
    print "ProductID=" . $product;
    
    // verwijderen product door Productid en klantid te selecteren
    $sql = "DELETE FROM tblwinkelmandje WHERE ProductID = '$product' AND klantID = '$klantID'";

    if ($conn->query($sql) === TRUE) {
        header('Location: winkelmandje.php');
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
}
?>
