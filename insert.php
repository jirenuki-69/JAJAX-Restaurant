<?php

include "./utils/connection.php";

$obj =  new connection();

$conn = $obj->connection_db();

$name  =  $_POST["name"];
$description  =  $_POST["description"];
$image =  $_POST["image"];




$sql  = "insert into restaurantes (name, description, image ) values ('".$name."', '".$description."','".$image."' )";
if ($conn->query($sql) === TRUE) {
    header('Location: pages/catalogo.php');
  } else {
    header('Location: index.php?save=false');
  }

// if (!$conn) {
//     die('No pudo conectarse: ' . mysqli_connect_errno());
// }


// try {
//     //code...
//     $insert   = mysqli_query($conn, $sql);
// } catch (\Throwable $th) {
//     throw $th;
// }

?>