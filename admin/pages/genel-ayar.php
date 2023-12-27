<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
?>


<?php include "../inc/_header.php";?>
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
                    <div class="row g-4 h-100" >
                        <div class="col-sm-12 col-xl-12">
                            <div class="col">
                                <div class="bg-light rounded p-4" style="height: 100%;">
                                    <h4 class="mb-4">Genel Ayarlar</h4>
          
                                    <form method="POST"  enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <img class="img-fluid d-block mb-4" style="width: 200px;" src="#" alt="">
                                            <label for="txt_1" class="form-label"><h6 style="color: black;">Resim</h6></label>
                                            <input type="file" name="ayar_resim" id="ayar_resim">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ayar_isim" class="form-label"> <h6 style="color: black;">İsim</h6></label>
                                            <input type="text" class="form-control" id="ayar_isim" name="ayar_isim" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="ayar_meslek" class="form-label"> <h6 style="color: black;">Meslek</h6></label>
                                            <input type="text" class="form-control" id="ayar_meslek" name="ayar_meslek">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ayar_tel" class="form-label"> <h6 style="color: black;">Telefon</h6></label>
                                            <input type="text" class="form-control" id="ayar_tel" name="ayar_tel">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ayar_mail" class="form-label"> <h6 style="color: black;">Mail</h6></label>
                                            <input type="text" class="form-control" id="ayar_mail" name="ayar_mail">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ayar_adres" class="form-label"> <h6 style="color: black;">Adres</h6></label>
                                            <input type="text" class="form-control" id="ayar_adres" name="ayar_adres">
                                        </div>
                                            <button type="submit" class="btn btn-success rounded-pill" name="submit">Güncelle</button>
                                    </form>
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