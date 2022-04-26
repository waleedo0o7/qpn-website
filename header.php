<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css"
        integrity="sha512-gRH0EcIcYBFkQTnbpO8k0WlsD20x5VzjhOA1Og8+ZUAhcMUCvd+APD35FJw3GzHAP3e+mP28YcDJxVr745loHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600;700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <!-- animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>

</head>

<body>

    <div class="loading-wrapper">
        <div class="left"></div> 
        <div class="right"></div> 
        <div class="lds-dual-ring"></div>
    </div> <!-- loading-wrapper -->

    <div class="left-menu-wrapper">
        <ul class="reset-ul menu-links">
            <li class="menu-item"><a class="menu-link active" href="home.php"> Home </a></li>
            <li class="menu-item"><a class="menu-link" href="solutions.php"> Solutions </a></li>
            <li class="menu-item"><a class="menu-link" href="about-us.php"> About Us </a></li>
            <li class="menu-item"><a class="menu-link" href="home.php"> Services </a></li>
            <li class="menu-item"><a class="menu-link" href="home.php#contact-us"> Contact </a></li>
            <i onclick="toggleMenu()" class="fa fa-times close-menu"></i>
        </ul>
    </div><!-- left-menu-wrapper -->

    <div class="top-menu-wrapper">
        <div class="top-menu">

            <div class="logo">
                <a href="home.php">
                    <img class="img-fluid" src="img/logo.svg" alt="qpn logo">
                </a>
            </div><!-- logo -->

            <div class="menu-wrapper">
                <ul class="reset-ul menu-links">
                    <li class="menu-item"><a class="menu-link active" href="home.php"> Home </a></li>
                    <li class="menu-item"><a class="menu-link" href="solutions.php"> Solutions </a></li>
                    <li class="menu-item"><a class="menu-link" href="about-us.php"> About Us </a></li>
                    <li class="menu-item"><a class="menu-link" href="home.php"> Services </a></li>
                    <li class="menu-item"><a class="menu-link" href="home.php#contact-us"> Contact </a></li>
                    <i class="fa fa-times close-menu"></i>
                </ul>
                <div onclick="toggleMenu()" class="mobile-icon">
                    <!-- <i class="fa fa-bars"></i> -->
                    <img class="img-fluid" src="img/3-bars.png" alt="">
                </div><!-- mobile-icon -->
            </div><!-- menu-wrapper -->

        </div><!-- top-menu -->
    </div><!-- top-menu-wrapper -->