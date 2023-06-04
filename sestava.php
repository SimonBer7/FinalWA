<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REAL MADRID</title>
    <link rel="icon" type="image/x-icon" href="./img/favi.png">
    <link rel="stylesheet" href="aboutClub.php">
    <link rel="stylesheet" href="index.php">
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
                    <li><a href="index.php" class="nav-link p-3 text-white">Home</a></li>
                    <li><a href="aboutClub.php" class="nav-link p-3 text-white">O klubu</a></li>
                    <li><a href="sestava.php" class="nav-link p-3 text-white active">Sestava</a></li>

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

   


    <div class="container">
        <button class="btn" id="buttonHraci">HRÁČI</button>
        <div class="panel p-5" id="panel">
            <div class="d-flex justify-content-center flex-wrap" id="hraci">

            </div>
        </div>
    </div>
    <br>

    <div id="footer">
        <footer class="py-3">
            <p class="text-center text-body-secondary"><a href="https://github.com/SimonBer7/RealWebsite">© Šimon Bernard</a></p>
        </footer>
    </div>


    <script src="script.js"></script>

</body>
</html>