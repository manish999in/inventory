
// chalan list scripts starts from here
document.addEventListener('DOMContentLoaded', () => {
    const sliderContainer = document.querySelector('.slider-container');
    const sliderRange = document.getElementById('sliderRange');
    const lowerThumb = document.getElementById('lowerThumb');
    const upperThumb = document.getElementById('upperThumb');
    const startDateLabel = document.getElementById('startDateLabel');
    const endDateLabel = document.getElementById('endDateLabel');
    const customStartDate = document.getElementById('customStartDate');
    const customEndDate = document.getElementById('customEndDate');

    const maxDays = 365;
    let lowerValue = 0;
    let upperValue = maxDays;

    function updateSlider() {
        const sliderWidth = sliderContainer.clientWidth;
        const lowerPercent = (lowerValue / maxDays) * 100;
        const upperPercent = (upperValue / maxDays) * 100;

        sliderRange.style.left = `${lowerPercent}%`;
        sliderRange.style.width = `${upperPercent - lowerPercent}%`;

        lowerThumb.style.left = `calc(${lowerPercent}% - ${lowerThumb.clientWidth / 2}px)`;
        upperThumb.style.left = `calc(${upperPercent}% - ${upperThumb.clientWidth / 2}px)`;

        updateDateLabels();
    }

    function updateDateLabels() {
        const startDate = new Date();
        startDate.setDate(startDate.getDate() - (maxDays - lowerValue));
        const endDate = new Date();
        endDate.setDate(endDate.getDate() - (maxDays - upperValue));

        startDateLabel.textContent = `Start Date: ${startDate.toISOString().split('T')[0]}`;
        endDateLabel.textContent = `End Date: ${endDate.toISOString().split('T')[0]}`;

        customStartDate.value = startDate.toISOString().split('T')[0];
        customEndDate.value = endDate.toISOString().split('T')[0];
    }

    function handleThumbDrag(event, isLowerThumb) {
        const rect = sliderContainer.getBoundingClientRect();
        const offsetX = event.clientX - rect.left;
        const percentage = Math.max(0, Math.min(1, offsetX / rect.width));
        const value = Math.round(percentage * maxDays);

        if (isLowerThumb) {
            lowerValue = Math.min(value, upperValue - 1);
        } else {
            upperValue = Math.max(value, lowerValue + 1);
        }

        updateSlider();
    }

    let isDraggingLower = false;
    let isDraggingUpper = false;

    lowerThumb.addEventListener('mousedown', () => {
        isDraggingLower = true;
    });

    upperThumb.addEventListener('mousedown', () => {
        isDraggingUpper = true;
    });

    document.addEventListener('mousemove', (event) => {
        if (isDraggingLower) {
            handleThumbDrag(event, true);
        }
        if (isDraggingUpper) {
            handleThumbDrag(event, false);
        }
    });

    document.addEventListener('mouseup', () => {
        isDraggingLower = false;
        isDraggingUpper = false;
    });

    // Sync custom date inputs with the slider
    customStartDate.addEventListener('change', () => {
        const startDate = new Date(customStartDate.value);
        lowerValue = maxDays - Math.floor((startDate - new Date(new Date().setDate(new Date().getDate() - maxDays))) / (1000 * 60 * 60 * 24));
        updateSlider();
    });

    customEndDate.addEventListener('change', () => {
        const endDate = new Date(customEndDate.value);
        upperValue = maxDays - Math.floor((endDate - new Date(new Date().setDate(new Date().getDate() - maxDays))) / (1000 * 60 * 60 * 24));
        updateSlider();
    });

    // Clear filters
    document.querySelector('.clearFilter').addEventListener('click', () => {
        document.querySelectorAll('.filter-sidebar input[type="checkbox"]').forEach(checkbox => {
            checkbox.checked = false;
        });

        lowerValue = 0;
        upperValue = maxDays;

        customStartDate.value = new Date(new Date().setDate(new Date().getDate() - maxDays)).toISOString().split('T')[0];
        customEndDate.value = new Date().toISOString().split('T')[0];

        updateSlider();
        applyFilters();
    });

    function applyFilters() {
        // Implement filter application logic here
    }

    updateSlider();
});

// challan list script end  here

  


// index scripts starts from here

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





                    //  index javascript ends here






        //   product page javascript starts from here

 // Quantity Button Functionality
//  const minusBtns = document.querySelectorAll('.minus-btn');
//  const plusBtns = document.querySelectorAll('.plus-btn');

//  minusBtns.forEach(btn => {
//      btn.addEventListener('click', (e) => {
//          const input = e.target.nextElementSibling;
//          if (input.value > 1) {
//              input.value = parseInt(input.value) - 1;
//          }
//      });
//  });

//  plusBtns.forEach(btn => {
//      btn.addEventListener('click', (e) => {
//          const input = e.target.previousElementSibling;
//          input.value = parseInt(input.value) + 1;
//      });
//  });

  //   product page javascript end from here








//   selection page javascript start from here
   // Quantity Button Functionality
   const minusBtns = document.querySelectorAll('.minus-btn');
   const plusBtns = document.querySelectorAll('.plus-btn');

   minusBtns.forEach(btn => {
       btn.addEventListener('click', (e) => {
           const input = e.target.nextElementSibling;
           if (input.value > 1) {
               input.value = parseInt(input.value) - 1;
           }
       });
   });

   plusBtns.forEach(btn => {
       btn.addEventListener('click', (e) => {
           const input = e.target.previousElementSibling;
           input.value = parseInt(input.value) + 1;
       });
   });

   //   selection page javascript end from here





  
   

  