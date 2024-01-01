<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
?>




<?php include "../inc/_header.php";
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
                        <div class="row g-4" style="min-height: 70vh;">
                            <div class="col-sm-12 col-xl-12">
                                <div class="bg-secondary rounded h-100 p-4">
                                    <h4 style="margin-bottom: 32px;">Menüler</h4>
                                    <div class="table-responsive">
                                        <table class="table text-center" style="margin-top: 20px;">
                                            <thead>
                                                <tr>
                                                    <th scope="col" style="width:50px;">#</th>
                                                    <th scope="col" style="width:120px;">Menü Adı</th>
                                                    <th scope="col" style="width:130px;">Url</th>
                                                    <th scope="col" style="width:100px;">Düzenle</th>
                                                </tr>
                                            </thead>
                                                <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>                
                                                            <td>2</td>
                                                            <td>3</td>
                                                            <td><a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td>                                               
                                                        </tr>
                                                </tbody>
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

