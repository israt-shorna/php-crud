<?php

include 'connection.php';
if(isset($_GET['viewid'])){
    
    $id=$_GET['viewid'];
    $sql = "SELECT name, email, password FROM user WHERE id = $id";
    $result= $con->query( $sql);
    
    if($result){
        $row= mysqli_fetch_assoc($result);
       echo  $name=$row['name'] ; 
       echo $email=$row['email'] ; 
       echo $password=$row['password']; 


        
        // echo 'pung pung';
    }
    else {
        echo 'tung';
    }
}
?>
