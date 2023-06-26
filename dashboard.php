<!DOCTYPE html>
<html lang="en">
            
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
    <style>
        .row{
            width: 100%;
        }
        body{
                background: url("bg.png");
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
            }
        .head{
            float: right;
            font-family: 'Righteous', cursive;
                font-size: 30pt;
                font-weight: bolder;
                color: rgba(194, 32, 167, 0.356);
                text-shadow: 2px 2px white;
        }
        button,input[type="submit"]{
            width: 200px;
            margin: 10px;
                text-align: center;
                border-radius: 5px;
                font-size: 15pt;
                font-family: 'Righteous', cursive;
            
        }
        td > input{
            color : black;
            text-align : center;
        }
        .semselect {
            top: 25%;
            width: 30px;
            position: fixed;
            /* border:  1px solid black; */
            height: 100vh;
            overflow-x : hidden;

        }
        .semselect:hover {
            width : 200px;
            transition : .5s;
        }
        tr,th,td{
                text-align:center; 
                padding: 10px;
                font-family: 'Righteous', cursive;
                font-size: 18pt;
                font-weight: bold;
                color: rgba(194, 32, 167, 0.356);
                text-shadow: 2px 2px white;
            }

        table{
            border: 1px solid white;
            width: 70%;
        }
        #abc{
            /* display: none; */
        }
    </style>
</head>
<body>
    <?php 
	$servername = "sql104.infinityfree.com";
    $username = "if0_34376999";
    $password = "BJsLSq514Wgpk";
    $dbname = "if0_34376999_cgpa";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM cgpa where reg_no='".$_GET['name']."'";
                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result); ?>
    <div class="row">
    <div class="head" id="stu_name">
        <?php 
        echo $row['name']."<br>CGPA : ".number_format((float)$row["cgpa"], 2, '.', '');;
        session_start();
        // echo $_SESSION["stu_name"];
        ?>
    </div>
    </div>
    <div class="row">
        <hr>
    </div>
    <div class="row">
    <div class="semselect">
    <!-- <a href="./sem1.php">sem1</a> -->
        <a href="/tutor_cgpa/tutor_cgpa/dashboard1d.php?name=<?php echo $_GET["name"] ?>"><button id="sem1" onclick="sem_1()">Sem 1</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard2.php?name=<?php echo $_GET["name"] ?>"><button id="sem2" onclick="sem_2()">Sem 2</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard3.php?name=<?php echo $_GET["name"] ?>"><button id="sem3" onclick="sem_3()">Sem 3</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard4.php?name=<?php echo $_GET["name"] ?>"><button id="sem4" onclick="sem_4()">Sem 4</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard5.php?name=<?php echo $_GET["name"] ?>"><button id="sem5" onclick="sem_5()">Sem 5</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard6.php?name=<?php echo $_GET["name"] ?>"><button id="sem6" onclick="sem_6()">Sem 6</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard7.php?name=<?php echo $_GET["name"] ?>"><button id="sem7" onclick="sem_7()">Sem 7</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard8.php?name=<?php echo $_GET["name"] ?>"><button id="sem8" onclick="sem_8()">Sem 8</button></a>

    </div>
    </div>
    

<div class="calci" style="position: absolute; bottom: 2px; right: 2px; color: white;font-family: 'Righteous', cursive;">
        <a href="index.html"><h1>calculator -></h1></a>
</div>

</body>
<script>
    

            
        


        
    
</script>
</html>