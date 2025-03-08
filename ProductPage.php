<?php include 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
    <h3 class="add-transport">Product <span style="color:#e99803"> Page</span></h3>
        <?php
        for ($i = 1; $i <= 20; $i++): ?>

            <div class="col-xxl-2 col-xxl-2 col-lg-3 col-md-6 p-1">
                <div class="card-custome">
                    <div class="card-photo">
                        <img src="https://meyersound.com/wp-content/uploads/2019/07/x-800c_featured.jpg" alt="Item Name"
                            class="img-fluid">
                    </div>
                    <div class="card-details">
                        <h3 class="item-name">Item Name</h3>
                        <div class="item-status">
                            <span class="icon available" title="Available">A</span>
                            <span class="icon not-available" title="Not Available">N</span>
                            <span class="icon damaged" title="Damaged">D</span>
                            <span class="icon custom-icon" title="Custom Status">R</span>
                        </div>
                        <div class="add-to-cart-section">
                            <!-- <div class="quantity-wrapper">
                                <button class="quantity-btn minus-btn">-</button>
                                <input type="text" class="quantity-input" value="1" min="1">
                                <button class="quantity-btn plus-btn">+</button>
                            </div> -->
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

        <?php endfor; ?>


        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>

    </div>
</div>



<?php include 'footer.php'; ?>