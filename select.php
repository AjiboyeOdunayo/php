<?php

  // names of all users in the database
  require('connection.php');

  // performing the select query
  $query = "SELECT * FROM `users`";

  $result = mysqli_query($connection,$query);
  $i = 1;
  if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){
      echo $i.") ".$data['NAME']." ".'<strong>'.
      $data['ADDRESS']."</strong> <a href='edit.php?id=".$data['ID']."'>Edit</a>
      <a href='delete.php?id=".$data['ID']."'>Delete</a>
      <br>";
      $i++;
    }
  }
  else{
    echo "No record found";
  }

  // its going to enable us to edit a particular user detail
  // its going to enable to delete a particular user

 ?>
