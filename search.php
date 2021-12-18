<?php
    include "./utils/connection.php";

    $obj =  new connection();
    
    $conn = $obj->connection_db();

    $text = $_POST["text"];

    $sql =  "SELECT * FROM restaurantes WHERE name LIKE '%" . $text . "%'" ;

    $response=[];
    try {
        $result = $conn->query($sql);
        $datos = [];
        $cont = 0;
        while ($row = $result->fetch_assoc()) {
          $datos[$cont] = $row;
          $cont = $cont + 1;
        }

        $response["data"] =  $datos;
    } catch (\Throwable $th) {
        $response["data"] =  [];
    }

    echo json_encode($response);
    



?>