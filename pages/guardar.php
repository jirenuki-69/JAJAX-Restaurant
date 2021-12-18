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
    <div class="container mx-auto">
        <h1 class="text-center">Agregar Restaurante</h1>
    <form action="../insert.php" method="POST">

    <div class="form-group">
        <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" required ">
    </div>

    <div class="form-group">
        <label for="last_name">Descripción</label>
        <input type="text" class="form-control" name="description" required ">
    </div>


    <div class="form-group">
        <label for="email">Imagen</label>
        <input type="text" class="form-control" name="image" required ">
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