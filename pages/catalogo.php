<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../templates/header.php';
  ?>
  <link rel="stylesheet" href="../css/catalogo.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <title>Catálogo</title>
</head>

<body>
  <div class="catalog-container container">
    <div class="catalog-header">
      <div class="search-box">
        <button class="btn-search"><i class="fas fa-search"></i></button>
        <input id="catalog-search" type="text" class="input-search" placeholder="Type to Search...">
      </div>
      <button id="btn-agregar" type="button" class="custom-button">
        <span class="button-text">Agregar</span>
        <span class="button-icon">
          <ion-icon name="add-outline"></ion-icon>
        </span>
      </button>
    </div>
    <div class="cards-container">
      <div class="my-card">
        <img class="card-img" src="../assets/placeholder_1.jpg" alt="Image">
        <div class="card-info">
          <p class="card-title">Nombre del Restaurante</p>
          <p class="card-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur nam illum perspiciatis magni sunt quo, assumenda ducimus obcaecati? Vero, a soluta? Itaque fugiat minus cum exercitationem laboriosam, quae ipsum repellat?</p>
          <div class="card-buttons">
            <button id="btn-more-info" class="btn btn-primary">Detalles</button>
            <button id="btn-edit" class="btn btn-success">Editar</button>
            <button id="btn-delete" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
      <div class="my-card">
        <img class="card-img" src="../assets/placeholder_1.jpg" alt="Image">
        <div class="card-info">
          <p class="card-title">Nombre del Restaurante</p>
          <p class="card-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur nam illum perspiciatis magni sunt quo, assumenda ducimus obcaecati? Vero, a soluta? Itaque fugiat minus cum exercitationem laboriosam, quae ipsum repellat?</p>
          <div class="card-buttons">
            <button id="btn-more-info" class="btn btn-primary">Detalles</button>
            <button id="btn-edit" class="btn btn-success">Editar</button>
            <button id="btn-delete" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
      <div class="my-card">
        <img class="card-img" src="../assets/placeholder_1.jpg" alt="Image">
        <div class="card-info">
          <p class="card-title">Nombre del Restaurante</p>
          <p class="card-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur nam illum perspiciatis magni sunt quo, assumenda ducimus obcaecati? Vero, a soluta? Itaque fugiat minus cum exercitationem laboriosam, quae ipsum repellat?</p>
          <div class="card-buttons">
            <button id="btn-more-info" class="btn btn-primary">Detalles</button>
            <button id="btn-edit" class="btn btn-success">Editar</button>
            <button id="btn-delete" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
      <div class="my-card">
        <img class="card-img" src="../assets/placeholder_1.jpg" alt="Image">
        <div class="card-info">
          <p class="card-title">Nombre del Restaurante</p>
          <p class="card-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur nam illum perspiciatis magni sunt quo, assumenda ducimus obcaecati? Vero, a soluta? Itaque fugiat minus cum exercitationem laboriosam, quae ipsum repellat?</p>
          <div class="card-buttons">
            <button id="btn-more-info" class="btn btn-primary">Detalles</button>
            <button id="btn-edit" class="btn btn-success">Editar</button>
            <button id="btn-delete" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
      <div class="my-card">
        <img class="card-img" src="../assets/placeholder_1.jpg" alt="Image">
        <div class="card-info">
          <p class="card-title">Nombre del Restaurante</p>
          <p class="card-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur nam illum perspiciatis magni sunt quo, assumenda ducimus obcaecati? Vero, a soluta? Itaque fugiat minus cum exercitationem laboriosam, quae ipsum repellat?</p>
          <div class="card-buttons">
            <button id="btn-more-info" class="btn btn-primary">Detalles</button>
            <button id="btn-edit" class="btn btn-success">Editar</button>
            <button id="btn-delete" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <template id="catalog-template">
    <div class="my-card">
      <img class="card-img" src="../assets/placeholder_1.jpg" alt="Image">
      <div class="card-info">
        <p class="card-title">Nombre del Restaurante</p>
        <p class="card-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur nam illum perspiciatis magni sunt quo, assumenda ducimus obcaecati? Vero, a soluta? Itaque fugiat minus cum exercitationem laboriosam, quae ipsum repellat?</p>
        <div class="card-buttons">
          <button id="btn-more-info" class="btn btn-primary">Detalles</button>
          <button id="btn-edit" class="btn btn-success">Editar</button>
          <button id="btn-delete" class="btn btn-danger">Eliminar</button>
        </div>
      </div>
    </div>
  </template>
</body>

<?php
include '../templates/footer.php';
?>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>