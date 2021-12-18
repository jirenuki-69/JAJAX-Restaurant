<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include '../templates/header.php';
  ?>
  <link rel="stylesheet" href="../css/detalles.css">
  <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <title>Detalles</title>
</head>

<body class="backGround">
    <?php 
        // $imgPlaceHolder = "https://www.guioteca.com/mitos-y-enigmas/files/2016/10/DragonRed.jpg";
        // $imageData = array($imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder);
        // $imageIndex = 0;

        function changeImage($index){
            $imageIndex = $index;
        }

        include "../utils/connection.php";
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
    <div class="mainDiv">
        <div class="mainCard">
            <div class="leftSubDiv shadow p-3 bg-body rounded">
                <div class="mainImageContainer">
                    <img class="mainImage" src="<?php echo $data['image'] ?>" alt=""> 
                </div>
            </div>
            <div class="rightSubDiv">
                <div class="infoCard shadow p-3 bg-body rounded">
                    <span class="mainTitle"><?php echo $data['name'] ?></span>
                    <div class="dividerContainer">
                        <div class="divider">
                            <div class="bundle">
                            <span class="subTitle">Direccion</span>
                            <span class="info"><?php echo $data['description'] ?></span>
                            </div>
                            <div class="bundle">
                                <span class="subTitle">Location</span>
                                <span class="info"><?php echo $data['name'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="map shadow p-3 bg-body rounded" id="gmap" />
            </div>
        </div>
    </div>
</body>

<?php
include '../templates/footer.php';
?>
<script type="text/javascript" src="https://maps.google.com/maps/api/js?key="></script> 
<script type="text/javascript" src="../js/map.js"></script> 

</html>