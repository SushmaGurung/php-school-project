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
          if(isset($_GET['id'])){
            $id= $_GET['id'];

            $sql="SELECT *FROM settings WHERE id=$id";
            $sql_result=mysqli_query($con, $sql);
            $data= $sql_result->fetch_assoc();
          }
          if(isset($_POST['submit'])){
            // $img= $_POST['img'];
            $site_key= $_POST['site_key'];
            $site_value= $_POST['site_value'];

            if($site_key !="" && $site_value !=""){
              $query= "UPDATE settings SET site_key ='$site_key', site_value='$site_value' WHERE id=$id";
                    
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
               <input type="text" class="form-control" id="exampleInputPassword1" name="site_key" value="<?php echo $data['site_key'];?>">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Site value</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="site_value" value="<?php echo $data['site_value'];?>">
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