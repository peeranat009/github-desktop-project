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
<?php echo "ต้องการกระทู้หมายเลข ". $_GET['id']."<br>";
$id=$_GET['id'];
if($id%2==0)
echo"เป็นกระทู้หมายเลขคู่";
else
echo"เป็นกระทู้หมายเลขคี่";
?>
<br><br>
<table width="40%" align="center"   style="border: 2px solid black;">
    <tr><th><div style="background-color: #6cd2fe;">แสดงความคิดเห็น</div></th></tr>
    <tr><td colspan="2" ><textarea name="" id="" cols="70" rows="10" ></textarea></td></tr>
    <tr><td><input type="submit" value="ส่งข้อความ"></td></tr>             
</table>
ิิ<br>
<a href="index.php">กลับไปหน้าหลัก</a>
</div>
</body>
</html>