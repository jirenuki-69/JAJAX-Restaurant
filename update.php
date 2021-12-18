<?php 
    include "./utils/connection.php";

    $obj =  new connection();

    $conn = $obj->connection_db();


    $name =  $_POST["user_name"];
    $description = $_POST["description"];
    $image = $_POST["image"];
    $id_user = $_POST["id_user"];

    $sql  = "UPDATE restaurantes SET name='".$name."',description='".$description."' ,
    image ='".$image."' WHERE  id = '".$id_user."' ";

    $update =  false;
    try {
       $conn->query($sql);
       $update =  true;
    } catch (\Throwable $th) {
        $update = false;
    }

    
    if ($update) {
        header("location: pages/catalogo.php");
    }else{
        header("location: form_update.php?id_user=".$id_user."&update=false");
    }



 ?>