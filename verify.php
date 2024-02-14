<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center;">Webboard Nine</h1>
    <hr><br>
    <div style="text-align: center;">
    เข้าสู่ระบบด้วย <br>
  <?php
    $Login=$_POST["login"];
    $Pass=$_POST["pwd"];
     if(($Login=="admin")&&$Pass=="ad1234"){
        echo "ยินดีต้อนรับ ADMIN";
     }
     ?>
    </div>
</body>
</html>