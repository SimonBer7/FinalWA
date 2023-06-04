<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REAL MADRID</title>
    <link rel="icon" type="image/x-icon" href="./img/favi.png">
    <link rel="stylesheet" href="aboutClub.php">
    <link rel="stylesheet" href="sestava.php">
    <link rel="stylesheet" href="shop.php">
    <link rel="stylesheet" href="bag.php">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body>

    <header class="p-3 text-bg-secondary sticky-top">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <img src="./img/favi.png" width="50" height="70">
                <span class="fs-2 mx-5 text-white">Real Madrid</span>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="index.php" class="nav-link p-3 text-white active">Home</a></li>
                    <li><a href="aboutClub.php" class="nav-link p-3 text-white">O klubu</a></li>
                    <li><a href="sestava.php" class="nav-link p-3 text-white">Sestava</a></li>

                    <?php session_start(); if(isset($_SESSION["email"])){
                    
                    ?>
                    <li><a href="shop.php" class="nav-link p-3 text-white">FanShop</a></li>
                    <li><a href="bag.php" class="nav-link p-3 text-white">Bag</a></li>
                    <?php }?>

                </ul>

                <div class="text-end">
                    
                    <?php if(isset($_SESSION["email"])){
                    ?>
                    <button id="logout" type="button" class="btn btn-secondary text-black border border-white me-2" onclick="window.location.href = './php/logout.php'">Log-Out</button>
                    <?php }else{

                    ?>  
                    <button id="login" type="button" class="btn btn-secondary text-black border border-white me-2" onclick="window.location.href = 'login.php';">Log-In</button>
                    <button id="signup" type="button" class="btn btn-secondary text-black border border-white me-2" onclick="window.location.href = 'signup.php';">Sign-Up</button>
                    <?php
                    }?>
                 </div>
            </div>
        </div>
    </header>
    <br>

    




    <div class="container bg-light p-3 rounded">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/img1.jpg" class="d-block w-100" alt="screen1">

                </div>
                <div class="carousel-item">
                    <img src="./img/img3.jpg" class="d-block w-100" alt="screen2">

                </div>
                <div class="carousel-item">
                    <img src="./img/img2.jpg" class="d-block w-100" alt="screen3">

                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>


        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Real Madrid, <span class="text-muted">tým s velkou historií a úspěchy</span></h2>
                <p class="lead">
                    <br><br> Real Madrid CF (celým názvem: Real Madrid Club de Fútbol) je španělský fotbalový klub, který sídlí v Madridu. Od sezóny 1929 hraje v Primera División, španělské nejvyšší fotbalové soutěži. Největšími rivaly Realu Madrid jsou Atlético Madrid a FC Barcelona. Kromě fotbalu má klub také oddíly pro basketbal, tenis, stolní tenis a vodní pólo. Má přezdívku „bílý balet“.
                    <br><br> Tým Real Madridu se vyznačuje velkým množstvím vynikajících hráčů, kteří prošli klubem. Mezi nejvýznamnější patří jména jako Alfredo Di Stéfano, Ferenc Puskás, Cristiano Ronaldo, Karim Benzema a mnoho dalších. Klub má také dlouholetou rivalitu s jiným madridským týmem Atlético Madrid a také s FC Barcelona.
                    <br><br> Real Madrid je nejen klubem, ale také silnou značkou a institucí, která má po celém světě velkou fanouškovskou základnu. Jeho historie, vášeň a úspěchy ho činí jedním z nejvýznamnějších klubů ve světovém fotbale.
                </p>
                <br>


            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto rounded" data-src="holder.js/600x650/auto" alt="600x650" style="width: 600px; height: 650px;" src="./img/img4.jpg" data-holder-rendered="true">
            </div>
        </div>
    </div>
    <br>



    <div id="footer">
        <footer class="py-3">
            <p class="text-center text-body-secondary"><a href="https://github.com/SimonBer7/RealWebsite">© Šimon Bernard</a></p>
        </footer>
    </div>

   
    

</body>
</html>
