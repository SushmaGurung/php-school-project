<?php
  if ($result) {?> 
  <div class="alert alert-success alert-dismissible fade show w-50" role="alert">
    <strong>File Submitted</strong> 
</div><?php
    echo Header("Refresh:1, Url=index.php");
  } else {?>
  <div class="alert alert-danger alert-dismissible fade show w-50" role="alert">
    <strong>File not Submitted</strong> 
</div>
  <?php
  }
?>
