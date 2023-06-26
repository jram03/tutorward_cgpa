
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
    <title>Dashboard</title>

    <style>
        .row{
            width: 100%;
        }
        .head{
            float: right;
            font-family: 'Righteous', cursive;
                font-size: 30pt;
                font-weight: bolder;
                color: rgba(194, 32, 167, 0.356);
                text-shadow: 2px 2px white;
        }
        body{
                background: url("bg.png");
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
            }
        .stu_container{
            display: flex;

            flex-wrap: wrap;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        a > div,.stu_container > div{
            padding-top: 80px;
            margin: 3px;
            background-color: white;
            border-radius: 10px;
            height: 200px;
            width: 200px;
            
            text-align: center;
                border-radius: 5px;
                font-size: 15pt;
                font-family: 'Righteous', cursive;
        }
        .abc{
            /* display: none; */
        }
    </style>
</head>
<body>

    <div class="row">
        <div class="head" id="stu_name">
            <?php
            session_start();
            echo $_SESSION["sess_user"];
            ?>
        </div>
        </div>
        <div class="row">
            <hr>
        </div>
        <div class="abc">
            
    <div class="stu_container" id="abcc">
        <!-- <a href="dashboard.html"><div class="stu">
            <h1>NAME</h1>
        </div>
        </a><a href="dashboard.html"><div class="stu">
            <h1>NAME</h1>
        </div>
        </a><a href="dashboard.html"><div class="stu">
            <h1>NAME</h1>
        </div>
        </a><a href="dashboard.html"><div class="stu">
            <h1>NAME</h1>
        </div>
        </a><a href="dashboard.html"><div class="stu">
            <h1>NAME</h1>
        </div>
        </a><a href="dashboard.html"><div class="stu">
            <h1>NAME</h1>
        </div>
        </a><a href="dashboard.html"><div class="stu">
            <h1>NAME</h1>
        </div>
        </a><a href="dashboard.html"><div class="stu">
            <h1>NAME</h1>
        </div>
        </a> -->
        
    </div>
    </div>


<?php

// echo "hello world";


// Database Connection
$servername = "sql104.infinityfree.com";
    $username = "if0_34376999";
    $password = "BJsLSq514Wgpk";
    $dbname = "if0_34376999_cgpa";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

$tut_name = $_SESSION['sess_user'];

$_SESSION['sess_user']=$tut_name;
// echo $tut_name;
// // Create connection
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM tutor_ward where tutor_name='".$tut_name."'";
$result = $conn->query($sql);


    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
          



        // echo $row["stu_id"];
    echo '
    <script>
    var abc=document.getElementById("abcc");
    var para = document.createElement("div");
    var node = document.createTextNode("'.$row["stu_name"].'");
    var aTag = document.createElement(\'a\');

    aTag.innerHTML="'.$row["stu_name"].'";';

    $_SESSION["stu_name"]=$row["stu_name"];
    
    echo '
    
    aTag.href="http://necsecgpa.42web.io/tutor_cgpa/tutor_cgpa/dashboard.php?name='.$row["stu_id"].'";

    
    para.appendChild(aTag);
    abc.appendChild(para);
    </script>  
    ';

        }
    } 
    else {
    echo "0 results";
    }
    echo '
    <script>
    var abc=document.getElementById("abcc");
    var para = document.createElement("div");
    var node = document.createTextNode("Add new");
    var aTag = document.createElement(\'a\');

    aTag.innerHTML="Add new";';

    // $_SESSION["stu_name"]=$row["stu_name"];
    
    echo '
    
    aTag.href="http://necsecgpa.42web.io/tutor_cgpa/tutor_cgpa/register.php";

    
    para.appendChild(aTag);
    abc.appendChild(para);
    </script>  
    ';

$conn->close();
?>

</body>
</html>