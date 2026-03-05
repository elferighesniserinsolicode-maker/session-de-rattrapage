<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">

    <input type="text" name=" nom">
    <input type="text" name=" prénom">
    <input type="number" name="l'age"
    <button type="submit" name="envoyer">envoyer<button>


<?php
if (isset($_POST['ok'])){
    $nom=$_POST["nom"];
    $prénom=$_POST["prénom"]
    $lage=$_POST["lage"]
    if(empty($nom))||(empty($prenom))||(empty($age)){
        else if ($age<=18){
            echo"âge doit être supérieur à 18";
        }
       else {
     $email = $nom".".$prenom".".$lage."@ofpp.ma";
     echo "générer un email";
       }
    }

}











</body>
</html>