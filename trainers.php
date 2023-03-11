<!-- Header -->
<?php require("inc/header.php") ?>
<!-- Navbar -->
<?php require("inc/navbar.php") ?>

<main id="main" data-aos="fade-in">
  <?php
  $trainer_query = "SELECT *FROM trainers";
  $trainer_result = mysqli_query($con, $trainer_query);
  $trainer_data = $trainer_result->fetch_assoc();

  ?>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2><?php echo $trainer_data['top_title']; ?></h2>
      <p><?php echo $trainer_data['top_desc']; ?></p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Trainers Section ======= -->
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        while ($trainerArray = mysqli_fetch_array($trainer_result)) {
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo 'admin/uploads/' . $trainerArray['img']; ?>" class="img-fluid" alt="" width="" height="">
              <div class="member-content">
                <h4><?php echo $trainerArray['name']; ?></h4>
                <span><?php echo $trainerArray['position']; ?></span>
                <p><?php echo $trainerArray['description']; ?>
                </p>
                <div class="social">
                  <a href="<?php echo $trainerArray['t_link']; ?>"><i class="bi bi-twitter"></i></a>
                  <a href="<?php echo $trainerArray['fb_link']; ?>"><i class="bi bi-facebook"></i></a>
                  <a href="<?php echo $trainerArray['i_link']; ?>"><i class="bi bi-instagram"></i></a>
                  <a href="<?php echo $trainerArray['y_link']; ?>"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>
        <!-- 
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-2.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>Sarah Jhinson</h4>
                <span>Marketing</span>
                <p>
                  Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum rerum temporibus
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/trainers/trainer-3.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>William Anderson</h4>
                <span>Content</span>
                <p>
                  Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum toro des clara
                </p>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> -->

      </div>

    </div>
  </section><!-- End Trainers Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php require("inc/footer.php") ?>