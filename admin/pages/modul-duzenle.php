<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";

include "../inc/_header.php";


include "../controller/modul.controller.php";
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
                        <div class="row g-4" style="min-height: 70vh;">
                            <div class="col-sm-12 col-xl-12">
                                <div class="bg-light rounded h-100 p-4" >
                                    <h6 class="mb-4">Modül Düzenle</h6>
                
                                    <form method="POST">
                                        
                                        <div class="mb-3">
                                                <label for="modul_ad" class="form-label"> <h6 style="color: black;">Modül Adı</h6></label>
                                                <input type="text" class="form-control" id="modul_ad" name="modul_ad" value="<?php echo $veriIdGetir->modul_ad?>" readonly>
                                        </div>
                                        <div class="mb-3">
                                            <label for="modul_durum" class="form-label"><h6 style="color: black;">Takım Durumu</h6></label>
                                            <select class="form-control" name="modul_durum" id="modul_durum">
                                                <option name="modul_durum" value="1">Göster</option>
                                                <option name="modul_durum" value="0">Gizle</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-success rounded-pill" name="submit">Güncelle</button>
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

            <!-- JavaScript Libraries Start -->
            <?php include "../inc/_scripts.php";?>
            <!-- JavaScript Libraries End -->  
        </body>

        </html>
    <?php
    
}

?>

