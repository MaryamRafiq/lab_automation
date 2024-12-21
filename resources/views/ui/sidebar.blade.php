 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3 ">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <div class="text-primary m-2 pr-4 mt-4 mb-3"><img src="img/logo6.png" style="width: 400px; height:40px; margin-left: -5px" alt=""></div>
            
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">LabTech</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="index.html" class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2" style="background-color: transparent"></i>Dashboard</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-user" style="background-color:transparent"></i>Users</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <ul>
                   <li> <a href="button.html" class="dropdown-item">All Users</a></li>
                    <li><a href="typography.html" class="dropdown-item">Add User</a></li>
                
                    </ul>
                </div>

            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-boxes-stacked" style="background-color: transparent"></i> Categories</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <ul>
                    <li><a href="button.html" class="dropdown-item">All Categories</a></li>
                  <li>  <a href="typography.html" class="dropdown-item">Add Category</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-box" style="background-color: transparent"></i>Products</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <ul>
                    <li><a href="button.html" class="dropdown-item">All Products</a></li>
                   <li> <a href="typography.html" class="dropdown-item">Add Product</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-microscope" style="background-color: transparent"></i>Testings</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <ul>
                    <li><a href="button.html" class="dropdown-item"> Testing list</a></li>
                    <li><a href="typography.html" class="dropdown-item">Add Testing</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2" style="background-color: transparent"></i>Reports</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <ul>
                  <li>  <a href="/allreports" class="dropdown-item">All Reports</a></li>
                    <li><a href="/generatereport" class="dropdown-item">Generate Report</a></li>
                    </ul>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa-solid fa-list" style="background-color: transparent"></i>Pages</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <ul>
                    <li><a href="/login" class="dropdown-item">Login</a></li>
                    <li><a href="/signup" class="dropdown-item">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<!-- Sidebar End -->