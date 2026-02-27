<?php
if isset(($_popst["ok"])){
    $note$_post["$note"];
    echo"note valide"
        } else{
   if( is_numeric($note) && $note<=20 && $note>=0){
    if($note>=10 ){
        echo"vous etre admis";

    }
    else{
        echo"vous etre pas admis";
    }
   }else{
    echo"Note invalide !!";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" >
        <label>sasaire le note <label>
<input type=texte  name="note" >
<button type=sumbit name="ok">ok<button>
</from>

</body>
</html>