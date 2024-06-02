<?php
    include 'connection.php';
    include 'sessionCheckUser.php';

    if(isset($klantID))
    {
        $sql = "SELECT * FROM tblWinkelmandje WHERE klantID = '$klantID'";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc())
        {
            $productid =$row['ProductID'];
            $aantal=$row['aantal'];
            date_default_timezone_set("Europe/Brussels");
            $datum=date("Y-m-d");
            $sqlInsert="INSERT INTO bestelling (BestellingID, Datum, klantID, ProductID, aantal) VALUES (NULL, '$datum', '$klantID', '$product', '$aantal')";
        }

        if($conn->query($sqlInsert) ===TRUE)
        {
            $sqslDel = "DELETE FROM tblWinkelmandje WHERE KlantID = '$klantID'";
            if($conn->query($sqslDel) ===TRUE)
            {
                header('Location: winkelmandje.php?melding=Bedankt voor uw aankoop');
            }
            else
            {
                echo "Error: " . $conn->error;
            }
        }
        else
        {
            echo "Error: " . $conn->error;
        }
        $conn->close();
    }
    else
    {
        print "fout";
    }
?>