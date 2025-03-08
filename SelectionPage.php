<?php include 'header.php'; ?>

<div class="container-fluid">

    <div class="row">
    <h3 class="add-transport">Selection <span style="color:#e99803"> Page</span></h3>
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card-custome m-2">
                <div class="card-photo">
                    <img src="https://meyersound.com/wp-content/uploads/2019/07/x-800c_featured.jpg" alt="Item Name"
                        class="img-fluid">
                </div>
                <div class="card-details">
                    <h3 class="item-name">Item :- <span> X-1100C' </span></h3>

                    <div class="many-Content">
                        <div class="many-inner">
                            <div class="item-name-content">Mayer Subwoofer</div>
                            <div class="item-name-content">Total = 16</div>
                            <div class="item-name-content">Warehouse = 16</div>
                            <div class="item-name-content addto">Add to <div class="add-to-cart-section-new">
                                    <div class="quantity-wrapper">
                                        <button class="quantity-btn minus-btn">-</button>
                                        <input type="text" class="quantity-input" value="1" min="1">
                                        <button class="quantity-btn plus-btn">+</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="item-status mt-2">
                        <span class="icon available" title="Available">A</span>
                        <span class="icon not-available" title="Not Available">N</span>
                        <span class="icon damaged" title="Damaged">D</span>
                        <span class="icon custom-icon" title="Custom Status">R</span>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="row">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item w-25" role="presentation">
                        <a class="nav-link text-center active" id="home-tab" data-bs-toggle="tab" href="#home"
                            role="tab" aria-controls="home" aria-selected="true">Product</a>
                    </li>
                    <li class="nav-item w-25" role="presentation">
                        <a class="nav-link text-center" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Specification</a>
                    </li>
                    <li class="nav-item w-25" role="presentation">
                        <a class="nav-link text-center" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Service</a>
                    </li>

                    <li class="nav-item w-25" role="presentation">
                        <a class="nav-link text-center" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">History</a>
                    </li>
                </ul>


                <div class="col-md-8 mt-2">

                    <!-- Tab Content -->
                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                            <div class="item-name-content mt-3">SOUND WILL NEVER BE THE SAME </div>
                            <p>Presenting the line array with over 150 dB output in a cabinet weighing only 150 lb (68
                                kg).
                                Powerful enough for festivals, yet agile
                                enough to support arenas, theatres, and even Qty 12
                                corporate AV.</p>
                        </div>


                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h4>Profile Tab Content</h4>
                            <p>This is the content for the Profile tab.</p>
                        </div>


                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            <h4>Contact Tab Content</h4>
                            <p>This is the content for the Contact tab.</p>
                        </div>


                        <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                            <h4>Contact Tab History</h4>
                            <p>This is the content for the Contact tab.</p>
                        </div>

                    </div>


                </div>


                <div class="col-md-4  mt-2">

                    <div class="cart-list-col">
                        <div class="box-cart-header">
                            <h3>Selected</h3>
                        </div>

                        <div class="scrollable-content">

                            <?php
                            for ($i = 1; $i <= 30; $i++) {
                                echo '
                            <div class="div1">
                            <div class="card card-margin">
                                <div class="row g-0">
                                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                                        <img src="https://meyersound.com/wp-content/uploads/2019/07/x-800c_featured.jpg"
                                            class="img-fluid rounded-start imgBg" alt="...">
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">X-1100</h5>
                                            <p class="card-text">Qty <small class="text-body-secondary">12</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            ';
                            }
                            ?>
                        </div>


                    </div>

                </div>

            </div>
        </div>

    </div>

    <div class="d-flex justify-content-center align-items-center mt-3">
        <div class="col-md-11">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="clientName" placeholder="Client Name">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="contactPerson" placeholder="Contact Person">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="mobile" placeholder="Mobile">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="total" placeholder="Total">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="blank" placeholder="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="eventDate1" placeholder="Event Date">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="eventDate2" placeholder="Event Date">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="eventDate3" placeholder="Event Date">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="file" class="form-control" id="uploadFile" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="crew" placeholder=""
                            value="Crew - Yash,Keshav, Nishant,Rahul">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="loading" placeholder="Loding">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="time" placeholder="Time">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="file" id="fileUpload" style="display: none;">
                        <label for="fileUpload" class="btn btn-secondary w-100">Choose File</label>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-3">
                        <input type="submit" class="btn btn-secondary w-100" id="submitBtn" />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>




<?php include 'footer.php'; ?>