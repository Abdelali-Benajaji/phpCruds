<?php

    require("db.php");

    $idh=$_GET["ID"];
    $del=$db->prepare("DELETE from hotel WHERE idh=?");
    $del->execute([$idh]);
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container  mt-5" >
        <fieldset>
            <form action="" method="POST">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">id hotel</label>
                <input type="text" class="form-control" name="idH" >
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titre hotel</label>
                <input type="text" class="form-control" name="titre" >
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Adresse hotel</label>
                <input type="text" class="form-control" name="adresse" >
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prix hotel</label>
                <input type="text" class="form-control" name="prix" >
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Id type</label>
                <input type="text" class="form-control" name="idT" >
                </div>
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre de cambre</label>
                <input type="text" class="form-control" name="nbCh" >
                </div>
                <div class="col-12">
                <button type="submit" name="sub" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </fieldset>
    
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>