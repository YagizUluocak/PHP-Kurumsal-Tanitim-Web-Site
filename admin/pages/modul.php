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
                                    <h4 style="margin-bottom: 32px;">Modül</h4>
                                    <div class="table-responsive">
                                        <?php
                                        if($VeriGetir)
                                        {
                                        ?>
                                            <table class="table text-center" style="margin-top: 20px;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width:50px;">#</th>
                                                        <th scope="col">Modül Adı</th>
                                                        <th scope="col">Modül Durum</th>
                                                        <th scope="col" style="width:150px;">Düzenle</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                foreach($VeriGetir as $veri)
                                                {
                                                ?>
                                                    <tr class="text-center">
                                                        <th scope="row"><?php echo $veri->modul_id?></th>
                                                        <td><?php echo $veri->modul_ad?></td>
                                                        <td>
                                                            <?php 
                                                                if($veri->modul_durum == 1)
                                                                {
                                                                    echo "<p style = 'color:green;'>Göster</p>";
                                                                }
                                                                else
                                                                {
                                                                    echo "<p style = 'color:red;'>Gizli</p>";
                                                                }
                                                            ?>    
                                                        </td>
                                                        <td><a href="./modul-duzenle.php?modul_id=<?php echo $veri->modul_id?>&islem=mdlguncelle" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td>      
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
