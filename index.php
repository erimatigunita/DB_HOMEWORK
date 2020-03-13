<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>DB_HOMEWORK</title>
  <link href="homework.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<h1><img src="logologologo.jpeg" alt=""></h1>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここからinsert.phpにデータを送ります -->
<div class="flex">
<img src="share.jpeg" alt="" width="150" height="150">
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <!-- <legend></legend> -->
     <label>NAME<input type="text" name="name"></label><br>
     <label>SHOP<input type="text" name="SHOP"></label><br>
     <input type="file" name="image"><br>
     <label><textArea name="naiyou" rows="4" cols="40" class="comments" placeholder="COMMENTS"></textArea></label><br>
     <input type="submit" class="button" value="SHARE!">
    </fieldset>
  </div>
</form>

</div>

<div class="navbar-header"><a class="navbar-brand" href="select.php"><img src="showall2.jpeg" alt=""></a></div>
<!-- Main[End] -->


</body>
</html>
