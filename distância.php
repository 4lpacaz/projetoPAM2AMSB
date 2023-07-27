<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="distância.php" method="POST">
     Quilometro<input type="text" name="txt_litro"><br>
     Litro<input type="text" name="txt_km"><br>
     <input type="submit">

</form>
<?php
    $litro=$_POST["txt_litro"];
    $km=$_POST["txt_km"];
    $result=$litro/$km;

    echo "Você irá percorrer: ".$result;
?>

</body>
</html>