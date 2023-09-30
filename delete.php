<?php

include 'connection.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
$query= "DELETE FROM user WHERE id=$id"; 
$query_run= mysqli_query($con, $query);

if($query_run){
    // echo 'row deleted';

    header('location:list.php');
}

}
?>