<!-- info section -->
<section class="info_section layout_padding2">
    
    <div class="container">
      <div class="row">

        <div class="col-md-6 col-lg-6 info_col">
          <?php 
            $hakkmizda_metin = $hakkimizdagetir->hakkimizda_icerik;
            $substr = substr($hakkmizda_metin, 0, 208);    
          ?>
            <div class="info_detail">
              <h4>
                Hakkımızda
              </h4>
              <p>
              <?php echo $substr; ?>
              </p>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 info_col">
          <div class="info_contact" style="float: right;">
            <h4>
              İletişim
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                <?php echo $ayargetir->ayar_adres?>
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                <?php echo $ayargetir->ayar_telefon?>
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                <?php echo $ayargetir->ayar_mail?>
                </span>
              </a>
            </div>
            <div class="info_social">
              <a href="<?php echo $ayargetir->ayar_facebook?>">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="<?php echo $ayargetir->ayar_twitter?>">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="<?php echo $ayargetir->ayar_instagram?>">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
      <?php echo $ayargetir->ayar_copyright?>
      </p>
    </div>
  </section>
  <!-- footer section -->




  
  <!-- jQery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>