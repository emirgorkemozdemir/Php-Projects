<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if(isset($_POST["sayı"])){
        $sayı=$_POST["sayı"];

        if($sayı>0){
            echo "Sayı pozitif";
        }
        else if($sayı == 0){
            echo "Sayı sıfır";
        }
        else{
            echo "Sayı negatif";
        }
    }
    else{
        echo "Henüz sayı girilmedi";
    }

   
  ?>

<form action="" method="POST">
    <input type="text" name="sayı">
    <input type="submit" value="Gönder">
  </form>

  <p></p>

</body>
</html>