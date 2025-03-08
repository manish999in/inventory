<?php include 'header.php'; ?>




<div class="container-fluid">
    <div class="row">
    <h3 class="add-transport">Return <span style="color:#e99803"> Equipment</span></h3>
        <div class="col-md-3 my-2">
            <div>
                <iframe src="./img/warehouse 1.pdf" width="100%" height="300px">
                    <a href=".//img_girl.pdf">Download PDF</a>.
                </iframe>
            </div>
            <div>
                <iframe src="./img/warehouse 1.pdf" width="100%" height="300px">
                    <a href=".//img_girl.pdf">Download PDF</a>.
                </iframe>
            </div>
        </div>
        <div class="col-md-9">

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
                                <div class="col-md-3 p-0 ">12</div>
                            </div>';
                            }
                            ?>

                        </div>


                        <!-- total -->
                    </div>


                    <!-- total -->
                    <div class="footer mt-2">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Total">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Storekeeper">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Mobile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- total -->
                </div>
                <div class="col-md-4">
                    <div class="card p-2">
                        <div class="item-name text-center m-2">
                            Service or broken list
                        </div>
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
                    <div class="mb-3 mt-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Transport Name">
                    </div>
                    <!-- total       -->
                    <div class="footer mt-2 ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Total">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Attachement">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="out time">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- total -->
                </div>
                <div class="col-md-4">


                    <form class="card px-4 py-5"
                        style="box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;">

                        <div class="mb-3">
                            <input class="searchQueryInput" type="email" name="" placeholder="By whom" value="">
                        </div>

                        <div class="mb-3">
                            <input class="searchQueryInput" type="email" name="" placeholder="Mobile" value="">
                        </div>

                        <div class="mb-3">
                            <input class="searchQueryInput" type="tel" name="" placeholder="Transport" value="">
                        </div>
                        <div class="mb-3">
                            <input class="searchQueryInput" type="tel" name="" placeholder="Driver" value="">
                        </div>
                        <div class="mb-3">
                            <input class="searchQueryInput" type="tel" name="" placeholder="Mobile" value="">
                        </div>
                        <div class="mb-3">
                            <input class="searchQueryInput" type="tel" name="" placeholder="Amount" value="">
                        </div>

                        <div class="mb-3">
                            <input class="searchQueryInput" type="tel" name="" placeholder="Link Paytm" value="">
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="searchQueryInput1" class="chalanbtn w-100">Share</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include 'footer.php'; ?>