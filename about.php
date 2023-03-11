<!-- Header -->
<?php require("inc/header.php") ?>
<!-- Navbar -->
<?php require("inc/navbar.php") ?>

<main id="main">
  <?php
  $about_query = "SELECT *FROM about_us";
  $about_result = mysqli_query($con, $about_query);
  $aboutData = $about_result->fetch_assoc();
  ?>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><?php echo $aboutData['top_title']; ?></h2>
      <p><?php echo $aboutData['top_desc']; ?></p>
    </div>
  </div><!-- End Breadcrumbs -->

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
          <img src="<?php echo 'admin/uploads/'. $feat_data['img']; ?>" class="img-fluid" alt="">
        </div>
        
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
          <h3><?php echo $feat_data['title']; ?></h3>
          <p class="fst-italic">
            <?php echo $feat_data['description']; ?>
          </p>
          <ul>
            <?php while ($feat_dataArray = mysqli_fetch_array($feat_result)) {
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
         }?>

      </div>

    </div>
  </section><!-- End Counts Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
<?php
 $testimonial_query = "SELECT *FROM testimonials";
 $testimonial_result = mysqli_query($con, $testimonial_query);
 $testimonialdata1=$testimonial_result->fetch_assoc();
 ?>
      <div class="section-title">
        <h2>Testimonials</h2>
        <p><?php echo $testimonialdata1['title']; ?></p>
      </div>

      <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-wrapper">
        <?php
        
         while ($testimonialdata = mysqli_fetch_array($testimonial_result)) {
            ?>

          <div class="swiper-slide">
            <div class="testimonial-wrap">
              <div class="testimonial-item">
                <img src="<?php echo 'admin/uploads/'. $testimonialdata['img']; ?>" class="testimonial-img" alt="" height="50">
                <h3><?php echo $testimonialdata['name']; ?></h3>
                <h4><?php echo $testimonialdata['position']; ?></h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?php echo $testimonialdata['message']; ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>
          </div><!-- End testimonial item -->
<?php }?>
      

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </section><!-- End Testimonials Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php require("inc/footer.php") ?>