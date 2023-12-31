<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
?>

<?php include "../inc/_header.php";?>

<body>
<div class="container-fluid position-relative d-flex p-0" style="background-color: white; height: 100%;">
    <!-- Sidebar Start -->
    <?php include "../inc/_sidebar.php";?>
    <!-- Sidebar End -->

    <div class="content">
        <!-- Navbar Start -->
        <?php include "../inc/_navbar.php";?>
        <!-- Navbar End -->

        <div class="container-fluid pt-4 px-4">
            <div class="row g-4 h-100" >
                <div class="col-sm-12 col-xl-12">
                    <div class="col">
                        <div class="bg-light rounded p-4" style="height: 100%;">
                            <h6 class="mb-4">Sosyal Medya Ayarları</h6>
        
                            <form method="POST" style="min-height: 55vh;">
                                <div class="mb-3">
                                    <label for="ayar_linkedin" class="form-label"> <h6 style="color: black;">Linkedin</h6></label>
                                    <input type="text" class="form-control" id="ayar_linkedin" name="ayar_linkedin">
                                </div>
                                <div class="mb-3">
                                    <label for="ayar_instagram" class="form-label"> <h6 style="color: black;">İnstagram</h6></label>
                                    <input type="text" class="form-control" id="ayar_instagram" name="ayar_instagram">
                                </div>
                                <div class="mb-3">
                                    <label for="ayar_github" class="form-label"> <h6 style="color: black;">Github</h6></label>
                                    <input type="text" class="form-control" id="ayar_github" name="ayar_github">
                                </div>
                                    <button type="submit" class="btn btn-success rounded-pill" name="submit">Güncelle</button>
                            </form>
                        </div>
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