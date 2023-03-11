<?php
require("../../connection/config.php");

if(isset($_GET['id'])){
    $id= $_GET['id'];

    $delete_query= "DELETE FROM users WHERE id=$id";
    $delete_result= mysqli_query($con, $delete_query);

    Header("Refresh:0, Url=index.php");

}else{
    echo "file not deleted!";
}



?>