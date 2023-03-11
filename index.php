<!-- Header -->
<?php require("inc/header.php") ?>
<!-- Navbar -->
<?php require("inc/navbar.php") ?>

 <!-- ======= Hero Section ======= -->
 <?php
$slider_query= "SELECT *FROM sliders";
$slider_result =mysqli_query($con, $slider_query);
$slider_data =$slider_result->fetch_assoc();
 ?>
 <section id="hero" class="d-flex justify-content-center align-items-center" style="background: url(<?php echo 'admin/uploads/'. $slider_data['img'] ; ?>); background-repeat: no-repeat; background-size:cover">
    <div class="container-fluid position-relative w-50 ms-5" data-aos="zoom-in" data-aos-delay="100">
      <h1><?php echo $slider_data['title']; ?></h1>
      <h2><?php echo $slider_data['sub_title']; ?></h2>
      <a href="courses.php" class="btn-get-started"><?php echo $slider_data['btn']; ?></a>
    </div>
  </section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <?php
        $feat_query = "SELECT *FROM features";
        $feat_result = mysqli_query($con, $feat_query);
        $feat_data = $feat_result->fetch_assoc();

        ?>
        <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <img src="<?php echo 'admin/uploads/' . $feat_data['img']; ?>" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3><?php echo $feat_data['title']; ?></h3>
          <p class="fst-italic">
            <?php echo $feat_data['description']; ?>
          </p>
          <ul>
             <?php
             $feat_query = "SELECT *FROM features limit 3 ";
             $feat_result = mysqli_query($con, $feat_query);
             while ($feat_dataArray = mysqli_fetch_array($feat_result)) {
            ?>

              <li><i class="bi <?php echo $feat_dataArray['icon']; ?>"></i><?php echo $feat_dataArray['description']; ?> </li>
            <?php
            } ?>
          </ul>
          <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            </p> -->

        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Counts Section ======= -->
  <section id="counts" class="counts section-bg">
    <div class="container">

      <div class="row counters">
        <?php

        $fact_query = "SELECT *FROM facts";
        $fact_result = mysqli_query($con, $fact_query);

        while ($factdata = mysqli_fetch_array($fact_result)) {
        ?>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="<?php echo $factdata['number']; ?>" data-purecounter-duration="1" class="purecounter"></span>
            <p><?php echo $factdata['title']; ?></p>
          </div>
        <?php
        } ?>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Why Us Section ======= -->
  <section id="why-us" class="why-us">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <?php
        $choose = "SELECT *FROM whychoose_us WHERE id=8"; ///???
        $choose_result = mysqli_query($con, $choose);
        $choose_data = $choose_result->fetch_assoc(); ?>
        <div class="col-lg-4 d-flex align-items-stretch">
          <div class="content">
            <h3><?php echo  $choose_data['title']; ?></h3>
            <p>
              <?php echo  $choose_data['description']; ?>
            </p>
            <div class="text-center">
              <a href="about.html" class="more-btn"><?php echo  $choose_data['btn']; ?> <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <?php
              $feat_query = "SELECT *FROM features limit 3";
              $feat_result = mysqli_query($con, $feat_query);
              while ($feat_dataArray = mysqli_fetch_array($feat_result)) {
              ?>
                <div class="col-xl-4 d-flex align-items-stretch">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4><?php echo $feat_dataArray['title']; ?></h4>
                    <p><?php echo $feat_dataArray['description']; ?></p>
                  </div>
                </div>
              <?php
              } ?>

            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End Why Us Section -->

  <!-- ======= Features Section ======= -->
  <section id="features" class="features">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        $part_query = "SELECT *FROM partners";
        $part_result = mysqli_query($con, $part_query);
        while ($part_dataArray = mysqli_fetch_array($part_result)) {
        ?>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="<?php echo $part_dataArray['icon']; ?>" style="color: #ffa76e;"></i>
              <h3><a href="#"><?php echo $part_dataArray['title']; ?></a></h3>
            </div>
          </div>

        <?php } ?>

      </div> 
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        $part_query = "SELECT *FROM partners";
        $part_result = mysqli_query($con, $part_query);
        while ($part_dataArray = mysqli_fetch_array($part_result)) {
        ?>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="<?php echo $part_dataArray['icon']; ?>" style="color: #ffa76e;"></i>
              <h3><a href="#"><?php echo $part_dataArray['title']; ?></a></h3>
            </div>
          </div>

        <?php } ?>

      </div> 
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        $part_query = "SELECT *FROM partners";
        $part_result = mysqli_query($con, $part_query);
        while ($part_dataArray = mysqli_fetch_array($part_result)) {
        ?>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="<?php echo $part_dataArray['icon']; ?>" style="color: #ffa76e;"></i>
              <h3><a href="#"><?php echo $part_dataArray['title']; ?></a></h3>
            </div>
          </div>

        <?php } ?>

      </div> 
      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        $part_query = "SELECT *FROM partners";
        $part_result = mysqli_query($con, $part_query);
        while ($part_dataArray = mysqli_fetch_array($part_result)) {
        ?>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="<?php echo $part_dataArray['icon']; ?>" style="color: #ffa76e;"></i>
              <h3><a href="#"><?php echo $part_dataArray['title']; ?></a></h3>
            </div>
          </div>

        <?php } ?>

      </div> 

    </div>
  </section><!-- End Features Section -->

  <!-- ======= Popular Courses Section ======= -->
  <section id="popular-courses" class="courses">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <?php
        $course_query = "SELECT *FROM courses";
        $course_result = mysqli_query($con, $course_query);
        $course_data = $course_result->fetch_assoc(); ?>
        <h2><?php echo $course_data['top_title']; ?></h2>
        <p>We Provide</p>
      </div>

      <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php
        $course_query = "SELECT *FROM courses";
        $course_result = mysqli_query($con, $course_query);
        while ($courseData = mysqli_fetch_array($course_result)) {
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?php echo 'admin/uploads/' . $courseData['img']; ?>" class="img-fluid" alt="..." >
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <h4>Education</h4>
                  <p class="price"><?php echo $courseData['fee']; ?></p>
                </div>

                <h3><a href="course-details.html"><?php echo $courseData['c_title']; ?></a></h3>
                <p><?php echo $courseData['description']; ?></p>
                <!-- <div class="trainer d-flex justify-content-between align-items-center">
                  <div class="trainer-profile d-flex align-items-center">
                    <img src="assets/img/trainers/trainer-1.jpg" class="img-fluid" alt="">
                    <span>Antonio</span>
                  </div>
                  <div class="trainer-rank d-flex align-items-center">
                    <i class="bx bx-user"></i>&nbsp;50
                    &nbsp;&nbsp;
                    <i class="bx bx-heart"></i>&nbsp;65
                  </div>
                </div> -->
              </div>
            </div>
          </div> <!-- End Course Item-->

        <?php
        }
        ?>
      </div>

    </div>
  </section><!-- End Popular Courses Section -->

  <!-- ======= Trainers Section ======= -->
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php
        $trainer_query = "SELECT *FROM trainers  LIMIT 3";
        $trainer_result = mysqli_query($con, $trainer_query);
        while ($trainerArray = mysqli_fetch_array($trainer_result)) {
        ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?php echo 'admin/uploads/' . $trainerArray['img']; ?>" class="img-fluid" alt="" width="" height="400">
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