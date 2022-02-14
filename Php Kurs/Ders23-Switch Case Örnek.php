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
    
    switch($sayı){
        case 1:
            echo "Bugün Pazartesi";
            break;
        case 2:
            echo "Bugün Salı";
            break;
        case 3:
            echo "Bugün Çarşamba";
            break;
        case 4:
            echo "Bugün Perşembe";
            break;
        case 5:
            echo "Bugün Cuma";
            break;
        case 6:
            echo "Bugün Cumartesi";
            break;
        case 7:
            echo "Bugün Pazar";
            break;
        default:
             echo "Yanlış sayı girdiniz";
             break;
    }
    
}
else{
    
}

?>

<form action="" method="POST">
    <input type="text" name="sayı">
    <input type="submit" value="Gönder">
  </form>

</body>
</html>