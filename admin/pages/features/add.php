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
            <h1>Features</h1>
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
            $icon= $_POST['icon'];
            $description= $_POST['description'];

            if($img !="" && $description !="" && $icon !="" && $title !="" ){
                    $query= "INSERT INTO features (title, icon, description, img) VALUES ('$title','$icon','$description','$img')";
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
               <label for="exampleInputPassword1" class="form-label">Title</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Icon</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="icon" value="" placeholder="fa-regular fa-comment">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="text" class="form-control" id="selectedImage" name="img" value="" aria-describedby="emailHelp">
                 <!-- modal -->
              <?php require("../inc/modal.php"); ?>
              </div>
             <button type="submit" class="btn btn-primary" name="submit">Submit</button>
             <a href="index.php" type="button" class="btn btn-primary" >Manage</a>
            </form>
        <!-- /.row -->
      </div>
       <a href="https://fontawesome.com/search?q=note&o=r&m=free&s=regular">Click here to get icon reference</a>
       <ol>Follow the instruction given below:
<li>Click on the given link and search for the icon you require.</li>
<li>Click on the required icon and then copy the snippet..eg. &lt;i class="fa-regular fa-comment"&gt;&lt;/i&gt;</li>
<li>Paste the snippet in icon field.</li>
<li>Remove everything other than class value ie.fa-regular fa-comment.</li>
       </ol>
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- footer -->
  <?php  require("../inc/footer.php");?>