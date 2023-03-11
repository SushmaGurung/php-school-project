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
            <h1>Partners</h1>
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

            $sql="SELECT *FROM partners WHERE id=$id";
            $sql_result=mysqli_query($con, $sql);
            $data= $sql_result->fetch_assoc();
          }

          if(isset($_POST['submit'])){
            $icon= $_POST['icon'];
            $title= $_POST['title'];

            if($icon !="" && $title !=""){
                    $query= "UPDATE partners SET icon='$icon', title='$title' WHERE id=$id";
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
               <label for="exampleInputEmail1" class="form-label">Icon</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="icon" value="<?php echo $data['icon']; ?>" aria-describedby="emailHelp">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Title</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="title" value="<?php echo $data['title']; ?>">
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