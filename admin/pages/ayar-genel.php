<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";

include "../inc/_header.php";


include "../controller/ayar.controller.php";
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
            
                                        <form method="POST"  enctype="multipart/form-data">
                                            <h4 class="card-title">Logo Ayarları</h4>
                                            <div class="card bg-secondary">

                                                <div class="card-body">   
                                                    <div class="row mb-4" style="display: flex; justify-content:space-between; ">

                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label for="ayar_logo" class="form-label"><h6 style="color: white;">Logo</h6></label>
                                                                <img class="img-fluid d-block mb-4" style="width: 200px; height:100px;" src="../../images/ayar/logo/<?php echo $veriIdGetir->ayar_logo?>" alt="">
                                                                <input type="file" class="form-control" name="ayar_logo" id="ayar_logo">
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label for="ayar_favicon" class="form-label"><h6 style="color: white;">Favicon</h6></label>
                                                                <img class="img-fluid d-block mb-4" style="width: 100px; height:100px;" src="../../images/ayar/favicon/<?php echo $veriIdGetir->ayar_favicon?>" alt="">
                                                                <input type="file" class="form-control" id="ayar_favicon" name="ayar_favicon" >
                                                            </div>
                                                        </div> 

                                                    </div>
                                                </div>  

                                            </div>


                                            <h4 class="card-title mt-4">İletişim Ayarları</h4>
                                            <div class="card bg-secondary">
                                                <div class="card-body">

                                                    <div class="row mb-4" style="display: flex; justify-content:space-between; ">

                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label for="ayar_telefon" class="form-label"> <h6 style="color: white;">Telefon</h6></label>
                                                                <input type="text" class="form-control bg-white" id="ayar_telefon" name="ayar_telefon" value="<?php echo $veriIdGetir->ayar_telefon ?>">
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <div class="mb-3">
                                                                <label for="ayar_mail" class="form-label"> <h6 style="color: white;">Mail</h6></label>
                                                                <input type="text" class="form-control bg-white" id="ayar_mail" name="ayar_mail" value="<?php echo $veriIdGetir->ayar_mail ?>">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    
                                                    <div class="row mb-4"> 
                                                        <div class="col-12">
                                                            <div class="mb-3">
                                                                <label for="ayar_adres" class="form-label"> <h6 style="color: white;">Adres</h6></label>
                                                                <textarea name="ayar_adres" class="form-control bg-white" style="height: 80px; resize: none;"><?php echo $veriIdGetir->ayar_adres ?></textarea>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>    
                                            </div>

                                            <h4 class="card-title mt-4">Site Ayar</h4>
                                            <div class="card bg-secondary">
                                                <div class="card-body">
                                                    
                                                    <div class="mb-3">
                                                        <label for="ayar_description" class="form-label"> <h6 style="color: white;">Description</h6></label>
                                                        <textarea name="ayar_description" class="form-control bg-white" style="height: 120px; resize: none;"><?php echo $veriIdGetir->ayar_description?></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="ayar_keywords" class="form-label"> <h6 style="color: white;">Keywords</h6></label>
                                                        <input type="text" class="form-control bg-white" id="ayar_keywords" name="ayar_keywords" value="<?php echo $veriIdGetir->ayar_keywords?>">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="ayar_copyright" class="form-label"> <h6 style="color: white;">Copyright</h6></label>
                                                        <input type="text" class="form-control bg-white" id="ayar_copyright" name="ayar_copyright" value="<?php echo $veriIdGetir->ayar_copyright?>">
                                                    </div>

                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success rounded-pill mt-2" name="submit">Güncelle</button>

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

    <?php 
}

?>


