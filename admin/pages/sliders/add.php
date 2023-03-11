<!-- Header -->
<?php require("../inc/header.php") ?>
<!-- Navbar -->
<?php require("../inc/navbar.php") ?>

  <!-- Main Sidebar Container -->
  <?php require("../inc/sidebar.php") ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Slider</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
       
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <!-- <h3 class="card-title">Select2 (Bootstrap4 Theme)</h3> -->

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

          <?php
          if(isset($_POST['submit'])){
            $img= $_POST['img'];
            $title= $_POST['title'];
            $sub_title= $_POST['sub_title'];
            $btn= $_POST['btn'];

            if($img!="" && $title !="" && $sub_title !="" && $btn !=""){
                    $query= "INSERT INTO sliders (img, title,sub_title, btn) VALUES ('$img', '$title','$sub_title', '$btn')";
                    $result= mysqli_query($con, $query);
                    
                    
                    require("../inc/message.php");
                  } else { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>All data are required !</strong>
                    </div>
                <?php
            }}
          

          ?>
           <form method="POST" enctype="multipart/form-data">
             <div class="mb-3">
               <label for="selectedImage" class="form-label">Image</label>
               <input type="text" class="form-control" id="selectedImage" name="img" value="" aria-describedby="emailHelp">
                <!-- modal -->
              <?php require("../inc/modal.php"); ?>
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Title</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Sub Title</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="sub_title" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Button Text</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="btn" value="">
             </div>
             <button type="submit" class="btn btn-primary" name="submit">Submit</button>
             <a href="index.php" type="button" class="btn btn-primary" >Manage</a>
            </form>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- footer -->
  <?php  require("../inc/footer.php");?>