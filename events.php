<!-- Header -->
<?php require("inc/header.php") ?>
<!-- Navbar -->
<?php require("inc/navbar.php") ?>

<main id="main">
  <?php
  $event = "SELECT *FROM events";
  $event_result = mysqli_query($con, $event);
  $eventdata = $event_result->fetch_assoc();
  ?>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><?php echo $eventdata['top_title']; ?></h2>
      <p><?php echo $eventdata['top_desc']; ?></p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Events Section ======= -->
  <section id="events" class="events">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <?php
        $query = "SELECT *FROM events";
        $result = mysqli_query($con, $query);
        while ($data = mysqli_fetch_array($result)) {
        ?>
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card">
              <div class="card-img">
                <img src="<?php echo 'admin/uploads/' . $data['img'] ?>" alt="..." height="400">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="#"><?php echo $data['title']; ?></a></h5>
                <p class="fst-italic text-center">  From 9th April 2023, 9AM-4PM </p>
                <p class="card-text"><?php echo $data['description']; ?></p>
              </div>
            </div>
          </div>
        <?php
        } ?>
      </div>
    </div>
  </section><!-- End Events Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<?php require("inc/footer.php") ?>