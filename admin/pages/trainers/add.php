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
            <h1>Trainers</h1>
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
            $top_title= $_POST['top_title'];
            $top_desc= $_POST['top_desc'];
            $name= $_POST['name'];
            $position= $_POST['position'];
            $description= $_POST['description'];
            $fb_link= $_POST['fb_link'];
            $t_link= $_POST['t_link'];
            $y_link= $_POST['y_link'];
            $i_link= $_POST['i_link'];

            if($img !="" && $top_title !=""&& $top_desc !="" && $name !="" && $position !=""&& $description !=""&& $fb_link !="" && $y_link !="" && $t_link !="" && $i_link !=""){
                    $query= "INSERT INTO trainers (top_title, top_desc, img, name, position, description, fb_link, y_link, t_link, i_link) VALUES ('$top_title','$top_desc','$img', '$name','$position','$description', '$fb_link','$y_link','$t_link','$i_link')";
                    $result= mysqli_query($con, $query);
                    
                    
                    require("../inc/message.php");
                  } else { ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <strong>All data are required !</strong>
                    </div>
                <?php
            }
          }

          ?>
           <form method="POST" enctype="multipart/form-data">
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Top Title</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="top_title" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Top Description</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="top_desc" value="">
             </div>
             <div class="mb-3">
               <label for="selectedImage" class="form-label">Image</label>
               <input type="text" class="form-control" id="selectedImage" name="img" value="" aria-describedby="emailHelp">
                <!-- modal -->
              <?php require("../inc/modal.php"); ?>
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Name</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Postion</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="position" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Description</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Facebook link</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="fb_link" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Linkedin link</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="y_link" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Twitter link</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="t_link" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Instagram link</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="i_link" value="">
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