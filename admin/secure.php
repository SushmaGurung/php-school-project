<?php
if(isset($_SESSION['email'])){
    // show page
}
else{
    Header("Location:index.php");//login page
}
?>
