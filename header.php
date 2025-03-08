<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>manish999</title>
    <link rel="icon" type="image/x-icon" href="./img/manish999.in.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/other.css">

</head>

<body>
    <div class="sidebar close">
        <div class="logo-details">
            <i class="fa-solid fa-warehouse"></i>
            <span class="logo_name">INVENTORY</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="/inventory/dashboard.php">
                    <i class="fa-solid fa-table-cells-large"></i>
                    <span class="link_name">Dashboard</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Category</a></li>
                </ul>
            </li>

            <li>
                <a href="/inventory/index.php">
                    <i class="fa fa-upload"></i>
                    <span class="link_name">Upload </span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Category</a></li>
                </ul>
            </li>

            <!-- <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class="fa-solid fa-folder-open"></i>
                        <span class="link_name">Category</span>
                    </a>
                    <i class="fa-solid fa-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Category</a></li>
                    <li><a href="#">HTML & CSS</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">PHP & MySQL</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class="fa-solid fa-book"></i>
                        <span class="link_name">Posts</span>
                    </a>
                    <i class="fa-solid fa-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Posts</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">Login Form</a></li>
                    <li><a href="#">Card Design</a></li>
                </ul>
            </li>-->
            <li>
                <a href="/inventory/ProductPage.php">
                    <i class="fa fa-gift"></i>
                    <span class="link_name">Product Page</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Analytics</a></li>
                </ul>
            </li>


            <li>
                <a href="/inventory/eventlist.php">
                    <i class="fa-solid fa-calendar"></i>
                    <span class="link_name">Event Date </span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Event Date</a></li>
                </ul>
            </li>



            <li>
                <a href="/inventory/SelectionPage.php">
                    <i class="fa fa-file-text"></i>
                    <span class="link_name">Selection Page</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Selection Page</a></li>
                </ul>
            </li>


            <li>
                <a href="/inventory/ChallanPage.php">
                    <i class="fa fa-pencil-square"></i>
                    <span class="link_name">Challan Page</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Challan Page</a></li>

                </ul>
            </li>



            <li>
                <a href="/inventory/ProductInformation.php">
                    <i class="fa fa-shopping-cart"></i>
                    <span class="link_name">Product Information</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Product Information</a></li>

                </ul>
            </li>



            <li>
                <a href="/inventory/NewEvent.php">
                    <i class="fa fa-calendar"></i>
                    <span class="link_name">New Event</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">New Event</a></li>

                </ul>
            </li>


            <li>
                <a href="/inventory/RetunEquipment.php">
                    <i class="fa fa-credit-card"></i>
                    <span class="link_name"> Retun Equipment</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#"> Retun Equipment</a></li>

                </ul>
            </li>

            <li>
                <a href="/inventory/chalanlist.php">
                    <i class="fa fa-list-alt"></i>
                    <span class="link_name"> Chalan List</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Chalan List</a></li>

                </ul>
            </li>


            <li>
                <a href="/inventory/transport-list.php">
                    <i class="fa fa-truck"></i>
                    <span class="link_name"> Transport List</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Transport List</a></li>

                </ul>
            </li>


















            <!-- <li>
                <a href="#">
                    <i class="fa-solid fa-chart-line"></i>
                    <span class="link_name">Chart</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Chart</a></li>
                </ul>
            </li>
            <li>
                <div class="iocn-link">
                    <a href="#">
                        <i class="fa-solid fa-plug"></i>
                        <span class="link_name">Plugins</span>
                    </a>
                    <i class="fa-solid fa-chevron-down arrow"></i>
                </div>
                <ul class="sub-menu">
                    <li><a class="link_name" href="#">Plugins</a></li>
                    <li><a href="#">UI Face</a></li>
                    <li><a href="#">Pigments</a></li>
                    <li><a href="#">Font Awesome</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-compass"></i>
                    <span class="link_name">Explore</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Explore</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-clock-rotate-left"></i>
                    <span class="link_name">History</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">History</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span class="link_name">Setting</span>
                </a>
                <ul class="sub-menu blank">
                    <li><a class="link_name" href="#">Setting</a></li>
                </ul>
            </li> -->
            <li>
                <div class="profile-details">
                    <div class="profile-content">
                        <!--<img src="image/profile.jpg" alt="profileImg">-->
                    </div>
                    <div class="name-job">
                        <div class="profile_name">Jos Butteler</div>
                        <div class="job">Software Developer</div>
                    </div>
                    <i class="fa-solid fa-right-from-bracket"></i>
                </div>
            </li>










        </ul>
    </div>

    <section class="home-section">
        <div class="home-content">
            <i class="fa-solid fa-bars threeBars"></i>
            <div class="navBar-Custome">
                <div class="imgLogoDiv">
                    <a href="dashboard.php">
                        <img src=".\img\manish999.in.png" class="img-fluid w-50" alt="">
                    </a>
                </div>
            </div>


            <div class="searchBar">
                <input class="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
                <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="#666666"
                            d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                    </svg>
                </button>
            </div>


            <div class="navBar-Custome">
                <div class="userProfile">

                    <!-- Example split danger button -->
                    <div class="btn-group">
                        <button type="button" class="dropdown-toggle dropdown-toggle-split threeDot"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="Dots">
                                ...
                            </span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here2</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                    <!-- Example split danger button -->



                    <button type="button" class="threeDot position-relative" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                        <!-- Inbox --><i class="fa-solid fa-cart-shopping"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </button>



                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <img type="button" data-bs-toggle="dropdown" aria-expanded="false"
                            src="https://cdn-icons-png.flaticon.com/512/219/219970.png" alt=""
                            class="userProfileIcons dropdown-toggle">
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="login.php">
                                    <i class="fa-solid fa-user"></i> Login
                                </a>
                            </li>
                            <li><a class="dropdown-item" href="profile.php">
                                    <i class="fa-solid fa-circle-user fa-flip"></i>Profile
                                </a></li>
                            <li><a class="dropdown-item" href="signup.php"><i class="fa-solid fa-user-plus"></i>Sign
                                    Up</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="signIn.php">
                                    <i class="fa-solid fa-power-off fa-fade"></i> Logout
                                </a>
                            </li>
                        </ul>



                    </div>

                </div>
            </div>

        </div>
        </div>
        </div>
    </section>


    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Cart List</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">

            <?php
            for ($i = 1; $i <= 20; $i++): ?>

                <div class="cart-list-height">
                    <div class="card card-margin">
                        <div class="row g-0">
                            <div class="col-md-4 d-flex justify-content-center align-items-center">
                                <img src="https://meyersound.com/wp-content/uploads/2019/07/x-800c_featured.jpg"
                                    class="img-fluid rounded-start imgBg" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex justify-content-between align-items-start">
                                    <div class="qtyValue">
                                        <h5 class="card-title">X-1100</h5>

                                        <div class="valuePlus">


                                            <p class="card-text">Qty <small class="text-body-secondary">12</small></p>

                                            <!-- Quantity controls -->
                                            <div class="quantity-wrapper d-flex">
                                                <button class="quantity-btn minus-btn btn btn-outline-secondary">-</button>
                                                <input type="text" class="quantity-input form-control text-center" value="1"
                                                    min="1" style="width: 60px;">
                                                <button class="quantity-btn plus-btn btn btn-outline-secondary">+</button>
                                            </div>

                                        </div>

                                    </div>
                                    <span class="deletebtnbg">
                                        <!-- Delete button -->
                                        <i class="fas fa-trash delete-btn" onclick="deleteFile(this)"
                                            style="cursor: pointer;"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endfor; ?>




        </div>
    </div>


    <div class="one">
        <aside class="rightBar">