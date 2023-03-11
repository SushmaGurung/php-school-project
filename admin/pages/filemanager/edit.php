<!-- Header -->
<?php require("../inc/header.php"); ?>

<!-- Navbar -->
<?php require("../inc/navbar.php"); ?>

  <!-- Main Sidebar Container -->
  <?php require("../inc/sidebar.php");  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>File manager</h1>
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

            $sql="SELECT *FROM filemanagers WHERE id=$id";
            $sql_result=mysqli_query($con, $sql);
            $data= $sql_result->fetch_assoc();
          }

          if(isset($_POST['submit'])){
            $name= $_POST['name'];

            $filename= $_FILES['img']['name'];
            $filesize= $_FILES['img']['size'];

            $separate= explode('.', $filename);
            $firstname= strtolower($separate[0]);
            $extension= @strtolower($separate[1]);
            
            $rep= str_replace(' ', '', $firstname);
            $finalfilename = $rep.time() . '.' . $extension;

            if($finalfilename !=""  && $name !="" ){
              if($filesize> 2000){
                if($extension=="png" || $extension=="PNG" || $extension=="jpg"){
                  if(move_uploaded_file($_FILES['img']['tmp_name'], '../../uploads/'. $finalfilename)){
                    $query= "UPDATE filemanagers SET  filelink='$finalfilename', name='$name', type='$extension' WHERE id=$id";
                    $result= mysqli_query($con, $query);
                    
                    
                    if($result){
                      echo "File submitted";
                       Header("Location:index.php");
                    }else{
                      echo "File not submitted!";
                    }
                  
                  }
                }else{
                  echo "File format should be jpg/png !";
                }
              }else{
                echo "File size should be less than 2 MB!";
              }
            }else{
              echo "All data are required !";
            }
          }

          ?>
           <form method="POST" enctype="multipart/form-data">
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Name</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="name" value="<?php echo $data['name']; ?>">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Image</label>
               <input type="text" class="form-control" id="exampleInputPassword1"  value="<?php echo $data['filelink']; ?>">
               <input type="file" class="form-control" id="exampleInputPassword1" name="img" value="">
                <!-- modal -->
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