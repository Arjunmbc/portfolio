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
$s="localhost";
$u="root";
$p="Ar@12345";
$db="portfolio";
$con=mysqli_connect($s,$u,$p,$db);
$rfn=$_POST['Name'];
$remail=$_POST['Email'];
$rsub=$_POST['Subject'];
$rmes=$_POST['Message'];
$sql="insert into message(fn,email,sub,mes)values('$rfn','$remail','$rsub','$rmes');";
$a=mysqli_query($con,$sql);
if(!$a){
echo " Data not added";
}
else {
echo "Message Sent";
header('Location: index.html');
}
?>
</body>
</html>