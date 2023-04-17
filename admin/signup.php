<?php require("connection/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Sign up</title>
</head>
<body>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper container ">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container text-center">
        
            <h3>Sign up</h3>
         
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
            $name= $_POST['name'];
            $phone= $_POST['phone'];
            $address= $_POST['address'];
            $email= $_POST['email'];
            $password= $_POST['password'];

            if($name !="" && $phone !=""&& $address !="" && $email !=""&& $password !="" ){
              $query= "SELECT *FROM users WHERE email='$email'";
              $result= mysqli_query($con, $query);
              if(mysqli_num_rows($result)>0){
                echo' this email is already taken';
                header("Refresh:1; url= signup.php");

              }else{
                $query= "INSERT INTO users (name, phone,address, email, password) VALUES ('$name', '$phone','$address', '$email','$password')";
                $result= mysqli_query($con, $query);
                require("pages/inc/message.php")   ; 
              }
              } else { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong>All data are required !</strong>
                </div>
            <?php
            }}
          

          ?>
           <form method="POST" enctype="multipart/form-data">
             <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Name</label>
               <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="" aria-describedby="emailHelp">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Phone</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="phone" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Address</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="address" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Email</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="email" value="">
             </div>
             <div class="mb-3">
               <label for="exampleInputPassword1" class="form-label">Password</label>
               <input type="text" class="form-control" id="exampleInputPassword1" name="password" value="">
             </div>
             <button type="submit" class="btn btn-primary" name="submit">Submit</button>
             <a href="index.php" type="button" class="btn btn-primary" >Login</a>
            </form>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>