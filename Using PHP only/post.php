<?php
  echo $_POST['text'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <input type="text" name="text">
        <input type="submit" name="submit">
    </form>
</body>
</html>