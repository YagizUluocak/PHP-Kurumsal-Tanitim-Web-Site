<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";

include "../inc/_header.php";


include "../controller/takim.controller.php";
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
                                <h5 style="color: black; margin-bottom:48px;">Takım Düzenle</h5>
        
                                <form method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                        <img class="img-fluid mb-3" style="width: 200px; display:block;" src="../../images/takim/<?php echo $veriIdGetir->takim_resim?>" alt="">
                                        <label for="takim_resim" class="form-label"><h6 style="color: black;">Resim</h6></label>
                                        <input type="file" class="form-control" id="takim_resim" name="takim_resim" value="<?php echo $veriIdGetir->takim_resim?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="takim_isim" class="form-label"><h6 style="color: black;">İsim Soyisim</h6></label>
                                        <input type="text" class="form-control" id="takim_isim" name="takim_isim" value="<?php echo $veriIdGetir->takim_isim?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="takim_gorev" class="form-label"> <h6 style="color: black;">Görevi</h6></label>
                                        <input type="text" class="form-control" id="takim_gorev" name="takim_gorev" value="<?php echo $veriIdGetir->takim_gorev?>">
                                    </div>
                                    <div class="mb-3">
                                            <label for="takim_durum" class="form-label"><h6 style="color: black;">Takım Durumu</h6></label>
                                            <select class="form-control" name="takim_durum" id="takim_durum">
                                                <option name="takim_durum" value="1">Göster</option>
                                                <option name="takim_durum" value="0">Gizle</option>
                                            </select>
                                        </div>
                                    <hr />
                                    <div class="mb-3">
                                        <label for="takim_twitter" class="form-label"><h6 style="color: black;">Twitter</h6></label>
                                        <input type="text" class="form-control" id="takim_twitter" name="takim_twitter" value="<?php echo $veriIdGetir->takim_twitter?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="takim_instagram" class="form-label"> <h6 style="color: black;">İnstagram</h6></label>
                                        <input type="text" class="form-control" id="takim_instagram" name="takim_instagram" value="<?php echo $veriIdGetir->takim_instagram?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="takim_linkedin" class="form-label"><h6 style="color: black;">Linkedin</h6></label>
                                        <input type="text" class="form-control" id="takim_linkedin" name="takim_linkedin" value="<?php echo $veriIdGetir->takim_linkedin?>">
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
    
            <!-- JavaScript Libraries -->
            <?php include "../inc/_scripts.php";?>
            <!-- JavaScript Libraries End -->  
    
    </body>
    </html>
   <?php
}

?>
