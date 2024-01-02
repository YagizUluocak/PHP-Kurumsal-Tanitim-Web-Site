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

                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4" style="height: 70vh;">
                            <div class="col-sm-12 col-xl-12">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h4 style="margin-bottom: 32px;">Slider</h4>
                                        <a href="slider-ekle.php?islem=SliderEkle" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>
                                    <div class="table">
                
                                        <table class="table text-center" style="margin-top: 20px;">
                                        <?php
                                        if($VeriGetir){
                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width:50px;">#</th>
                                                        <th scope="col" style="width:150px;">Slider Resim</th>
                                                        <th scope="col">Slider Başlık</th>
                                                        <th scope="col">Slider Durum</th>
                                                        <th scope="col" style="width:150px;">Düzenle</th>
                                                        <th scope="col" style="width:150px;">Sil</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        foreach($VeriGetir as $veri){
                                                            ?>
                                                                <tr>
                                                                    <th scope="row"><?php echo $veri->slider_id?></th>
                                                                    <td><img class="img-fluid" src="../../images/slider/<?php echo $veri->slider_resim?>" alt=""></td>
                                                                    <td><?php echo $veri->slider_baslik?></td>
                                                                    <td>
                                                                    <?php 
                                                                        if($veri->slider_durum == 1)
                                                                        {
                                                                            echo "<p style = 'color:green;'>Göster</p>";
                                                                        }
                                                                        else
                                                                        {
                                                                        echo "<p style = 'color:red;'>Gizli</p>";
                                                                        }
                                                                    ?>
                                                                    </td>
                                                                    <td><a href="./slider-duzenle.php?slider_id=<?php echo $veri->slider_id?>&islem=SliderGuncelle" class="btn btn-warning btn-sm" name = "guncelle"><i class="fa fa-pen me-2"></i>Düzenle</a></td>
                                                                    <td><a href="./slider.php?slider_id=<?php echo $veri->slider_id?>&islem=sliderSil" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>Sil</a></td>
                                                                </tr>
                                                            <?php
                                                        }?>
                                                </tbody>
                                            <?php
                                        }?>
                                        </table>
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
