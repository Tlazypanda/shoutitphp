<?php

$con = mysqli_connect("localhost","root","secret","shoutit");

//test connection

if(mysqli_connect_errno()){
echo 'Failed to connect'.mysqli_connect_error();
}