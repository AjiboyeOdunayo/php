<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <!-- query string -->
    <a href="container.php?name=Agnes likes afang">click here</a>
 <form action="form.php" method="post">
  name:<input type="text" name="firstname" placeholder="enter firstname">
  name:<input type="text" name="lastname" placeholder="enter lastname">
  <input type="submit" name="submit" value="submit">

</form>
  </body>
</html>


<?php
echo strip_tags($_POST["firstname"]);
  // $name = $_GET["name"];
  // $food = $_GET["food"];
  // echo $name ."likes".$food;
  ?>
