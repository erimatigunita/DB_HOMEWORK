<?php
// 前のページ(index.php)からデータが送られてきて
// input type=text の[name="aa"]を受け取る記述
$text = $_POST['aa'];
echo $text;

$text2 = $_POST['koredesu'];
echo $text2;

?>

<!-- DBをつくるときは、idだけは必須項目(php_myadmin) -->
<!-- idは被らない。一度消したら同じidでは絶対に登録されない -->