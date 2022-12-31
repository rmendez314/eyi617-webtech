<?php
include_once ".env.php";
include_once "courses.php";

// open the connection
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DATABASE);

//verify connection
if (!$con) {
    exit("<p class='error'>Connection Error: " . mysqli_connect_error() . "</p>");
}
    $courseNm = $_GET['id'];

    $query = "DELETE FROM course WHERE courseNm = '$courseNm'";
    $result = mysqli_query($con, $query);

    if (!$result) {
        exit("<p class='error'>Query Error: " . mysqli_error($con) . "</p>");
    } else {
        header("location:courses.php");
    }
mysqli_close($con);


