<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list Hotels</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

<?php

    require("db.php");

    $get=$db->prepare("SELECT * FROM hotel");
    $get->setFetchMode(PDO::FETCH_OBJ);
    $get->execute();

    $tab=$get->fetchAll();

    echo "<table class='table' >";
    echo "<thead >";
    echo"<tr><th scope='row'>idh</th><th scope='row'>titre</th><th scope='row'>adresse</th><th scope='row'>prix</th><th scope='row'>idT</th><th scope='row'>nb</th><th scope='row'>Edit</th><th scope='row'>Delete</th></tr >";
    echo "</thead>";

    foreach($tab as $colum){
        echo "<tbody >";
        echo "<tr>";
            echo "<td colspan='1'>".$colum->idh."</td>";
            echo "<td colspan='1'>".$colum->titre."</td>";
            echo "<td colspan='1'>".$colum->adresse."</td>";
            echo "<td colspan='1'>".$colum->prix."</td>";
            echo "<td colspan='1'>".$colum->idt."</td>";
            echo "<td colspan='1'>".$colum->nb."</td>";
            

            echo "<td colspan='1'><a  href=suppH.php?ID=".$colum->idh.">Suprimer</a></td>";
            echo "<td colspan='1'><a href=modiH.php?ID=".$colum->idh.">Modifier</a></td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";


?>