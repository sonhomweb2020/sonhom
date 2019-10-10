<?php
    
  $connection = mysqli_connect("localhost","root","","php_mini_project_wepb");
    if(mysqli_connect_errno() == 0){
        echo "connection successfully";
    }else{
        die ("error connection");
    }
?>