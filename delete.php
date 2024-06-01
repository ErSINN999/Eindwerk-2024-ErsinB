<?php
    $klantID= "";
    session_start();
    include_once "sessionCheckUser.php"

    
    if(isset($_GET['ProductID'])){
        include 'connection.php';
        $product = $_GET['ProductID'];
        print "product=". $product;
        $sql = "DELETE FROM tblwinkelmandje WHERE ProductID = '$product' AND ID='$klantID'";

        if ($conn->query($sql) === TRUE)
        {
            
            header ('Location: winkelmandje.php');

        }
        else 
        {
            echo "Error deleting record: " . $conn->error;
        }

        $conn->close();

    }

?>