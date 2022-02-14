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
    if(isset($_POST["isim"])){
        echo $_POST["isim"];
    }
    else{
        echo "Henüz isim girilmedi";
    }

   
  ?>

  <form action="" method="POST">
    <input type="text" name="isim">
    <input type="submit" value="Gönder">
  </form>
  
</body>
</html>