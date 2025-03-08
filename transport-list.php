<?php include 'header.php'; ?>

<style>

</style>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <h3 class="add-transport">Add <span style="color:#e99803"> Transport</span></h3>
            <div class="row add-transport-info">
                <div class="col-md-3 mb-2">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Transport Name">
                </div>
                <div class="col-md-3 mb-2">
                        <input type="text" class="form-control" id="floatingPassword"
                            placeholder="Enter Vehicle Number">
                </div>
                <div class="col-md-3 mb-2">
                        <input type="tel" class="form-control" id="floatingPassword"
                            placeholder="Enter Transport Number">
                </div>
                <div class="col-md-3 mb-2">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Enter Driver Name">
                </div>
                <div class="col-md-3 mb-2">
                        <input type="number" class="form-control" id="floatingPassword"
                            placeholder="Enter Driver Phone Number">
                </div>
                <div class="col-md-3 mb-2">
                    <div class="attichment">
                        <i class="fa-solid fa-paperclip"></i>
                        <div id="triggerButton" style="cursor: pointer;">Click to Attached files</div>
                        <input type="file" id="fileInput" name="files[]" multiple style="display: none;">
                    </div>
                    <div id="fileList"></div>
                </div>

                <div class="col-md-3 mb-2">
                    <div class="d-grid gap-2 d-md-block">
                        <!-- <button class="btn btn-danger upload-csv" type="button">Upload CSV</button> -->
                        <button class="btn btn-primary transport-submit" type="button">Submit</button>
                    </div>
                </div>

            </div>


        </div>
    </div>
</div>

<div class="container-fluid">

    <h6 class="pt-3 transport-conveance">Transport Conveyance </h6>
    <div class="row">

        <!-- <//?php
        //for ($i = 1; $i <= 10; $i++): ?> -->

        <div class="col-xxl-3 col-xxl-3 col-lg-3 col-md-6 p-1">
            <div class="card-custome">
                <div class="card-photo transport-img-info">
                    <img src="img/two-wheeler.png" alt="Item Name" class="img-fluid">
                </div>

                <div class="card-details">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <h3 class="item-name">Two Wheeler</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <div class="item-status">
                                <a href="#"><span class="icon available"><i class="fa fa-edit"></i></span></a>
                                <a href="#"><span class="icon delete-transport"><i class="fa fa-trash"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-xxl-3 col-lg-3 col-md-6 p-1">
            <div class="card-custome">
                <div class="card-photo transport-img-info">
                    <img src="img/car.png" alt="Item Name" class="img-fluid">
                </div>

                <div class="card-details">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <h3 class="item-name">Four Wheeler</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <div class="item-status">
                                <a href="#"><span class="icon available"><i class="fa fa-edit"></i></span></a>
                                <a href="#"><span class="icon delete-transport"><i class="fa fa-trash"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-xxl-3 col-lg-3 col-md-6 p-1">
            <div class="card-custome">
                <div class="card-photo transport-img-info">
                    <img src="img/track.png" alt="Item Name" class="img-fluid">
                </div>
                <div class="card-details">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <h3 class="item-name">Truck</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <div class="item-status">
                                <a href="#"><span class="icon available"><i class="fa fa-edit"></i></span></a>
                                <a href="#"><span class="icon delete-transport"><i class="fa fa-trash"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-xxl-3 col-lg-3 col-md-6 p-1">
            <div class="card-custome">
                <div class="card-photo transport-img-info">
                    <img src="img/train.png" alt="Item Name" class="img-fluid">
                </div>
                <div class="card-details">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <h3 class="item-name">Train</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <div class="item-status">
                                <a href="#"><span class="icon available"><i class="fa fa-edit"></i></span></a>
                                <a href="#"><span class="icon delete-transport"><i class="fa fa-trash"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xxl-3 col-xxl-3 col-lg-3 col-md-6 p-1">
            <div class="card-custome">
                <div class="card-photo transport-img-info">
                    <img src="img/plan.png" alt="Item Name" class="img-fluid">
                </div>

                <div class="card-details">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <h3 class="item-name">Airoplane</h3>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6 col-xs-6">
                            <div class="item-status">
                                <a href="#"><span class="icon available"><i class="fa fa-edit"></i></span></a>
                                <a href="#"><span class="icon delete-transport"><i class="fa fa-trash"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</ /?php endfor; ?>


<!-- <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav> -->


<?php include 'footer.php'; ?>


<!-- <script>
    // File upload js
    const form = document.getElementById("fileUploadForm"),
        fileInput = document.getElementById("chooseFileUpload"),
        progressArea = document.getElementById("progressArea"),
        uploadedArea = document.getElementById("uploadedArea");

    form.addEventListener("click", () => {
        fileInput.click();
    });

    fileInput.onchange = ({ target }) => {
        const files = target.files; // Get all selected files
        if (files.length > 0) {
            Array.from(files).forEach((file) => {
                let fileName = file.name;
                if (fileName.length >= 12) {
                    let splitName = fileName.split(".");
                    fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
                }
                uploadFile(fileName, file);
            });
        }
    };

    function uploadFile(name, file) {
        let xhr = new XMLHttpRequest();
        xhr.open("POST", "php/upload.php"); // Ensure you have the upload.php file handling the upload server-side

        xhr.upload.addEventListener("progress", ({ loaded, total }) => {
            let fileLoaded = Math.floor((loaded / total) * 100);
            let fileTotal = Math.floor(total / 1000);
            let fileSize =
                fileTotal < 1024
                    ? fileTotal + " KB"
                    : (loaded / (1024 * 1024)).toFixed(2) + " MB";

            let progressHTML = `<li class="row">
                  <i class="fas fa-file-alt"></i>
                  <div class="content">
                    <div class="details">
                      <span class="name">${name} • Uploading</span>
                      <span class="percent">${fileLoaded}%</span>
                    </div>
                    <div class="progress-bar">
                      <div class="progress" style="width: ${fileLoaded}%"></div>
                    </div>
                  </div>
                </li>`;
            uploadedArea.classList.add("onprogress");
            progressArea.innerHTML = progressHTML;

            if (loaded === total) {
                progressArea.innerHTML = "";
                let uploadedHTML = `<li class="row">
                <div class="content upload">
                <i class="fas fa-check"></i>
                      <i class="fas fa-file-alt"></i>
                      <div class="details">
                        <span class="name">${name} • Uploaded</span>
                        <span class="size">${fileSize}</span>
                        <i class="fas fa-trash delete-btn deletebtn-icons" onclick="deleteFile(this)"></i>
                      </div>
                    </div>
                  </li>`;
                uploadedArea.classList.remove("onprogress");
                uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML);
            }
        });

        let data = new FormData();
        data.append("file", file); // Append the specific file to the FormData object
        xhr.send(data);
    }

    function deleteFile(deleteIcon) {
        const listItem = deleteIcon.closest("li");
        listItem.remove();
        // Optional: Send a request to the server to delete the file
        // Example:
        // let xhr = new XMLHttpRequest();
        // xhr.open("POST", "php/delete.php");
        // let fileName = listItem.querySelector(".name").textContent.split(" • ")[0];
        // let data = new FormData();
        // data.append("fileName", fileName);
        // xhr.send(data);
    }
</script>

<script>
    document.getElementById('triggerButton').addEventListener('click', function () {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function () {
        const fileList = document.getElementById('fileList');
        fileList.innerHTML = '';  // Clear previous file list

        const files = this.files;
        for (let i = 0; i < files.length; i++) {
            const fileItem = document.createElement('div');
            fileItem.textContent = files[i].name;  // Display file name
            fileList.appendChild(fileItem);
        }
    });
</script> -->