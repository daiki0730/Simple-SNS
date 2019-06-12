<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SNS</title>
</head>
<body>
<?php
$my_search = htmlspecialchars($_POST["search"],ENT_QUOTES);
$db = new PDO("mysql:host=localhost;dbname=db","root","root");

print "<p style='font-size:20pt'>「{$my_search}」の検索結果</p>";
$ps = $db->query("SELECT * FROM tb WHERE tx like '%$my_search%'");
while ($r = $ps->fetch()) {
  echo "{$r['num']} {$r['name']} {$r['time']}<br>"
  .nl2br($r['tx'])."<hr>";
}
echo "<p><a href='index.php'>一覧表示へ</a></p>";
?> 
</body>