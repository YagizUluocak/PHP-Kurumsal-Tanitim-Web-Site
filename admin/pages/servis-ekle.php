<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";

include "../inc/_header.php";


include "../controller/servis.controller.php";

?>

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
                            <div class="bg-light p-4" style="height: 100%;">
                                <h6 class="mb-4">Servis Ekle</h6>
                                <form method="POST" enctype="multipart/form-data" style="min-height:55vh;">
                                    <div class="mb-3">
                                        <label for="servis_resim" class="form-label"> <h6 style="color: black;">Servis Resim</h6> </label>
                                        <input class="form-control bg-dark" type="file" id="servis_resim" name="servis_resim">
                                    </div>
                                    <div class="mb-3">
                                        <label for="servis_ad" class="form-label"> <h6 style="color: black;">Servis Başlık</h6></label>
                                        <input type="text" class="form-control" id="servis_ad" name="servis_ad">
                                    </div>
                                    <div class="mb-3">
                                        <label for="servis_aciklama" class="form-label"><h6 style="color: black;">Servis Açıklama</h6></label>
                                        <input type="text" class="form-control" id="servis_aciklama" name="servis_aciklama">
                                    </div>
                                    <div class="mb-3">
                                        <label for="servis_durum" class="form-label"><h6 style="color: black;">Servis Durum</h6></label>
                                        <input type="number" class="form-control" id="servis_durum" name="servis_durum">
                                    </div>
                                        <button type="submit" class="btn btn-success rounded-pill" name="submit">Kaydet</button>
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