<?php
$conn = mysqli_connect("localhost", "root", "", "penjualan");

//check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL server : " . mysqli_connect_error();
    exit();
}
