<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../templates/header.php';
  include "../utils/connection.php";
  ?>
  <link rel="stylesheet" href="../css/catalogo.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Catálogo</title>
</head>
<body>
    <?php
    $id_user = $_GET["id_user"];
    $obj = new connection();
    $conn =  $obj->connection_db();

    $sql = "select * from restaurantes where id=".$id_user;
    $result = $conn->query($sql);  
    $data  =  $result->fetch_assoc();
   
    if (isset($_GET["update"])) {
        echo "<h4 class='text-danger text-center'>No se ha podido modificar el usuario</h4>";
    }
    ?>
    <div class="container mx-auto">
        <h1 class="text-center">Actualizar Restaurante</h1>
    <form action="../update.php" method="POST">

    <div class="form-group">
        <label for="user_name">Nombre</label>
        <input type="text" class="form-control" name="user_name" required value="<?php echo $data['name'] ?>">
    </div>

    <div class="form-group">
        <label for="last_name">Descripción</label>
        <input type="text" class="form-control" name="description" required value="<?php echo $data['description'] ?>">
    </div>


    <div class="form-group">
        <label for="email">Imagen</label>
        <input type="text" class="form-control" name="image" required value="<?php echo $data['image'] ?>">
    </div>

    <input type="hidden" name="id_user" value="<?php echo $id_user ?>">

    <div style="margin-top: 10px">
        <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
</form>
    </div>
<br><br><br>.


</body>

<?php
include '../templates/footer.php';
?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>