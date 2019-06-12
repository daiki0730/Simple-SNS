<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SNS</title>
</head>
<body>
<?php
$my_name = htmlspecialchars($_POST["name"],ENT_QUOTES);
$my_text = htmlspecialchars($_POST["tx"],ENT_QUOTES);
$db = new PDO("mysql:host=localhost;dbname=db","root","root");
$db->query("INSERT INTO tb (num,name,tx,time)
            VALUES (NULL,'$my_name','$my_text',NOW())");
echo "Post complete";
echo "<p><a href='index.php'>一覧表示へ</a></p>";
?> 
</body>