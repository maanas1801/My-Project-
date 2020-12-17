<?php
 $username="root";
 $password="";
 $server='localhost';
 $db="project";
 $con =mysqli_connect($server,$username,$password,$db);
  if($con){
  	echo "connection successful";
  }else{
  	echo "connection not successful";
  }
  ?>