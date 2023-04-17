<!-- Header -->
<?php require("inc/header.php");
ob_start() ?>
<!-- Navbar -->
<?php require("inc/navbar.php") ?>

<main id="main">
  <?php
  $contact = "SELECT *FROM whychoose_us";
  $contact_result = mysqli_query($con, $contact);
  $contact_data = $contact_result->fetch_assoc();

  ?>
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs" data-aos="fade-in">
    <div class="container">
      <h2><?php echo $contact_data['title']; ?></h2>
      <p><?php echo $contact_data['description']; ?></p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Contact Section ======= -->
  <?php
  $map_query = "SELECT *FROM settings";
  $map_result = mysqli_query($con, $map_query);
  while ($mapdata = mysqli_fetch_array($map_result)) {

    if ($mapdata['site_key'] == 'map') {
      $map = $mapdata['site_value'];
    }
    if ($mapdata['site_key'] == 'address') {
      $address = $mapdata['site_value'];
    }
    if ($mapdata['site_key'] == 'phone') {
      $phone = $mapdata['site_value'];
    }
    if ($mapdata['site_key'] == 'mail') {
      $mail = $mapdata['site_value'];
    }
  }
  ?>
  <section id="contact" class="contact">
    <div data-aos="fade-up">
      <iframe style="border:0; width: 100%; height: 350px;" src="<?php echo $map; ?>" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="container" data-aos="fade-up">

      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p><?php echo $address; ?></p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p><a href="<?php echo $mail; ?>"><?php echo $mail; ?></a> </p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p><?php echo $phone; ?></p>
            </div>

          </div>

        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">

          <?php

          if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];

            if ($name != "" && $email != "" && $subject != "" && $message != "") {

              $query = "INSERT INTO forms (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
              $result = mysqli_query($con, $query);

              // if ($result) {
              //   echo "Data submitted";
              //   // header("Location: contact.php");
              // } else {
              //   echo "Data not submitted";
              // }
            }
          }

          ?>

          <form method="post" role="form" enctype="multipart/form-data" class="form" id="myForm">
            <!-- class="php-email-form" action="forms/contact.php" -->
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="my-3">
              <!--  <div class="loading">Loading</div>
              <div class="error-message"></div>-->
              <div class="sent-message" id="response_message"></div>
            </div>
            <div class="text-center mt-4 "><button type="submit" id="btn" style="background: #5fcf80;  border: 0;  padding: 10px 35px;  color: #fff;  transition: 0.4s;  border-radius: 50px" name="submit" class="button">Send Message</button></div>
          </form>


        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->

<script>
  let btn = document.getElementById("btn");
  btn.addEventListener("click", submitHandler);

  function submitHandler() {
    console.log("clicked");

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "admin/pages/form/index.php", true);
    // xhr.setRequestHeader("Content-Type", "multipart/form-data");

    xhr.onload = function() {
      document.getElementById("response_message").innerHTML = this.responseText;
    }

  var myForm = document.getElementById("myForm");
  var formData = new FormData(myForm);
  console.log(formData);

  xhr.send(formData);

  }

  
</script>
<!-- ======= Footer ======= -->
<?php require("inc/footer.php") ?>