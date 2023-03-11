<!-- Header -->
<?php require("inc/header.php") ?>
<!-- Navbar -->
<?php require("inc/navbar.php") ?>

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <?php
$query= "SELECT *FROM courses";
$result= mysqli_query($con, $query);
$course_data =$result->fetch_assoc();?>
    <div class="breadcrumbs">
      <div class="container">
        <h2><?php echo $course_data['top_title']; ?></h2>
        <p><?php echo $course_data['top_desc']; ?></p>
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
      <div class="container" data-aos="fade-up">

        <div class="row" data-aos="zoom-in" data-aos-delay="100">

        <?php
$course_query= "SELECT *FROM courses";
$course_result= mysqli_query($con, $course_query);
while($courseData= mysqli_fetch_array($course_result)){
  ?>
  <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="course-item">
              <img src="<?php echo 'admin/uploads/'. $courseData['img']; ?>" class="img-fluid" alt="..."  width="400">
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
    </section><!-- End Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require("inc/footer.php") ?>
