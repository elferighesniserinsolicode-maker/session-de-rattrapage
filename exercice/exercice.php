<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label>Saisir une note</label>
    <input type="text" name="note">
    <button type="submit" name="OK">OK</button>
</form>

<?php
if(isset($_POST['OK'])){
    $note = $_POST['note'];
    

    if($note >= 10){
        echo "Vous êtes admin";
    } elseif($note < 10){
        echo "Vous n'êtes pas admin";
    } else {
        echo "Note invalide";
    }
}
?>

</body>
</html>

