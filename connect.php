<?php
$connect = mysqli_connect("localhost", "root", "1234", "miniproj_wt") or die("Connection Failed");
if($connect){
    echo "Connected";
}
else{
    echo "Not Connected";
}
?>