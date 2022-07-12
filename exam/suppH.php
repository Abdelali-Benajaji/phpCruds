<?php

    require("db.php");

    $idh=$_GET["ID"];
    $del=$db->prepare("DELETE from hotel WHERE idh=?");
    $del->execute([$idh]);
    header("location:listH.php");

?>