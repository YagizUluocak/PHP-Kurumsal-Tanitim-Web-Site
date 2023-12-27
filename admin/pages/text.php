<?php
require_once('../classes/db.class.php');
include "../classes/functions.class.php";
include "../inc/_header.php";
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
                            <h6 class="mb-4">Text Alanları</h6>          
                            <form method="POST">
                                <div class="mb-3">
                                    <label for="txt_1" class="form-label"> <h6 style="color: black;">Txt_1</h6></label>
                                    <input type="text" class="form-control" id="txt_1" name="txt_1" >
                                </div>
                                <div class="mb-3">
                                    <label for="txt_2" class="form-label"> <h6 style="color: black;">Txt_2</h6></label>
                                    <input type="text" class="form-control" id="txt_2" name="txt_2">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_3" class="form-label"> <h6 style="color: black;">Txt_3</h6></label>
                                    <input type="text" class="form-control" id="txt_3" name="txt_3">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_4" class="form-label"> <h6 style="color: black;">Txt_4</h6></label>
                                    <input type="text" class="form-control" id="txt_4" name="txt_4">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_5" class="form-label"> <h6 style="color: black;">Txt_5</h6></label>
                                    <input type="text" class="form-control" id="txt_5" name="txt_5">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_6" class="form-label"> <h6 style="color: black;">Txt_6</h6></label>
                                    <input type="text" class="form-control" id="txt_6" name="txt_6">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_7" class="form-label"> <h6 style="color: black;">Txt_7</h6></label>
                                    <input type="text" class="form-control" id="txt_7" name="txt_7">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_8" class="form-label"> <h6 style="color: black;">Txt_8</h6></label>
                                    <input type="text" class="form-control" id="txt_8" name="txt_8">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_9" class="form-label"> <h6 style="color: black;">Txt_9</h6></label>
                                    <input type="text" class="form-control" id="txt_9" name="txt_9">
                                </div>
                                <div class="mb-3">
                                    <label for="txt_10" class="form-label"> <h6 style="color: black;">Txt_10</h6></label>
                                    <input type="text" class="form-control" id="txt_10" name="txt_10">
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