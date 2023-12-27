<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
?>

<?php
include "../inc/_header.php";
?>



<body>
    <div class="container-fluid position-relative d-flex p-0">
            <!-- Sidebar Start -->
            <?php include "../inc/_sidebar.php";?>
            <!-- Sidebar End -->
            <div class="content">
                <!-- Navbar Start -->
                <?php include "../inc/_navbar.php";?>
                <!-- Navbar End -->
                <div class="container-fluid pt-4 px-4" >
                    <div class="col-sm-12 col-xl-12">
                        <div class="col">
                            <div class="bg-light rounded h-100vh p-4" style="min-height: 68vh;">
                                <h6 class="mb-4">Yönetici Düzenle</h6>
               
                                <form method="POST">
                                    <div class="mb-3">
                                        <label for="ad" class="form-label"> <h6 style="color: black;">Yönetici Ad</h6></label>
                                        <input type="text" class="form-control" id="ad" name="ad">
                                    </div>
                                    <div class="mb-3">
                                        <label for="username" class="form-label"><h6 style="color: black;">Yönetici Username</h6></label>
                                        <input type="text" class="form-control" id="username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label"><h6 style="color: black;">Yönetici Password</h6></label>
                                        <input type="text" class="form-control" id="password" name="password">
                                    </div>
                                        <button type="submit" class="btn btn-success rounded-pill" name="submit">Kaydet</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Start -->
                <?php include "../inc/_footer.php";?>
                <!-- Footer End -->
            </div>
           
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top">
            <i class="bi bi-arrow-up"></i>
        </a>   
    </div>

    <!-- JavaScript Libraries -->
    <?php include "../inc/_scripts.php";?>
    <!-- JavaScript Libraries End -->                                     
</body>
</html>