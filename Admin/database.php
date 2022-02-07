<?php
$conn = mysqli_connect("localhost","root","","testa");

// Check connection
    if (mysqli_connect_errno()) {
    echo "<p style=color:red;> Failed to connect to MySQL:  </p>" . mysqli_connect_error();
    exit();
    }
?>