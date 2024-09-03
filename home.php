<?php

session_start();

require "connection.php";

if (isset($_SESSION["u"])) {

?>



    <!DOCTYPE html>
    <html lang="en">


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>goodThings | Home</title>

        <link rel="stylesheet" href="bootstrap.css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css" />
        <link rel="stylesheet" href="foundation.css" />
        <link rel="stylesheet" href="semantic.css" />

        <link rel="icon" href="resource/logo.svg" />
    </head>

    <body class=" bg-dark" onload="banner();">
        <div class=" container-fluid col-12 ">
            <div class=" row">
                <nav class="navbar bg-black">
                    <div class="container-fluid">
                        <span class="navbar-brand text-light fs-5 fw-bold "><img src="resources/logo.jpg" style="height: 10vh;" onclick="window.location='home.html';">Well Come Sadeepa</span>
                        <ul class=" list-inline mt-3">
                            <li class=" list-inline-item">
                                <div class="col-12 col-lg-6 dropdown">
                                    <button class="btn btn-outline-warning dropdown-toggle rounded-2" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Other Options
                                    </button>
                                    <ul class="dropdown-menu ">
                                        <li><a class="dropdown-item" href="userprofile.html">My Profile</a></li>

                                        <li><a class="dropdown-item" href="myProducts.html">My Products</a></li>
                                        <li><a class="dropdown-item" href="watchList.html">Watchlist</a></li>
                                        <li><a class="dropdown-item" href="purchasingHistory.html">Purchase History</a></li>


                                    </ul>
                                </div>
                            </li>
                            <li class=" list-inline-item"><a href="cart.html" class=" text-warning text-decoration-none  fs-5 fw-bold"><i class="bi bi-cart-plus"></i></a></li>

                            <li class=" list-inline-item"><a onclick="signout();" class=" text-warning text-decoration-none  fs-5 fw-bold">Log Out</a></li>

                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control rounded-start" type="search" style="height:6vh;" placeholder="Search">
                            <button class="btn btn-warning d-grid rounded-end" style="height:6vh;" type="submit">Search</button>
                            <a class="text-warning  mt-2 mx-3" style="height:6vh;" onclick="admo();">Advenced</a>
                        </form>
                    </div>
                </nav>
                <div class="row mt-5 gap-5 d-flex justify-content-center">


                    <div class="col-12 d-none d-lg-block mb-3">
                        

                            <div class="banner-container">
                                <img id="banner" src="resources/posterimg.jpg" alt="Banner Image">
                               
                            </div>

                    </div>
                </div>
                <div class="row mt-5 gap-5 d-flex justify-content-center">
                    <div class="   box text-center fs-4 fw-bold text-bg-light" style="border-radius: 5%; width: 190px; height: 150px;" onclick="window.location='mobile.html';"><img src="resources/catmobile.jpeg" style="border-radius: 5%; width: 200px; height: 100px;"> Mobile</div>
                    <div class="   box text-center fs-4 fw-bold text-bg-light" style="border-radius: 5%; width: 190px; height: 150px;" onclick="window.location='laptops.html';"><img src="resources/catlaptop.jpeg" style="border-radius: 5%; width: 200px; height: 100px;">Laptops</div>
                    <div class="   box text-center fs-4 fw-bold text-bg-light" style="border-radius: 5%; width: 190px; height: 150px;" onclick="window.location='fashion.html';"><img src="resources/catfashion.jpeg" style="border-radius: 5%; width: 200px; height: 100px;">Fashion</div>
                    <div class="   box text-center fs-4 fw-bold text-bg-light" style="border-radius: 5%; width: 190px; height: 150px;" onclick="window.location='cosmatics.html';"><img src="resources/catcosmatics.jpeg" style="border-radius: 5%; width: 200px; height: 100px;">Cosmatics</div>

                </div>
                <div class=" row gap-3 d-flex justify-content-center mt-5 mx-1">

                    <div class="ui card mt-3 ">
                        <div class="image">
                            <img src="resources/background.jpg">
                        </div>
                        <div class="content">
                            <span class="header">iPhone 14 | Rs. 700,000/=</span>
                            <div class="meta col-12 gap-2">
                                <a class="btn btn-success d-grid fs-5 text-light col-12 mt-2">Purchase</a>

                                <a class="btn btn-warning d-grid fs-5 text-light col-12 d-inline mt-2" href="">Add to Cart</a>

                                <a class="btn btn-dark d-grid fs-5 text-light col-12 d-inline mt-2" href="">Watchlist</a>

                            </div>

                        </div>
                        <div class="text-black mb-3">
                            <a>
                                <i class="user icon"></i>
                                Quatity 28
                            </a>
                        </div>
                    </div>
                    <div class="ui card mt-3 ">
                        <div class="image">
                            <img src="resources/background.jpg">
                        </div>
                        <div class="content">
                            <span class="header">iPhone 14 | Rs. 700,000/=</span>
                            <div class="meta col-12 gap-2">
                                <a class="btn btn-success d-grid fs-5 text-light col-12 mt-2">Purchase</a>

                                <a class="btn btn-warning d-grid fs-5 text-light col-12 d-inline mt-2" href="">Add to Cart</a>

                                <a class="btn btn-dark d-grid fs-5 text-light col-12 d-inline mt-2" href="">Watchlist</a>

                            </div>

                        </div>
                        <div class="text-black mb-3">
                            <a>
                                <i class="user icon"></i>
                                Quatity 28
                            </a>
                        </div>
                    </div>
                    <div class="ui card mt-3 mb-3 ">
                        <div class="image">
                            <img src="resources/background.jpg">
                        </div>
                        <div class="content">
                            <span class="header">iPhone 14 | Rs. 700,000/=</span>
                            <div class="meta col-12 gap-2">
                                <a class="btn btn-success d-grid fs-5 text-light col-12 mt-2">Purchase</a>

                                <a class="btn btn-warning d-grid fs-5 text-light col-12 d-inline mt-2" href="">Add to Cart</a>

                                <a class="btn btn-dark d-grid fs-5 text-light col-12 d-inline mt-2" href="">Watchlist</a>

                            </div>

                        </div>
                        <div class="text-black mb-3">
                            <a>
                                <i class="user icon"></i>
                                Quatity 28
                            </a>
                        </div>
                    </div>
                    <div class="ui card mt-3 ">
                        <div class="image">
                            <img src="resources/background.jpg">
                        </div>
                        <div class="content">
                            <span class="header">iPhone 14 | Rs. 700,000/=</span>
                            <div class="meta col-12 gap-2">
                                <a class="btn btn-success d-grid fs-5 text-light col-12 mt-2">Purchase</a>

                                <a class="btn btn-warning d-grid fs-5 text-light col-12 d-inline mt-2" href="">Add to Cart</a>

                                <a class="btn btn-dark d-grid fs-5 text-light col-12 d-inline mt-2" href="">Watchlist</a>

                            </div>

                        </div>
                        <div class="text-black mb-3">
                            <a>
                                <i class="user icon"></i>
                                Quatity 28
                            </a>
                        </div>
                    </div>
                    <div class="ui card mt-3 ">
                        <div class="image">
                            <img src="resources/background.jpg">
                        </div>
                        <div class="content">
                            <span class="header">iPhone 14 | Rs. 700,000/=</span>
                            <div class="meta col-12 gap-2">
                                <a class="btn btn-success d-grid fs-5 text-light col-12 mt-2">Purchase</a>

                                <a class="btn btn-warning d-grid fs-5 text-light col-12 d-inline mt-2" href="">Add to Cart</a>

                                <a class="btn btn-dark d-grid fs-5 text-light col-12 d-inline mt-2" href="">Watchlist</a>

                            </div>

                        </div>
                        <div class="text-black mb-3">
                            <a>
                                <i class="user icon"></i>
                                Quatity 28
                            </a>
                        </div>
                    </div>
                    <div class="ui card mt-3 ">
                        <div class="image">
                            <img src="resources/background.jpg">
                        </div>
                        <div class="content">
                            <span class="header">iPhone 14 | Rs. 700,000/=</span>
                            <div class="meta col-12 gap-2">
                                <a class="btn btn-success d-grid fs-5 text-light col-12 mt-2">Purchase</a>

                                <a class="btn btn-warning d-grid fs-5 text-light col-12 d-inline mt-2" href="">Add to Cart</a>

                                <a class="btn btn-dark d-grid fs-5 text-light col-12 d-inline mt-2" href="">Watchlist</a>

                            </div>

                        </div>
                        <div class="text-black">
                            <a>
                                <i class="user icon"></i>
                                Quatity 28
                            </a>
                        </div>
                    </div>
                    <div class="ui card mt-3 ">
                        <div class="image">
                            <img src="resources/background.jpg">
                        </div>
                        <div class="content">
                            <span class="header">iPhone 14 | Rs. 700,000/=</span>
                            <div class="meta col-12 gap-2">
                                <a class="btn btn-success d-grid fs-5 text-light col-12 mt-2">Purchase</a>

                                <a class="btn btn-warning d-grid fs-5 text-light col-12 d-inline mt-2" href="">Add to Cart</a>

                                <a class="btn btn-dark d-grid fs-5 text-light col-12 d-inline mt-2" href="">Watchlist</a>

                            </div>

                        </div>
                        <div class="text-black mb-3">
                            <a>
                                <i class="user icon"></i>
                                Quatity 28
                            </a>
                        </div>
                    </div>
                    <div class="ui card mt-3 mb-3">
                        <div class="image">
                            <img src="resources/background.jpg">
                        </div>
                        <div class="content">
                            <span class="header">iPhone 14 | Rs. 700,000/=</span>
                            <div class="meta col-12 gap-2">
                                <a class="btn btn-success d-grid fs-5 text-light col-12 mt-2">Purchase</a>

                                <a class="btn btn-warning d-grid fs-5 text-light col-12 d-inline mt-2" href="">Add to Cart</a>

                                <a class="btn btn-dark d-grid fs-5 text-light col-12 d-inline mt-2" href="">Watchlist</a>

                            </div>

                        </div>
                        <div class="text-black mb-3">
                            <a>
                                <i class="user icon"></i>
                                Quatity 28
                            </a>
                        </div>
                    </div>



                </div>


            </div>
        </div>



        <div class="modal bg-black" tabindex="-1" id="Advanced">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Search in Advance</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Product Name</p>
                        <input type="text" class=" form-control" id="an">

                        <p>Category</p>
                        <input type="text" class=" form-control" id="as">

                        <p>Brand</p>
                        <input type="text" class=" form-control" id="te"">
              
              <p>Model</p>
              <input type=" text" class=" form-control" id="se">

                        <p>Wishing Price</p>
                        <input type="text" class=" form-control" id="m">




                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning" onclick="adv();">Search</button>
                    </div>
                </div>
            </div>
        </div>


        <script src="script.js"></script>
        <script src="bootstrap.js"></script>
        <script src="bootstrap.bundle.js"></script>
        <script src="foundation.js"></script>
        <script src="semantic.js"></script>
    </body>

    </html>
<?php

} else {





    header("Location:index.php");
}
?>