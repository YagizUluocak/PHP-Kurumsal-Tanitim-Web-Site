<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
?>

<?php include "../inc/_header.php";?>
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
                            <h4 style="margin-bottom: 32px;">Yetenekler</h4>
                            <a href="yetenek-ekle.php" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>
                            <div class="table">
         
                                <table class="table text-center" style="margin-top: 20px;">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width:50px;">#</th>
                                            <th scope="col">Simgesi</th>
                                            <th scope="col">Yetenek Başlığı</th>
                                            <th scope="col">Açıklama</th>           
                                            <th scope="col" style="width:150px;">Düzenle</th>
                                            <th scope="col" style="width:150px;">Sil</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>2</td>
                                                    <td>3</td>
                                                    <td>4</td>
                                                    <td><a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td>
                                                    <td><a href="#" class="btn btn-danger btn-sm"><i class="fa fa-trash me-2"></i>Sil</a></td>
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