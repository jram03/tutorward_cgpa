<!DOCTYPE html>
<?php 
session_start();
$tut=$_SESSION["sess_user"];
?>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Register</title>
    <style>
        body{
                background: url("bg.png");
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
            }
        h1{
            text-align: center;
            font-family: 'Righteous', cursive;
                font-size: 30pt;
                font-weight: bolder;
                color: rgba(194, 32, 167, 0.356);
                text-shadow: 2px 2px white;
        }
        label
        {
            font-family: 'Righteous', cursive;
                font-size: xx-large;
                font-weight: bolder;
                color: rgba(194, 32, 167, 0.356);
                text-shadow: 2px 2px white;


        }
        input,button{
            margin: 10px;
                text-align: center;
                border-radius: 5px;
                font-size: xx-large;
                width: 400px;
                font-family: 'Righteous', cursive;

        }
        
        .flex{
            padding-top: 5%;
            width: 500px;
            height: 450px;
            border: 1px solid black;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            /* align-items: center; */
            flex-wrap: wrap;
            box-shadow: 4px 4px 10px black;
        }
        .container{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

    </style>
</head>
<body>

<div class="container">
        <h1>REGISTRATION</h1><br>
    <div class="flex">
        <div class="col">
        <form action="/tutor_cgpa/tutor_cgpa/register.php" class="lform" method="post">
            <label>Name</label><br>
            <input name="name"type="text"/><br>
            <label>Register no</label><br>
            <input name="reg_no" type="text"/><br>
            <br><br>
            <button type="submit" class="btn" style="width: 200px;">Register</button>
        </form>
        </div>
    </div>
    </div>








    <!-- <h1>STUDENT REGISTRATION</h1>
    <form action="/tutor_cgpa/tutor_cgpa/register.php" method="post">
        <input type="text" name="name"/>
        <input type="text" name="reg_no"/>
        <input type="submit" value="submit"/>
        
    </form> -->
    <?php 
   $servername = "sql104.infinityfree.com";
    $username = "if0_34376999";
    $password = "BJsLSq514Wgpk";
    $dbname = "if0_34376999_cgpa";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "INSERT INTO cgpa VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0)";
    mysqli_query($conn, $sql); 
    $sql = "INSERT INTO tutor_ward VALUES ('".$_POST["reg_no"]."','".$_POST["name"]."','".$tut."')";
    mysqli_query($conn, $sql);    
    $sql = "INSERT INTO semm1 VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
    mysqli_query($conn, $sql);    

    $sql = "INSERT INTO sem2 VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
    mysqli_query($conn, $sql);    
    $sql = "INSERT INTO sem3 VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
    mysqli_query($conn, $sql); 
    $sql = "INSERT INTO sem4 VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
    mysqli_query($conn, $sql); 
    $sql = "INSERT INTO sem5 VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0,0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
    mysqli_query($conn, $sql); 
    $sql = "INSERT INTO sem6 VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0,0,0,0,0,0,0,0,0,0,0,0,0)";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO sem7 VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0,0,0,0,0,0,0,0)";
    mysqli_query($conn, $sql);
    $sql = "INSERT INTO sem8 VALUES ('".$_POST["name"]."','".$_POST["reg_no"]."',0,0,0,0,0,0,0,0)";
    mysqli_query($conn, $sql);    
    
    header("Location: /tutor_cgpa/tutor_cgpa/tutorward.php?name=".$tut);
    // ALTER TABLE `[[table_schema]]`.`[[table_name]]` ALTER COLUMN `[[column_name]]` SET DEFAULT '[[default]]'
    
    }
    ?>
</body>
</html>