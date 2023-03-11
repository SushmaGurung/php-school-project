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
            <h1>Settings</h1>
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
            // $img= $_POST['img'];
            $site_key= $_POST['site_key'];
            $site_value= $_POST['site_value'];

            if($site_key !="" && $site_value !=""){
                    $query= "INSERT INTO settings (site_key, site_value) VALUES ('$site_key', '$site_value')";
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
               <label for="exampleInputPassword1" class="form-label">Site key</label>
               <input type="text" class="form-control" id="logo" name="site_key" value="" onchange="siteKey()">
             </div>
            
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Site value</label>
               <input type="text" class="form-control" id="selectedImage" name="site_value" value="">
             </div>
             <div class="mb-3 d-none" id="target">
              <!-- modal -->
              <?php require("../inc/modal.php"); ?>
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

<!-- display select image modal when site_key is logo -->
  <script>
    var target= document.getElementById("target");
    
    function siteKey(){
   var logoValue= document.querySelector("[name=site_key]").value;
  // console.log(logoValue);
  if(logoValue=="logo"){
    target.className = "mb-3 d-block"
  }else{
    target.className = "mb-3 d-none"
  }
}
  </script>
  <!-- footer -->
  <?php  require("../inc/footer.php");?>
