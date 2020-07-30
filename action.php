<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My second web app</title>
</head>
<body>
<h1>名前と月です</h1>

こんにちは、<?php echo $_POST['name']."さん"?>
<br>
あなたの生まれた月は、<?php echo $_POST['month']."です"?>

<!-- <form action="action.php" method="post">
  名前: <input type="text" name="name">
  <br>
  生まれた月: <input type="text" name="month">
  <input type="submit">
</form> -->

</body>
</html>