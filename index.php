<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>FINAL PROJECT</title>
</head>

<body>
    <?php
        session_start(); // Dòng này phải có ở đầu file
    ?>

    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #343A40;">
            <a class="navbar-brand text-white" href="#">
                <img style="height: 40px; width: auto;" src="https://e7.pngegg.com/pngimages/779/61/png-clipart-logo-idea-cute-eagle-leaf-logo-thumbnail.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="#">TRANG CHỦ <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">THÔNG TIN GIẢM GIÁ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">GIỎ HÀNG</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                            SẢN PHẨM
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">LAPTOP</a>
                            <a class="dropdown-item" href="#">PC</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">HELP CENTER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">ABOUT US</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 mr-2 my-sm-0" type="submit">Search</button>
                </form>
                    <?php
                        if (isset($_SESSION['username'])) {
                            // Nếu đã đăng nhập, hiển thị tên người dùng và nút đăng xuất
                            echo '<a class="btn btn-outline-light disabled" href="#">Chào, ' . $_SESSION['username'] . '</a>';
                            echo '<a class="btn btn-outline-light" href="./logout.php">Đăng Xuất</a>';
                        } else {
                            // Nếu chưa đăng nhập, hiển thị nút đăng nhập và đăng ký
                            echo '<a class="btn btn-outline-light" href="./login.php">Đăng Nhập</a>';
                            echo '<a class="btn btn-outline-light" href="./register.php">Đăng Ký</a>';
                        }
                    ?>
            </div>
        </nav>
    </header>

    <!-- Carousel -->
    <div class="body-carousel">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./img/pc1.png" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/pc1.png" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./img/pc1.png" class="d-block" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>
    </div>

    <div class="container my-4">
        <div class="main">
            <div class="row">
                <div class="mb-3 col-12 d-flex align-items-center justify-content-between">
                    <p class="ml-2 mb-0 anchor-laptop text-left text-md-left">Sản phẩm PC</p>
                    <a href="laptopProduct.html" class="btn btn-link text-right">Xem tất cả</a>
                </div>
            </div>
            <div class="row">
                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container my-4">
        <div class="row">
            <!-- Cột của hình 1 -->
            <div class="col-12 col-md-7">
                <div class="h-100">
                    <img src="./img/banner-1.webp" class="img-fluid w-100 h-100" alt="Image 1">
                </div>
            </div>
    
            <!-- Cột chứa hình 2 và hình 3 -->
            <div class="col-12 col-md-5">
                <div class="row h-100">
                    <!-- Hình 2 -->
                    <div class="col-12 mb-4">
                        <img src="./img/banner-2.webp" class="img-fluid w-100" alt="Image 2">
                    </div>
                    <!-- Hình 3 -->
                    <div class="col-12">
                        <img src="./img/banner-2.webp" class="img-fluid w-100" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container my-4">
        <div class="main">
            <div class="row">
                <div class="mb-3 col-12 d-flex align-items-center justify-content-between">
                    <p class="ml-2 mb-0 anchor-laptop text-left text-md-left">Sản phẩm Laptop</p>
                    <a href="./html/laptopProduct.html" class="btn btn-link text-right">Xem tất cả</a>
                </div>
            </div>
            <div class="row">
                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="pb-4 col-md-3">
                    <div class="card h-100">
                        <img src="./img/list-item-1.webp" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">Laptop Model XYZ</h5>
                            <ul class="list-unstyled specs-list">
                                <li class="spec-item"><i class="fas fa-microchip"></i> <strong>CPU:</strong> i5-13420H</li>
                                <li class="spec-item"><i class="fas fa-memory"></i> <strong>RAM:</strong> 16 GB</li>
                                <li class="spec-item"><i class="fas fa-hdd"></i> <strong>Storage:</strong> 512 GB SSD</li>
                                <li class="spec-item"><i class="fas fa-video"></i> <strong>GPU:</strong> RTX 2050</li>
                                <li class="spec-item"><i class="fas fa-sync"></i> <strong>Refresh Rate:</strong> 144 Hz</li>
                                <li class="spec-item"><i class="fas fa-tv"></i> <strong>Screen:</strong> 15.6 inch FHD</li>
                            </ul>
                            <p class="card-text font-weight-bold">Price: $1,299</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                            <a href="#" class="btn btn-primary">Buy Now</a>
                            <button class="btn btn-outline-secondary"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container">
        <div class="main">
            <p class="title-sale">Chuyên trang khuyến mãi</p>
            <div class="row row-cols-1 row-cols-md-4">
                <div class="col">
                    <div class="card">
                        <img src="./img/tin-tuc-1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./img/tin-tuc-1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./img/tin-tuc-1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./img/tin-tuc-1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <p class="title-sale">Chuyên trang khuyến mãi</p>
            <div class="row row-cols-1 row-cols-md-4">
                <div class="col">
                    <div class="card">
                        <img src="./img/tin-tuc-1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./img/tin-tuc-1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./img/tin-tuc-1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center card-title">Card title</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <img src="./img/tin-tuc-1.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="text-center card-title">Card title</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-light pt-5 pb-4">
        <div class="container text-md-left">
            <div class="row">
    
                <!-- Company Info -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Company Name</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #f0f0f0; height: 2px"/>
                    <p>
                        Brief description of the company, mission statement, or tagline.
                    </p>
                </div>
    
                <!-- Products Section -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #f0f0f0; height: 2px"/>
                    <p><a href="#" class="text-light">SẢN PHẨM PC</p>
                    <p><a href="#" class="text-light">SẢN PHẨM LAPTOP</a></p>
                </div>
    
                <!-- Support Section -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Support</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #f0f0f0; height: 2px"/>
                    <p><a href="#" class="text-light">Help Center</a></p>
                    <p><a href="#" class="text-light">Contact Us</a></p>
                </div>
    
                <!-- Contact Section -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">Contact</h6>
                    <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #f0f0f0; height: 2px"/>
                    <p><i class="fas fa-home mr-3"></i> Address Line, City, Country</p>
                    <p><i class="fas fa-envelope mr-3"></i> email@example.com</p>
                    <p><i class="fas fa-phone mr-3"></i> +123 456 7890</p>
                    <p><i class="fas fa-print mr-3"></i> +123 456 7891</p>
                </div>
    
                <!-- Social Media Links -->
                <div class="col-12 text-center mt-3">
                    <a href="#" class="text-light mr-4"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-light mr-4"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-light mr-4"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-light mr-4"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    
        <!-- Copyright -->
        <div class="text-center py-3">
            © 2024 Company Name. All rights reserved.
        </div>
    </footer>
</body>
</html>