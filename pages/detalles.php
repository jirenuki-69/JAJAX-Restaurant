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
        $imgPlaceHolder = "https://www.guioteca.com/mitos-y-enigmas/files/2016/10/DragonRed.jpg";
        $imageData = array($imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder, $imgPlaceHolder);
        $imageIndex = 0;

        function changeImage($index){
            $imageIndex = $index;
        }
    ?>
    <div class="mainDiv">
        <div class="mainCard">
            <div class="leftSubDiv shadow p-3 bg-body rounded">
                <div class="miniImagesContainer">
                    <?php 
                        foreach($imageData as $key=>$val) {
                    ?>
                        <div class='mini_image_container' onclick="clickImage(<?php echo $key ?>)">
                            <img class="miniImage" src="<?php echo $val ?>" alt="">
                        </div>
                    <?php 
                        }
                    ?>
                </div>
                <div class="mainImageContainer">
                    <img class="mainImage" src="<?php echo $val ?>" alt=""> 
                </div>
            </div>
            <div class="rightSubDiv">
                <div class="infoCard shadow p-3 bg-body rounded">
                    <span class="mainTitle">Nombre de la sucursal</span>
                    <div class="dividerContainer">
                        <div class="divider">
                            <div class="bundle">
                            <span class="subTitle">Direccion</span>
                            <span class="info">Calle 20 C #304 x21 Diag y 19 A Diagonal, Jardines del norte aaaaaaaaaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaaaaaa</span>
                            </div>
                            <div class="bundle">
                                <span class="subTitle">Puntuación</span>
                                <span class="info">5</span>
                            </div>
                        </div>
                        <div class="divider">
                            <div class="bundle">
                                <span class="subTitle">Telefono</span>
                                <span class="info">9992570396</span>
                            </div>
                            <div class="bundle">
                                <span class="subTitle">Horario</span>
                                <span class="info">9:00 am - 12:00 pm</span>
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

</html>