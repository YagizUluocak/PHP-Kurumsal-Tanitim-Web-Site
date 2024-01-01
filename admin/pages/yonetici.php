<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";

include "../inc/_header.php";

include "../controller/yonetici.controller.php";

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
                                    <h4 style="margin-bottom: 32px;">Yöneticiler</h4>
                                    <a href="yonetici-ekle.php?islem=yoneticiEkle" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>
                                    <div class="table">
                                        <?php
                                        if($VeriGetir)
                                        {
                                            ?>
                                            <table class="table text-center" style="margin-top: 20px;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width:50px;">#</th>
                                                        <th scope="col" style="width:250px;">Ad Soyad</th>
                                                        <th scope="col">Mail</th>
                                                        <th scope="col">Username</th>        
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
                                                                <th scope="row"><?php echo $veri->yonetici_id?></th>
                                                                <td><?php echo $veri->yonetici_adsoyad?></td>
                                                                <td><?php echo $veri->yonetici_mail?></td>
                                                                <td><?php echo $veri->yonetici_username?></td>
                                                                <td><a href="./yonetici-duzenle.php?yonetici_id=<?php echo $veri->yonetici_id ?>&islem=yoneticiGuncelle" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td>
                                                                <td><a href="./yonetici.php?yonetici_id=<?php echo $veri->yonetici_id ?>&islem=yoneticiSil" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>Sil</a></td>
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
