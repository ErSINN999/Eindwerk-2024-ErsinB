<?php 
include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>Producten toevoegen</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
<div class="container-add">
    <div class="add">
    <h2 class="h2">Records toevoegen</h2>
    
        <form action="add.php" method="post" enctype="multipart/form-data">
            <table >
             
                <tr>
                    <td>Naam:  </td>
                    <td><input type="text" name="naam" id="naam-add"></td>
                </tr>
                <tr>
                    <td>Kleur:  </td>
                    <td><input type="text" name="kleur" id="kleur-add"></td>
                </tr>
                <tr>
                    <td>Prijs: </td>
                    <td><input type="number" name="prijs" id="prijs-add"> €</td>
                </tr>
                
                 <td>Afbeelding: </td>
                    <td><input type="text" name="afbeelding" id="afbeelding-add"></td>
                </tr>

                <td>Afbeelding 2: </td>
                    <td><input type="text" name="afbeelding2" id="afbeelding-add"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Toevoegen"></td>
                </tr>
               
            </table>
        </form>
    </div>

    <div class="container-add-producten">
    <h2>Producten</h2>

    <!-- Man ik moet appart ze selecteren anders krijg ik fouten! -->
        <table id="producten">
            
            <?php
            include 'connection.php';
            $sql = "SELECT * FROM tblproducten WHERE ProductID IN(1,2,3,4,5,6,7,8)";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                ?>
                
                    
                    <td><?php echo $row['ProductID'];  ?></td>
                    <td><?php echo $row['Productnaam']; ?></td>
                    
                    <tr id="foto-tr">
                        
                        <td><img id="Kleed-foto-add" src="fotos/kleding/man/<?php echo $row['afbeelding'];?>" ></td>
                        <td><img id="Kleed-foto-add" src="fotos/kleding/man/<?php echo $row['afbeelding2'];?>" ></td>   
                                        
                        <td><button id="del" onclick="location.href='del.php?id=<?php echo $row['id']?>'">DELETE</button></td>
                    </tr>
                    
            <?php
                };
                $conn->close();
            ?>
            

            <!-- Vrouw -->
        </table>
        <table id="producten">
            <?php
            include 'connection.php';
            $sql = "SELECT * FROM tblproducten WHERE ProductID IN(9,10,11,12,13)";
            $result = $conn->query($sql);
            while($row = $result->fetch_assoc()) {
                ?>
               <td><?php echo $row['ProductID'];  ?></td>
                <td><?php echo $row['Productnaam']; ?></td>
                
                <tr id="container-foto-add">
                    
                    <td><img id="Kleed-foto-add" src="fotos/kleding/vrouw/<?php echo $row['afbeelding'];?>" ></td>
                    <td><img id="Kleed-foto-add" src="fotos/kleding/vrouw/<?php echo $row['afbeelding2'];?>" ></td>   
                                    
                    <td><button id="del" onclick="location.href='delete.php?id=<?php echo $row['id']?>'">DELETE</button></td>
                </tr>
                
            <?php
                };
                $conn->close();
            ?>
        </table>
        </div>

        <!------------------------------ FOOTER ------------------------------>
   <?php 
     // include 'footer.php';
    ?>
</div>

</body>
</html>