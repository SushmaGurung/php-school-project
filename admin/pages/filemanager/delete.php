<?php
require("../../connection/config.php");

if(isset($_GET['id'])){
    $id= $_GET['id'];

    $query= "SELECT *FROM filemanagers WHERE id=$id";
    $result= mysqli_query($con, $query);
    $data= $result->fetch_assoc();

    $filename= '../../uploads/'.$data['filelink'];

    unlink($filename);

    $delete_query= "DELETE FROM filemanagers WHERE id=$id";
    $delete_result= mysqli_query($con, $delete_query);

    Header("Refresh:0, Url=index.php");

}else{
    echo "file not deleted!";
}



?>