<?php
session_start();
 //$con=new mysqli('sql307.byetcluster.com','ezyro_38673444','tqwdc34y','ezyro_38673444_miilkin');
 $con=new mysqli('sql12.freesqldatabase.com','sql12774509','xrZCSQnnLj','sql12774509');
 //$con=new mysqli('localhost','root','','pro');

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
$_SERVER["REQUEST_METHOD"]=='GET';
   
$sql = "SELECT * FROM aaa";
   
    $enq = mysqli_query($con,$sql);
    $noofrows=mysqli_num_rows($enq);
    // echo ($noofrows);
    foreach($enq as $recor){ 
   extract($recor);
   echo ($ID);
   echo ($name);
    
    }
?>
