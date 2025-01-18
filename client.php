<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php" ?>

</head>

<body>
    <?php include "include/header.php" ?>

    <main class="main">
        <!-- breadcrumb -->
        <div class="site-breadcrumb">
            <div class="site-breadcrumb-bg" style="background: url(assets/img/breadcrumb/01.jpg)"></div>
            <div class="container">
                <div class="site-breadcrumb-wrap">
                    <h4 class="breadcrumb-title">Client</h4>
                    <ul class="breadcrumb-menu">
                        <li><a href="index.php"><i class="far fa-home"></i>Home</a></li>
                        <li class="active">Client</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <div style="margin-top: 60px; margin-bottom: 60px;" id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/banner/1.jpg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/banner/2.jpg" class="d-block w-100" alt="">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/banner/3.jpg" class="d-block w-100" alt="">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

       







    </main>
    <?php include "include/footer.php" ?>


    <?php include "include/foot.php" ?>


</html>