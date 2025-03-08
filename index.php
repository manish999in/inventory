<?php include 'header.php'; ?>


<div class="container-fluid">

 


    <div class="row">
        <div class="col-lg-4">

            <div class="wrapper">
                <header> Upload Photo </header>
                <form action="#" id="fileUploadForm">
                    <input type="file" name="file" id="chooseFileUpload" hidden multiple>
                    <i class="fas fa-cloud-upload-alt"></i>
                    <p>Browse Files to Upload</p>
                </form>
                <section id="progressArea"></section>
                <section id="uploadedArea"></section>
            </div>

            <div class="form-floating mt-3">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
                <label for="floatingTextarea2">Specification</label>
            </div>

        </div>
        <div class="col-lg-8">
            <div class="row">

                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Purchase Date</label>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"> Vendor Company Name</label>
                    </div>

                </div>

                <div class="col-md-12 mb-2">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Address</label>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="tel" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Mobile</label>
                    </div>
                </div>


                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Email</label>
                    </div>
                </div>


                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"> Gst Number</label>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Serial Number</label>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"> Pan Card</label>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <select class="form-select p-3" aria-label="Default select example">
                        <option selected>Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword"> Item Brand</label>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Amount</label>
                    </div>
                </div>

                <div class="col-md-6 mb-2">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Modal</label>
                    </div>
                </div>


                <div class="col-md-6 mb-2">
                    <div class="attichment">
                        <i class="fa-solid fa-paperclip"></i>
                        <div id="triggerButton" style="cursor: pointer;">Click to select files</div>
                        <input type="file" id="fileInput" name="files[]" multiple style="display: none;">
                    </div>
                    <div id="fileList"></div>
                </div>


                <div class="d-grid gap-2 d-md-block text-end mt-3">
                    <button class="btn btn-danger upload-csv" type="button">Upload CSV</button>
                    <button class="btn btn-primary" type="button">Submit</button>
                </div>

            </div>


        </div>
    </div>
</div>

<?php include 'footer.php'; ?>


