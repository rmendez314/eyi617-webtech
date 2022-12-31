<?php
    $UTSA = '<td id ="left-menu">';
    $Dark = '<body id ="dark">';
    $last = $_COOKIE["last"];
    if(is_array($_POST) && !empty($_POST)){
        $var = $_POST['flag'];
        if(isset($_POST['flag'])){
            setcookie("last", $_POST["flag"], time() + (80000 * 2), "/");
        }
        $last = null;
    }
    ?>
<html lang="en-US">
<!--moreTags.html-->
    <div id="head">
        <head>
            <title>eyi617-assign3</title>
            <link rel="stylesheet" type="text/css" href="eyi617-assign5.css">
        </head>
    </div>
    <?php
        if(isset($last)){
            if($_COOKIE["last"] == '<body id="dark">'){
                echo '<body id="dark">';
                $Dark = '<body>';
            } else {
                echo '<body>';
                $Dark = '<body id="dark">';
            }
        } else {
            if($var == '<body id="dark">'){
                echo '<body id="dark">';
                $Dark = '<body>';
            } else {
                echo '<body>';
                $Dark = '<body id="dark">';
            }
        }
    ?>
            <div id="container-1">
                <img id ="image-float-right" src="https://www.utsa.edu/mbrs/resources/logos/Rowdy.png" alt="utsa.edu" style="width:300px;height:80px">
                <h1 class="align-left" style="color: black">Ramiro Mendez</h1>
                <h2>Software Engineer</h2>
                <hr style ="margin-top: 20px; margin-bottom: 20px">
            </div>
            <div id="container-2">

                <table>
                    <tr>
                        <?php
                        if(isset($last)) {
                            if ($_COOKIE["last"] == '<td id="left-menu">') {
                                echo '<td id="left-menu">';
                                $UTSA = '<td id="left-menu-dark">';
                            } else {
                                echo '<td id="left-menu-dark">';
                                $UTSA = '<td id="left-menu">';
                            }
                        } else {
                            if ($var == '<td id="left-menu">') {
                                echo '<td id="left-menu">';
                                $UTSA = '<td id="left-menu-dark">';
                            } else {
                                echo '<td id="left-menu-dark">';
                                $UTSA = '<td id="left-menu">';
                            }
                        }
                        ?>

                            Menu
                            <hr class="line">
                            <ul>
                                <li><a href="https://github.com/rmendez314">GitHub</a></li>
                                <li><a href="http://192.168.1.75:8085/courses.php">Courses</a></li>
                                <li><a href="https://www.utsa.edu/">UTSA</a></li>
                            </ul>
                        </td>
                        <td id="center-menu">
                            <img id ="image-float-right" id="image-top" class="image-border" src="https://www.utsa.edu/mbrs/resources/logos/Rowdy.png" alt="utsa.edu" style="width:200px;height:200px">
                            <h2>About Me</h2>
                            <p>
                                I'm a Senior Computer Science major at UTSA, with a minor in Business Administration.
                                I plan on graduating the Spring of 2022, and possibly going to apply for graduate school
                                that following Fall. I enjoy rock climbing, building Pc's/ playing Pc games with friends,
                                and listening to music. I work part-time at costco on the weekends while I go to school
                                until I can secure a job or paid internship before or after I graduate.

                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam beatae distinctio ducimus
                                hic nobis omnis quae suscipit tenetur. Commodi maiores, maxime nihil praesentium tempore
                                vero. Accusantium blanditiis quisquam sequi veniam?
                            </p>
                        </td>
                        <?php
                            if(isset($last)) {
                                if ($_COOKIE["last"] == '<td id="left-menu-UTSA">') {
                                    echo '<td id="right-menu">';
                                    $UTSA = '<td id="left-menu-dark">';
                                } else {
                                    echo '<td id="right-menu-dark">';
                                    $UTSA = '<td id="left-menu-dark">';
                                }
                            } else {
                                if ($var == '<td id="left-menu">') {
                                    echo '<td id="right-menu">';
                                    $UTSA = '<td id="left-menu-dark">';
                                } else {
                                    echo '<td id="right-menu-dark">';
                                    $UTSA = '<td id="left-menu">';
                                }
                            }
                        ?>
                            Enrolled Courses
                            <hr class="line">
                            <ol>
                                <li>CS3113</li>
                                <li>CS3343</li>
                                <li>CS3743</li>
                                <li>CS3773</li>
                                <li>CS4413</li>
                            </ol>

                            Theme Toggles
                            <hr>
                            <form action = "eyi617-assign5.php" method="post">
                                <input type='hidden' name ='flag' value='<?php $flag = $UTSA; echo "$flag";?>'/>
                                <input class="button" type="submit" value="UTSA Theme">
                            </form>
                            <form action = "eyi617-assign5.php" method="post">
                                <input type='hidden' name ='flag' value='<?php $flag = $Dark; echo "$flag";?>'/>
                                <input class="button" type="submit" value="Dark Mode">
                            </form>
                        </td>
                    </tr>
                </table>
                <div id="footer">
                    Copyright 2021, Ramiro Mendez
                </div>
            </div>
    </body>
</html>