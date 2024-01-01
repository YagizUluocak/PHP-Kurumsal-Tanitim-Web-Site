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
           <div class="row g-4 h-100" >
             <div class="col-sm-12 col-xl-12">
               <div class="col">
                 <div class="bg-light rounded p-4" style="height: 100%;">
                     <h6 class="mb-4">Yönetici Düzenle</h6>
                     <form method="POST" enctype="multipart/form-data">
                         <div class="mb-3">
                           <label for="yonetici_adsoyad" class="form-label"> <h6 style="color: black;">Ad Soyad</h6></label>
                           <input class="form-control bg-dark" type="text" id="yonetici_adsoyad" name="yonetici_adsoyad" value="<?php echo $veriIdGetir->yonetici_adsoyad ?>">
                         </div>
                         <div class="mb-3">
                           <label for="yonetici_mail" class="form-label"><h6 style="color: black;">Mail</h6></label>
                           <input type="text" class="form-control" id="yonetici_mail" name="yonetici_mail" value="<?php echo $veriIdGetir->yonetici_mail ?>">
                         </div>
                         <div class="mb-3">
                           <label for="yonetici_username" class="form-label"><h6 style="color: black;">Username</h6></label>
                           <input type="text" class="form-control" id="yonetici_username" name="yonetici_username" value="<?php echo $veriIdGetir->yonetici_username ?>">
                         </div>
                         <div class="mb-3">
                           <label for="yonetici_password" class="form-label"><h6 style="color: black;">Password</h6></label>
                           <input type="text" class="form-control" id="yonetici_password" name="yonetici_password" value="<?php echo $veriIdGetir->yonetici_password ?>">
                         </div>
                         <button type="submit" class="btn btn-success rounded-pill" name="submit">Kaydet</button>
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
   
  <?php
}

?>




<style>
    /* Style the Image Used to Trigger the Modal */
#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (Image) */
.modal-content {
  margin: auto;
  display: block;
  width: 100%;
  max-width: 700px;
}

/* Caption of Modal Image (Image Text) - Same Width as the Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation - Zoom in the Modal */
.modal-content, #caption {
  animation-name: zoom;
  animation-duration: 0.6s;
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 45px;
  right: 380px;
  color: white;
  font-size: 55px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}
</script>