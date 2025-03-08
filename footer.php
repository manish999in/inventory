




</aside>
</div>
<div class="footer_bottom">
     <footer class="site-footer">
				<div class="text-center">
					INVENTORY PORTAL <span style="color:#e99803; font-weight:700"> <a href="manish999.in">Manish </a> </span>
					 <!-- <NavLink to="#" class="go-top">
						<i class="fa fa-angle-up"></i>
					</NavLink>  -->
				</div>
			</footer>
    </div>

    <script src="js/script.js"></script>
<script>
    let arrow = document.querySelectorAll(".arrow");
    for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement; // selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
        });
    }

    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".fa-bars");
    let oneElement = document.querySelector(".one"); // The element to be styled when sidebar is open

    sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");

        // Toggle the class on the oneElement based on the sidebar's status
        if (sidebar.classList.contains("close")) {
            oneElement.style.marginLeft = "0px";  // Adjust margin when sidebar is closed
        } else {
            oneElement.style.marginLeft = "260px";  // Adjust margin when sidebar is open
        }
    });
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


</script>


</body>

</html>