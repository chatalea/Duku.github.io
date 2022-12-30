<?php

$server = "	sql304.epizy.com";
$username = "epiz_33288658";
$password = "oIox4tEuNM";
$dbname = "epiz_33288658_DukuAgency";

$conn = mysqli_connect($server, $username $password, $dbname);

if(!$conn){
    die("Connection Faild:)".mysqli_connect_error());
}

?>