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

      $sifre="Emir123";
      $sifreUzunlugu = strlen($sifre);

      if($sifreUzunlugu > 8){
          echo "Şifre 8 karakterden uzun";
      }
      else if($sifreUzunlugu > 5){
          echo "Şifre 5 karakterden uzun";
      }
      else{
          echo "Kayıt başarısız";
      }

  

    ?>
</body>
</html>