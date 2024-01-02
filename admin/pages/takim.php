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
        <div class="container-fluid position-relative d-flex p-0">,
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
                                <h4 style="margin-bottom: 32px;">Takım</h4>
                                <a href="takim-ekle.php?islem=takimekle" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>
                                <div class="table-responsive">
                                    <?php
                                    if($VeriGetir)
                                    {
                                    ?>
                                        <table class="table text-center" style="margin-top: 20px;">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:50px;">#</th>
                                                    <th scope="col" style="width:100px;">Resim</th>
                                                    <th scope="col">İsim</th>
                                                    <th scope="col">Görev</th>
                                                    <th scope="col">Durum</th>
                                                    <th scope="col" style="width:150px;">Düzenle</th>
                                                    <th scope="col" style="width:150px;">Sil</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            foreach($VeriGetir as $veri)
                                            {
                                            ?>
                                                <tr class="text-center">
                                                    <th scope="row"><?php echo $veri->takim_id?></th>
                                                    <td><img class="img-fluid" src="../../images/takim/<?php echo $veri->takim_resim?>" alt=""></td>
                                                    <td><?php echo $veri->takim_isim?></td>
                                                    <td><?php echo $veri->takim_gorev?></td>
                                                    <td>
                                                    <?php 
                                                        if($veri->takim_durum == 1)
                                                        {
                                                            echo "<p style = 'color:green;'>Göster</p>";
                                                        }
                                                        else
                                                        {
                                                            echo "<p style = 'color:red;'>Gizli</p>";
                                                        }
                                                    ?>
                                                    </td>
                                                    <td><a href="./takim-duzenle.php?takim_id=<?php echo $veri->takim_id?>&islem=takimguncelle" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td>
                                                    <td><a href="takim.php?takim_id=<?php echo $veri->takim_id?>&islem=takimsil" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>Sil</a></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
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
