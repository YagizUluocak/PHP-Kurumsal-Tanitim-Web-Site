<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";

include "../inc/_header.php";


include "../controller/nedenbiz.controller.php";
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
                                <h4 style="margin-bottom: 32px;">Neden Biz</h4>
                                <a href="nedenbiz-ekle.php?islem=ndnEkle" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>
                                <div class="table">
                                    <?php
                                    if($VeriGetir)
                                    {
                                        ?>
                                        <table class="table text-center" style="margin-top: 20px;">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:50px;">#</th>
                                                    <th scope="col" style="width:130px;">Resim</th>
                                                    <th scope="col">Başlık</th>
                                                    <th scope="col">İçerik</th>
                                                    <th scope="col">Durum</th>           
                                                    <th scope="col" style="width:150px;">Düzenle</th>
                                                    <th scope="col" style="width:150px;">Sil</th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    <?php
                                                    foreach($VeriGetir as $veri)
                                                    {
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?php echo $veri->ndn_id?></th>
                                                            <td><img class="img-fluid" src="../../images/nedenbiz/<?php echo $veri->ndn_resim?>" alt=""></td>
                                                            <td><?php echo $veri->ndn_baslik?></td>
                                                            <td><?php echo substr($veri->ndn_icerik,0 ,90)?></td>
                                                            <td>
                                                            <?php 
                                                                if($veri->ndn_durum == 1)
                                                                {
                                                                    echo "<p style = 'color:green;'>Göster</p>";
                                                                }
                                                                else
                                                                {
                                                                    echo "<p style = 'color:red;'>Gizli</p>";
                                                                }
                                                            ?>
                                                            </td>
                                                            <td><a href="./nedenbiz-duzenle.php?ndn_id=<?php echo $veri->ndn_id ?>&islem=ndnGuncelle" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td>
                                                            <td><a href="./nedenbiz.php?ndn_id=<?php echo $veri->ndn_id ?>&islem=ndnSil" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>Sil</a></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                    ?>
                                                </tbody>
                                        </table>
                                        <?php
                                    }
                                    ?>
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
