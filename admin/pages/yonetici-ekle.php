<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
?>
<?php include "../inc/_header.php";?>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") 
{
    $slider = new Slider();
    $slider->sliderEkle();   
}
?>

<body>
<div class="container-fluid position-relative d-flex p-0 ">
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
            <div class="bg-light rounded h-100vh p-4" style="height: 100%;">
                <h5 class="mb-4">Yönetici Ekle</h5>
                <form method="POST" style="min-height: 55vh;">
                    <div class="mb-3">
                        <label for="slider_baslik" class="form-label"> <h6 style="color: black;">slider_baslik</h6></label>
                        <input type="text" class="form-control" id="slider_baslik" name="slider_baslik">
                    </div>
                    <div class="mb-3">
                        <label for="slider_aciklama" class="form-label"><h6 style="color: black;">slider_aciklama</h6></label>
                        <input type="text" class="form-control" id="slider_aciklama" name="slider_aciklama">
                    </div>
                    <div class="mb-3">
                        <label for="slider_durum" class="form-label"><h6 style="color: black;">slider_durum</h6></label>
                        <input type="number" class="form-control" id="slider_durum" name="slider_durum">
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