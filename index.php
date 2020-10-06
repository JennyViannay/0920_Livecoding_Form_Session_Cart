<?php
    session_start();
    require 'function.php';

    if(!empty($_GET)){
        $article = $_GET['article'];
        addArticle($article);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <script src="https://kit.fontawesome.com/12c728ad22.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
        Dynamique cart with session
    </a>
    <a href="cart.php"><i class="fas fa-cart-plus"></i> Cart</a>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                <img src="https://photos6.spartoo.com/photos/682/6821867/6821867_1200_A.jpg" class="card-img-top" alt="air max 270">
                    <div class="card-body">
                        <form method="GET">
                            <h5 class="card-title">Air max 270 green</h5>
                            <input type="text" class="d-none" name="article" value="AirMax_270_green">
                            <input type="text" class="d-none" name="price" value="220">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" class="btn btn-primary">Add</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                <img src="https://photos6.spartoo.com/photos/682/6821867/6821867_1200_A.jpg" class="card-img-top" alt="air max 270">
                    <div class="card-body">
                        <form method="GET">
                            <h5 class="card-title">Air max 270 white</h5>
                            <input type="text" class="d-none" name="article" value="AirMax_270_white">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" class="btn btn-primary">Add</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                    <img src="https://photos6.spartoo.com/photos/682/6821867/6821867_1200_A.jpg" class="card-img-top" alt="air max 270">
                    <div class="card-body">
                        <form method="GET">
                            <h5 class="card-title">Air max 270 red</h5>
                            <input type="text" class="d-none" name="article" value="AirMax_270_red">
                            <input type="text" class="d-none" name="price" value="220">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" class="btn btn-primary">Add</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                <img src="https://photos6.spartoo.com/photos/682/6821867/6821867_1200_A.jpg" class="card-img-top" alt="air max 270">
                    <div class="card-body">
                        <form method="GET">
                            <h5 class="card-title">Air max 270 blue</h5>
                            <input type="text" class="d-none" name="article" value="AirMax_270_blue">
                            <input type="text" class="d-none" name="price" value="220">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <button type="submit" class="btn btn-primary">Add</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>