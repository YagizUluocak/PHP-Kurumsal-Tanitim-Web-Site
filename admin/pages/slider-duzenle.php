<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";

include "../controller/slider.controller.php";
session_start();
?>

<?php
if(!isset($_SESSION["yonetici_username"]))
{
    header("location:login.php");
}
else
{
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
                                        <h6 class="mb-4">Slider Düzenle</h6>
                    
                                        <form method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <img class="img-fluid mb-3" style="width: 200px; display:block;" src="../../images/slider/<?php echo $veriIdGetir->slider_resim?>" alt="">
                                                <label for="slider_resim" class="form-label "><h6 style="color: black; ">Slider Resim</h6></label>
                                                <input type="file" class="form-control" id="slider_resim" name="slider_resim">
                                            </div>
                                            <div class="mb-3">
                                                <label for="slider_baslik" class="form-label"> <h6 style="color: black;">Slider Başlık</h6></label>
                                                <input type="text" class="form-control" id="slider_baslik" name="slider_baslik" value="<?php echo $veriIdGetir->slider_baslik ?>">
                                            </div>
                                            <div class="mb-3">
                                                <label for="slider_aciklama" class="form-label"><h6 style="color: black;">Slider Açıklama</h6></label>
                                                <textarea class="form-control" name="slider_aciklama" id="slider_aciklama" style="min-height: 150px;"><?php echo $veriIdGetir->slider_aciklama ?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="slider_durum" class="form-label"><h6 style="color: black;">Slider Durumu</h6></label>
                                                <select class="form-control" name="slider_durum" id="slider_durum">
                                                    <option name="slider_durum" value="1">Göster</option>
                                                    <option name="slider_durum" value="0">Gizle</option>
                                                </select>
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

    <?php
}

?>
