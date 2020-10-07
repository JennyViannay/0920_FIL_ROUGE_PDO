<?php 
session_start();
require 'functions/function.php';
if($_SERVER['REQUEST_METHOD'] === 'GET'){
    if(!empty($_GET['article'])){
        $article = $_GET['article'];
        addArticle($article); 
    }
}
include './layout/header.php';
?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="card">
                <img src="https://photos6.spartoo.com/photos/682/6821867/6821867_1200_A.jpg" class="card-img-top" alt="air max 270">
                    <div class="card-body">
                        <form method="GET">
                            <h5 class="card-title">Air max 270 green</h5>
                            <input type="text" class="d-none" name="article" value="AirMax_270_green">
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
                            
                            <button type="submit" class="btn btn-primary">Add</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include './layout/footer.php'; ?>