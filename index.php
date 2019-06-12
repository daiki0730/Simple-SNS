<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>SNS</title>
</head>
<body>

<form action="complete.php" method="post">
名前
<div><input type="text" name="name"></div>
メッセージ
<div><textarea name="text"></textarea></div>
<input type="submit" value="send">
</form>

<hr>
<form action="search.php" method="post">
検索キーワード
<div><input type="text" name="search"></div>
<input type="submit" value="search">
</form>
<hr>

<?php
$db = new PDO("mysql:host=localhost;dbname=db","root","root");
$ps = $db->query("SELECT * FROM tb ORDER BY num DESC");
while ($r = $ps->fetch()) {
echo "{$r['num']} {$r['name']} {$r['time']}<br>"
      .nl2br($r['tx'])."<hr>";
}
?> 
</body>