<?php

require "../config.php";

if (isset($_GET["id"])){
    $id=$_GET["id"];
    $query = $db->prepare("UPDATE internship_registration SET danisman_onay=:donay WHERE id=:kid");
    $query->execute([
        "donay"=>1,
        "kid"=>$id
    ]);

    header("Location:../danisman/staj-islem.php");


}

if (isset($_GET["mudur_onay_id"])){
    $id=$_GET["mudur_onay_id"];
    $query = $db->prepare("UPDATE internship_registration SET mudur_onay=:donay WHERE id=:kid");
    $query->execute([
        "donay"=>1,
        "kid"=>$id
    ]);

    header("Location:../Management/staj-islem.php");


}