<?php
// connect.php

include_once "templateFunctions.php";
include_once ".env.php";

// open the connection
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DATABASE);


//verify connection
if (!$con) {
    exit("<p class='error'>Connection Error: " . mysqli_connect_error() . "</p>");
}


if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Submit'])) if(isset($_POST['courseNm']) && isset($_POST['courseNum']) && isset($_POST['description']) && isset($_POST['finalGrade']) && isset($_POST['enrolled'])){
    $courseNm = $_POST['courseNm'];
    $courseNum = $_POST['courseNum'];
    $description = $_POST['description'];
    $finalGrade = $_POST['finalGrade'];
    $enrolled = $_POST['enrolled'];

    $query= "INSERT INTO course (courseNm, courseNum, description, finalGrade, enrolled) VALUES ('$courseNm', '$courseNum', '$description', '$finalGrade', '$enrolled')";

    $result = mysqli_query($con, $query);
    if(!$result){
        exit("<p class='error'>Query Error: " . mysqli_error($con) . "</p>");
    } else {
        header("location:courses.php");
    }
}
// close the connection
mysqli_close($con);

