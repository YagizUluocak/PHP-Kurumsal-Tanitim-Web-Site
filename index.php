<?php
require_once('./admin/classes/db.class.php');
include "./admin/classes/functions.class.php";

include "./classes/veri.classes.php";
include "./inc/_head.php";
?>
<?php

 $veri = new VeriGetir();
 $verigetir = $veri->sliderGetir();

 $servisgetir = $veri->servisGetir();
 $hakkimizdagetir = $veri->hakkimizdaGetir();
 $nedenbizgetir = $veri->nedenbizGetir();
 $takimgetir = $veri->takimGetir();
 $ayargetir = $veri->ayarGetir();
?>

<body>

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <?php include "./inc/_navbar.php";?>
    <!-- end header section -->
    
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          
          <?php

            foreach($verigetir as $slid)
            {
              ?>
                <div class="carousel-item active" style="min-height: 100%; max-height:100%;">
                  <div class="container ">
                    <div class="row">
                      <div class="col-6">
                        <div class="detail-box">
                          <h1><?php echo $slid->slider_baslik?></h1>
                          <p style="width: 100%;"><?php echo $slid->slider_aciklama?></p>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="img-box">
                          <img class="img-fluid" src="images/slider/<?php echo $slid->slider_resim?>" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }

          ?>


        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <?php
  $servis = new Servis();
  $servismodul = $servis->servisModul();
  if($servismodul)
  {
    ?>
    <!-- service section -->
    <section class="service_section layout_padding">
      <div class="service_container">
        <div class="container ">
          <div class="heading_container heading_center">
            <h2>
              <span>Servislerimiz</span>
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
            </p>
          </div>
          <div class="row">
          <?php
          foreach($servisgetir as $servis)
          {
            ?>
              <div class="col-md-4 ">
                <div class="box ">
                  <div class="img-box">
                    <img src="./images/servis/<?php echo $servis->servis_resim?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?php echo $servis->servis_ad?> 
                    </h5>
                    <p>
                    <?php echo $servis->servis_aciklama?>
                    </p>
                  </div>
                </div>
              </div>
            <?php
          }
          ?>
          </div>

        </div>
      </div>
    </section>
    <!-- end service section -->
    <?php
  }
  else
  {
    $bg = "white";
    $color = "black";
  }
  ?>

<?php
  $hakkimizda = new Hakkimizda();
  $hakkimizdamodul = $hakkimizda->hakkimizdaModul();
  if($hakkimizdamodul)
  {
    ?>
      <!-- about section -->
      <section class="about_section layout_padding" style="background-color: <?php echo $bg?>;color:<?php echo $color?>">
        <div class="container  ">
          <div class="heading_container heading_center">
            <h2>
              <span>Hakkımızda</span>
            </h2>
            <p>
               illum quisquam aspernatur ullam vel beatae rerum ipsum voluptatibus
            </p>
          </div>
          <div class="row">
            <div class="col-md-6 ">
              <div class="img-box">
                <img src="images/about-img.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-box">
                <h3>
                <?php echo $hakkimizdagetir->hakkimizda_baslik ?>
                </h3>
                <p>
                  <?php echo $hakkimizdagetir->hakkimizda_icerik ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end about section -->
    <?php
  }
  else
  {
    $bg = "#00204a";
    $color = "white";
  }
?>

  <?php
  $nedenbiz = new NedenBiz();
  $nedenbizModul = $nedenbiz->nedenbizModul();
  if($nedenbizModul)
  {
    ?>
      <!-- why section -->
      <section class="why_section layout_padding" style="background-color: <?php echo $bg?>;color:<?php echo $color?>">
        <div class="container">
          <div class="heading_container heading_center">
            <h2>
              Neden <span>Biz</span>
            </h2>
          </div>
          <div class="why_container">

            <?php
            foreach($nedenbizgetir as $ndn)
            {
              ?>
                <div class="box">
                  <div class="img-box">
                    <img src="./images/nedenbiz/<?php echo $ndn->ndn_resim?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?php echo $ndn->ndn_baslik?>
                    </h5>
                    <p>
                      <?php echo $ndn->ndn_icerik?>
                    </p>
                  </div>
                </div>
              <?php
            }
            ?>

          </div>
        </div>
      </section>
      <!-- end why section -->
    <?php
  }
  else
  {
    $bg = "white";
    $color = "white";
  }

  ?>
  <?php
  $takim = new Takim();
  $takimModul = $takim->takimModul();
  if($takimModul)
  {
    ?>
      <!-- team section -->
      <section class="team_section layout_padding">
        <div class="container-fluid">
          <div class="heading_container heading_center">
            <h2 class="">
              <span>Takım</span>
            </h2>
          </div>

          <div class="team_container">
            <div class="row">
              <?php
              foreach($takimgetir as $takim)
              {
              ?>
                <div class="col-lg-3 col-sm-6">
                  <div class="box ">
                    <div class="img-box">
                      <img src="./images/takim/<?php echo $takim->takim_resim?>" class="img1" alt="">
                    </div>
                    <div class="detail-box">
                      <h5>
                        <?php echo $takim->takim_isim?>
                      </h5>
                      <p>
                        <?php echo $takim->takim_gorev?>
                      </p>
                    </div>
                    <div class="social_box">
                      <a href="<?php echo $takim->takim_twitter?>" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                      </a>
                      <a href="<?php echo $takim->takim_instagram?>" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                      </a>
                      <a href="<?php echo $takim->takim_linkedin?>" target="_blank">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                      </a>
                    </div>
                  </div>
                </div>

              <?php
              }
              ?>




            </div>
          </div>
        </div>
      </section>
      <!-- end team section -->  
    <?php
  }
  else
  {
    $bg = "#00204a";
    $color = "white";
  }

  ?>




  <?php include "./inc/_footer.php";