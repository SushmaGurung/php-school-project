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
          <h1>Courses</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Manage </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a  class="btn btn-primary" href="add.php" role="button">Add</a>
               <table  class="table table-bordered table-striped"><!--id="example1" -->
                <thead>
                  <tr>
                    <th>S.No.</th>
                    <th>Top Title</th>
                    <th>Top Description</th>
                    <th>Course Title</th>
                    <th>Fees</th>
                    <th>Description</th>
                    <th>Image link</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query = "SELECT *FROM courses";
                  $result = mysqli_query($con, $query);
                  $i = 0;
                  while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                      <td><?php echo ++$i;?></td>
                      <td><?php echo $data['top_title'];?></td>
                      <td><?php echo $data['top_desc'];?></td>
                      <td><?php echo $data['c_title'];?></td>
                      <td><?php echo $data['fee'];?></td>
                      <td><?php echo $data['description'];?></td>
                      <td><?php echo $data['img'];?></td>
                      <td><img src="<?php echo '../../uploads/'. $data['img'];?>" alt="" width="100" height="100"></td>
                      <td><?php echo $data['status'];?></td>
                      <td>
                        <a class="btn btn-primary" href="edit.php?id=<?php echo $data['id'];?>" role="button">Edit</a>
                        <a  class="btn btn-danger" href="delete.php?id=<?php echo $data['id'];?>" role="button">Delete</a>
                      </td>
                      <td><?php echo $data['created_at'];?></td>
                      <td><?php echo $data['updated_at'];?></td>
                    </tr>
                  <?php
                  }

                  ?>
                </tbody>
                <tfoot>
                <tr>
                    <th>S.No.</th>
                    <th>Top Title</th>
                    <th>Top Description</th>
                    <th>Course Title</th>
                    <th>Fees</th>
                    <th>Description</th>
                    <th>Image link</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- footer -->
<?php require("../inc/footer.php") ?>