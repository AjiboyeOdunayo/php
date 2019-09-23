<?php

// require the connection to the database
require('connection.php');
// perform neccessary queries
$sql = "UPDATE `users` SET `NAME` = 'Chiedu Emmanuel' WHERE `NAME` = 'Jerry Opara'";
mysqli_query($connection,$sql);


 ?>
