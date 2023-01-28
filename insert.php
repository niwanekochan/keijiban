<?php 
mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");
$pdo->exec("insert into 4each_keijiban(handlename,title,comments)
values('".$_POST['handlename']."','".$_POST['title']."','".$_POST['comments']."');");
header("Location:http://localhost/4each_keijiban/index.php");
?>

<!doctype html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body></body>
</html>  