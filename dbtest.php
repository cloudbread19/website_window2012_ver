<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>MySql-PHP ?? ???</title>
</head>
<body>
 
<?php
echo "MySql ?? ???<br>";
 
$db = mysqli_connect("127.0.0.1:81", "root", "0912", "cloudbread");
 
if($db){
    echo "connect : ??<br>";
}
else{
    echo "disconnect : ??<br>";
}
 
$result = mysqli_query($db, 'SELECT VERSION() as VERSION');
$data = mysqli_fetch_assoc($result);
echo $data['VERSION'];
?>
 
</body>
</html>