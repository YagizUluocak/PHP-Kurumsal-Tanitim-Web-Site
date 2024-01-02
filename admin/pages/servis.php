<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";



include "../controller/servis.controller.php";

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
                    <div class="row g-4" style="min-height: 90vh;">
                        <div class="col-sm-12 col-xl-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h4 style="margin-bottom: 32px;">Servisler</h4>
                                <a href="servis-ekle.php?islem=ServisEkle" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>
                                <div class="table-responsive">
                                    <table class="table text-center" style="margin-top: 20px;">
                                        <?php
                                        if($VeriGetir)
                                        {
                                        ?>
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width:50px;">#</th>
                                                        <th scope="col" style="width:140px;">Resim</th>
                                                        <th scope="col" style="width:120px;">Başlık</th>
                                                        <th scope="col" style="width:130px;">Açıklama</th>
                                                        <th scope="col" style="width:130px;">Durum</th>
                                                        <th scope="col" style="width:100px;">Düzenle</th>
                                                        <th scope="col" style="width:100px;">SiL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($VeriGetir as $veri)
                                                    {
                                                        ?>
                                                            <tr>
                                                                <th scope="row"><?php echo $veri->servis_id?></th>
                                                                <td><img class="img-fluid" src="../../images/servis/<?php echo $veri->servis_resim?>" style ="height:80px;"></td>
                                                                <td><?php echo $veri->servis_ad?></td>
                                                                <td><?php echo substr($veri->servis_aciklama, 0,50)?></td>
                                                                <td><?php 
                                                                if($veri->servis_durum == 1)
                                                                {
                                                                    echo "<p style = 'color:green;'>Göster</p>";
                                                                }
                                                                else
                                                                {
                                                                    echo "<p style = 'color:red;'>Gizli</p>";
                                                                }
                                                                    ?></td>
                                                                <td><a href="./servis-duzenle.php?servis_id=<?php echo $veri->servis_id?>&islem=ServisGuncelle" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td> 
                                                                <td><a href="./servis.php?servis_id=<?php echo $veri->servis_id?>&islem=ServisSil" class="btn btn-danger mb-2"><i class="fa fa-trash me-2"></i>Sil</a></td>                
                                                            </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                        <?php
                                        }
                                        ?>    
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

