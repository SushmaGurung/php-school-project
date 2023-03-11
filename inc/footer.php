<footer id="footer">

<div class="footer-top">
  <div class="container">
    <div class="row">
    <?php
    $contact ="SELECT *FROM whychoose_us";
    $contact_result= mysqli_query($con, $contact);
    $contact_data=$contact_result->fetch_assoc();

    $setting ="SELECT *FROM settings";
    $setting_result= mysqli_query($con, $setting);

    while($sitedata=$setting_result->fetch_assoc()){

      if($sitedata['site_key']=='youtube'){
        $youtube= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='twitter'){
        $twitter= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='instagram'){
        $instagram= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='linkedin'){
        $linkedin= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='skype'){
        $skype= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='facebook'){
        $facebook= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='address'){
        $address= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='phone'){
        $phone= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='logo'){
        $logo1= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='newsletter'){
        $newsletter= $sitedata['site_value'];
      }
      if($sitedata['site_key']=='mail'){
        $mail= $sitedata['site_value'];
      }

    }
    
    ?>
      <div class="col-lg-4 col-md-6 footer-contact">
        <img src="<?php echo 'admin/uploads/'. $logo1; ?>" alt="" width="80" height="80">
        <p>
        <?php echo $address ?>
          <!-- A108 Adam Street <br>
          New York, NY 535022<br>
          United States <br><br> -->
          <strong>Phone:</strong> <?php echo $phone ?><br>
          <strong>Email:</strong><?php echo $mail ?><br>
        </p>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="#">News</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Gallery</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Events</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Student Clubs</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Conference</a></li>
        </ul>
      </div>

      <div class="col-lg-4 col-md-6 footer-newsletter">
        <h4>Join Our Newsletter</h4>
        <p><?php echo $newsletter ?></p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="<?php echo $contact_data['btn'] ?>">
        </form>
      </div>

    </div>
  </div>
</div>

<div class="container d-md-flex py-4">

  <div class="me-md-auto text-center text-md-start">
    <div class="copyright">
      &copy; Copyright <strong><span>MY LOGO</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
  <div class="social-links text-center text-md-right pt-3 pt-md-0">
 
    <a href="<?php echo $twitter ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
    <a href="<?php echo $facebook ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
    <a href="<?php echo $youtube ?>" class="youtube"><i class="bx bxl-youtube"></i></a>
    <a href="<?php echo $instagram ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
    <a href="<?php echo $skype ?>" class="google-plus"><i class="bx bxl-skype"></i></a>
    <a href="<?php echo $linkedin ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  </div>
</div>
</footer><!-- End Footer -->

<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>