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
                            <h4 style="margin-bottom: 32px;">Referanslar</h4>
                            <a href="referans-ekle.php" class="btn btn-success mb-2"><i class="fa fa-plus me-2"></i>Yeni Ekle</a>
                            <div class="table-responsive">
                                <table class="table text-center" style="margin-top: 20px;">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width:50px;">#</th>
                                            <th scope="col" style="width:140px;">Resim</th>
                                            <th scope="col" style="width:120px;">Başlık</th>
                                            <th scope="col" style="width:130px;">Url</th>
                                            <th scope="col" style="width:100px;">Düzenle</th>
                                            <th scope="col" style="width:100px;">SiL</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td><img class="img-fluid" src="#" alt="">2</td>
                                                    <td>3</td>
                                                    <td>4</td>
                                                    <td><a href="#" class="btn btn-warning btn-sm"><i class="fa fa-pen me-2"></i>Düzenle</a></td> 
                                                    <td><a href="#" class="btn btn-danger mb-2"><i class="fa fa-trash me-2"></i>Sil</a></td>                
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