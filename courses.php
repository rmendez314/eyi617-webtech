<?php
    include_once 'connect.php';
    include_once ".env.php";
?>
<html lang="en-US">
<!--moreTags.html-->
   <head>
       <div>
           <title></title>
       </div>
   </head>
   <body>
    <div>
      <h1 style="color: black">Courses</h1>
      <h2><a href="http://192.168.1.75:8085/eyi617-assign5.php">back</a></h2>
      <hr>
        <h3>Add a Course:</h3>
    </div>
        <div>
           <form action="connect.php" method="POST">
                <label for="courseNm">Course Name</label>
                <input type="text" id="courseNm" name ="courseNm" required/>
                <label for="courseNum">Course Number</label>
                        <input type="text" id="courseNum" name ="courseNum" required/>
                <label for="description">Description</label>
                        <input type="text" id="description" name ="description" required/>
                <label for="finalGrade">Final Grade</label>
                        <input type="text" id="finalGrade" name ="finalGrade" required/>
                <label for="enrolled">Currently Enrolled</label>
                        <select id="enrolled" name="enrolled" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                         </select>
               <input type="Submit" name="Submit" id="Submit">
           </form>
        </div>
        <div>
            <h3>
                List of Courses:
            </h3>
            <?php
                $con= mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DATABASE);
                $sql = "SELECT * FROM course;";
                $result =  mysqli_query($con, $sql);

                $resultCheck = mysqli_num_rows($result);

                if ($resultCheck > 0){
                    while($row = mysqli_fetch_assoc($result)){
                        if ($row['enrolled'] == "Yes") {
                            echo '<div id="records" style="
                                border-style: solid;
                                width: 300px;
                                margin-top: 10px;
                                margin-bottom: 10px;
                                padding: 10px;
                                background-color: lightblue;
                            ">';
                        } else {
                            echo '<div id="records" style="
                                border-style: solid;
                                width: 300px;
                                margin-top: 10px;
                                margin-bottom: 10px;
                                padding: 10px;
                            ">';
                        }
                        ?>
                            Course Name: <?php echo $row['courseNm']; ?> <br>
                            Course Number: <?php echo $row['courseNum']; ?> <br>
                            Description: <?php echo $row['description']; ?> <br>
                            Final Grade: <?php echo $row['finalGrade'] ?><br>
                            Currently Enrolled: <?php echo $row['enrolled'] ?> <br>
                            <br>
            <!--
                            <form action="delete.php">
                                <button type="button" name="Delete" id=<?php echo $row['courseNm'];?>>Delete </button>
                            </form>
                            -->
                            <a href="delete.php?id=<?php echo $row['courseNm']; ?>">Delete</a>
                        </div>
            <?php
                    }
                }
            ?>
        </div>
   </body>
</html>