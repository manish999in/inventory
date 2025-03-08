<?php include 'header.php'; ?>




<div class="container-fluid">
    <div class="row">
    <h3 class="add-transport">New <span style="color:#e99803"> Event</span></h3>


        <div class="col-md-4 my-2">
            <div class="card main mb-3">
                <div class="headerChalan">
                    IRS Communication 1 Sep 2024
                </div>
                <div class="card-body">
                    <iframe src="./img/warehouse 1.pdf" width="100%" height="300px">
                        <a href=".//img_girl.pdf">Download PDF</a>.
                    </iframe>
                </div>
                <div class="footerchalan">
                    <div title="View">
                        <i class="fa-solid fa-eye fa-lg"></i>
                    </div>
                    <div title="Download">
                        <a href="path-to-your-pdf-file.pdf" download="">
                            <i class="fa-solid fa-download fa-lg"></i>
                        </a>
                    </div>
                    <div title="Share">
                        <i class="fa-solid fa-share fa-lg"></i>
                    </div>
                </div>
            </div>
            <div class="card main mb-3">
                <div class="headerChalan">
                    IRS Communication 1 Sep 2024
                </div>
                <div class="card-body">
                    <iframe src="./img/warehouse 1.pdf" width="100%" height="300px">
                        <a href=".//img_girl.pdf">Download PDF</a>.
                    </iframe>
                </div>
                <div class="footerchalan">
                    <div title="View">
                        <i class="fa-solid fa-eye fa-lg"></i>
                    </div>
                    <div title="Download">
                        <a href="path-to-your-pdf-file.pdf" download="">
                            <i class="fa-solid fa-download fa-lg"></i>
                        </a>
                    </div>
                    <div title="Share">
                        <i class="fa-solid fa-share fa-lg"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-md-8">
        
            <div class="row">
                <div class="col-md-4">
                    <div class="card ">

                        <h3 class="item-name text-center m-2">Selected</h3>

                        <div class="scrollable-content">


                            <?php
                            for ($i = 1; $i <= 60; $i++) {
                                echo '
                            <div class="row mt-2 border p-2 m-2">
                                <div class="col-md-6 selectedItems p-0">
                                    <span class="greenIcons">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    <div class="imageNewEvent">
                                        <img src="https://meyersound.com/wp-content/uploads/2019/07/x-800c_featured.jpg" alt="Item Name" class="img-fluid">
                                        <b> X-11000</b>
                                    </div>
                                </div>
                                <div class="col-md-3 p-0 qty">
                                    <b> Qty </b>
                                </div>
                                <div class="col-md-3 p-0">12</div>
                            </div>';
                            }
                            ?>

                        </div>

                    </div>
                    <!-- total -->
                    <div class="footer mt-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Total">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Storekeeper">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- total -->
                </div>


                <div class="col-md-4">
                    <div class="card ">

                        <h3 class="item-name text-center m-2"> Hire From Vendor</h3>

                        <div class="scrollable-content">


                            <?php
                            for ($i = 1; $i <= 60; $i++) {
                                echo '
                            <div class="row mt-2 border p-2 m-2">
                                <div class="col-md-6 selectedItems p-0">
                                    <span class="redIcons">
                                        <i class="fa-solid fa-check"></i>
                                    </span>
                                    <div class="imageNewEvent">
                                        <img src="https://meyersound.com/wp-content/uploads/2019/07/x-800c_featured.jpg" alt="Item Name" class="img-fluid">
                                        <b> X-11000</b>
                                    </div>
                                </div>
                                <div class="col-md-3 p-0 qty">
                                    <b> Qty </b>
                                </div>
                                <div class="col-md-3 p-0">12</div>
                            </div>';
                            }
                            ?>

                        </div>

                    </div>
                    <!-- total -->
                    <div class="footer mt-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Total">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Storekeeper">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- total -->
                </div>

                <div class="col-md-4">
                    <div>
                        <p>These items not in our Warehouse please change eles from outside vendor.</p>
                    </div>
                    <form class="card px-4 py-5" style="box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;">
                        <div class="mb-3">
                            <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Transporter">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Driver">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Mobile">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Own Car">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Deiver">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="searchQueryInput" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Mobile">
                        </div>
                        <button type="submit" class="btn btn-primary w-100 mt-3">Submit</button>
                    </form>
                </div>
            </div>

        </div>


    </div>
</div>


<?php include 'footer.php'; ?>