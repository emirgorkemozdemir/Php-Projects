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
$vize=0;
$final=0;
if(isset($_POST["vize"])){
    $vize=$_POST["vize"];

   
}
else{
    echo "Henüz sayı girilmedi";
}
if(isset($_POST["final"])){
    $final=$_POST["final"];
    
   
}
else{
    echo "Henüz sayı girilmedi";
}

$ortalama = ($vize*40)/100 + ($final*60)/100;
echo $ortalama;

    ?>

<form action="" method="POST">
    <input type="text" placeholder="Vize notunuzu giriniz" name="vize">
    <input type="text" placeholder="Final notunuzu giriniz" name="final">
    <input type="submit" value="Gönder">
  </form>
</body>
</html>