<!DOCTYPE html>
<?php
// session_start();
// echo $_GET['name'];
$servername = "sql104.infinityfree.com";
    $username = "if0_34376999";
    $password = "BJsLSq514Wgpk";
    $dbname = "if0_34376999_cgpa";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 else {
 }
$arr1=[
    '19SH11C' => 2,
    '19SH12C' => 4,
    '19SH13C' => 2,
    '19SH14C' => 2,
    '19CS11C' => 3,
    '19CS12C' => 3,
    '19SH16C' => 1.5,
    '19CS13C' => 2,
    'elective_1'=>3,
    'elective_2'=>3,
    'elective_3'=>3,
    'one_credit_1'=>1,
    'one_credit_2'=>1,
];
$sql = "SELECT * FROM semm1 where reg_no='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sum1=0;
$tot1=0;
foreach ($arr1 as $k => $v){

    if($row[$k]==-1){
             $tot1+=$arr1[$k];
    }
    else if($row[$k]*$arr1[$k]!=0){
        $sum1+=$row[$k]*$arr1[$k];
        $tot1+=$arr1[$k];
    }
}

// echo $sum1;
// echo "<br>";
// echo $tot1;
// echo "<br>";

$arr2=[
    '19CS21C' => 2,
    '19CS22C' => 4,
    '19CS23C' => 2,
    '19CS24C' => 2,
    '19CS25C' => 3,
    '19SH15C' => 4,
    '19CS26C' => 1.5,
    '19CS27C' => 2,
    '19GN01C' => 2,
    
    'elective_1'=>3,
    'elective_2'=>3,
    'elective_3'=>3,
    'one_credit_1'=>1,
    'one_credit_2'=>1

];

$sql = "SELECT * FROM sem2 where reg_no='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sum2=0;
$tot2=0;
foreach ($arr2 as $k => $v){

if($row[$k]==-1){
             $tot2+=$arr2[$k];
    }
    else if($row[$k]*$arr2[$k]!=0){
        $sum2+=$row[$k]*$arr2[$k];
        $tot2+=$arr2[$k];
    }
}

// echo $sum2;
// echo "<br>";
// echo $tot2;
// echo "<br>";

$arr3=[
    '19CS31C' => 4,
    '19CS32C' => 3,
    '19CS33C' => 3,
    '19CS34C' => 3,
    '19CS35C' => 4,
    '19CS36C' => 3,
    '19MC01C' => 0,
    '19CS37C' => 2,
    '19CS38C' => 2,
    '19CS39C'=>1,

    
    'elective_1'=>3,
    'elective_2'=>3,
    'elective_3'=>3,
    'one_credit_1'=>1,
    'one_credit_2'=>1,
    'one_credit_3'=>1

];

$sql = "SELECT * FROM sem3 where reg_no='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$sum3=0;
$tot3=0;
foreach ($arr3 as $k => $v){
    
if($row[$k]==-1){
             $tot3+=$arr3[$k];
    }
    else if($row[$k]*$arr3[$k]!=0){
        $sum3+=$row[$k]*$arr3[$k];
        $tot3+=$arr3[$k];
    }
    }

// echo $sum3;
// echo "<br>";
// echo $tot3;
// echo "<br>";

$arr4=[
    '19CS41C' => 4,
    '19CS42C' => 4,
    '19CS43C' => 3,
    '19CS44C' => 3,
    '19CS45C' => 3,
    '19CS46C' => 3,
    '19CS47C' => 1.5,
    '19CS48C' => 1.5,
    '19CS49C'=>1.5,
    'elective_1'=>3,
    'elective_2'=>3,
    'elective_3'=>3,
    'one_credit_1'=>1,
    'one_credit_2'=>1

];

$sql = "SELECT * FROM sem4 where reg_no='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sum4=0;
$tot4=0;
foreach ($arr4 as $k => $v){
    
if($row[$k]==-1){
             $tot4+=$arr4[$k];
    }
    else if($row[$k]*$arr4[$k]!=0){
        $sum4+=$row[$k]*$arr4[$k];
        $tot4+=$arr4[$k];
    }
    }

// echo $sum4;
// echo "<br>";
// echo $tot4;
// echo "<br>";

$arr5=[
    '19CS51C' => 4,
    '19CS52C' => 4,
    '19CS53C' => 3,
    '19CS54C' => 3,
    '19CS55C' => 3,
    '19MC02C' => 0,
    '19CS56C' => 1.5,
    '19CS57C' => 1.5,
    '19CS58C'=>1,

    'elective_1'=>3,
    'elective_2'=>3,
    'elective_3'=>3,
    'one_credit_1'=>1,
    'one_credit_2'=>1

];

$sql = "SELECT * FROM sem5 where reg_no='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sum5=0;
$tot5=0;
foreach ($arr5 as $k => $v){
    if($row[$k]==-1){
             $tot5+=$arr5[$k];
    }
    else if($row[$k]*$arr5[$k]!=0){
        $sum5+=$row[$k]*$arr5[$k];
        $tot5+=$arr5[$k];
    }
    }

// echo $sum5;
// echo "<br>";
// echo $tot5;
// echo "<br>";

$arr6=[
    '19CS61C' => 3,
    '19CS62C' => 4,
    '19CS63C' => 3,
    '19CS64C' => 2,
    '19CS65C' => 1.5,
    '19CS66C' => 1,
    '19CS67C'=>2,

    'elective_1'=>3,
    'elective_2'=>3,
    'elective_3'=>3,
    'one_credit_1'=>1,
    'one_credit_2'=>1

];

$sql = "SELECT * FROM sem6 where reg_no='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sum6=0;
$tot6=0;
foreach ($arr6 as $k => $v){
    if($row[$k]==-1){
             $tot6+=$arr6[$k];
    }
    else if($row[$k]*$arr6[$k]!=0){
        $sum6+=$row[$k]*$arr6[$k];
        $tot6+=$arr6[$k];
    }
    }

// echo $sum6;
// echo "<br>";
// echo $tot6;
// echo "<br>";

$arr7=[
    '19CS71C' => 1,
    '19CS72C'=>3,


    'elective_1'=>3,
    'elective_2'=>3,
    'elective_3'=>3,
    'one_credit_1'=>1,
    'one_credit_2'=>1

];



$sql = "SELECT * FROM sem7 where reg_no='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sum7=0;
$tot7=0;
foreach ($arr7 as $k => $v){
    
if($row[$k]==-1){
             $tot7+=$arr7[$k];
    }
    else if($row[$k]*$arr7[$k]!=0){
        $sum7+=$row[$k]*$arr7[$k];
        $tot7+=$arr7[$k];
    }
    }

// echo $sum7;
// echo "<br>";
// echo $tot7;
// echo "<br>";

$arr8=[
    '19CS81C' => 6,
     '19CS82C'=>2,


    'elective_1'=>3,
    'elective_2'=>3,
    'elective_3'=>3,
    'one_credit_1'=>1,
    'one_credit_2'=>1

];

$sql = "SELECT * FROM sem8 where reg_no='".$_GET['name']."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$sum8=0;
$tot8=0;
foreach ($arr8 as $k => $v){
    
if($row[$k]==-1){
             $tot8+=$arr8[$k];
    }
    else if($row[$k]*$arr8[$k]!=0){
        $sum8+=$row[$k]*$arr8[$k];
        $tot8+=$arr8[$k];
    }
    }

// echo $sum8;
// echo "<br>";
// echo $tot8;
// echo "<br>";
$cgpa=0;
$sum=$sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7+$sum8;
$tot=$tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7+$tot8;
if($tot!=0)
$cgpa=$sum/$tot;
// echo 'cgpa is '.$cgpa;

$sql = "UPDATE cgpa SET cgpa='$cgpa' where reg_no='".$_GET['name']."' ";
mysqli_query($conn, $sql);
?>
<html lang="en">
            <?php 
$servername = "sql104.infinityfree.com";
    $username = "if0_34376999";
    $password = "BJsLSq514Wgpk";
    $dbname = "if0_34376999_cgpa";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                else {
                }
            ?>
            <?php
                $arr1=[
                    '19SH11C' => 2,
                    '19SH12C' => 4,
                    '19SH13C' => 2,
                    '19SH14C' => 2,
                    '19CS11C' => 3,
                    '19CS12C' => 3,
                    '19SH16C' => 1.5,
                    '19CS13C' => 2,
                    'elective_1'=>3,
                    'elective_2'=>3,
                    'elective_3'=>3,
                    'one_credit_1'=>1,
                    'one_credit_2'=>1,
                ];
                $co=0;
                $sql = "SELECT * FROM semm1 where reg_no='".$_GET['name']."'";
                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result);
                $gpa = $row["gpa"];
                ?>
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
            #gpaa{
                font-family: 'Righteous', cursive;
                font-size: 30pt;
                font-weight: bolder;
                color: rgba(194, 32, 167, 0.356);
                text-shadow: 2px 2px white;
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
    <div class="row">
    <div class="head" id="stu_name">
        <?php 
        echo $row['name']."<br>CGPA : ".number_format((float)$cgpa, 2, '.', '');;
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
    <button id="sem1" onclick="sem_1()">Sem 1</button>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard2.php?name=<?php echo $_GET["name"] ?>"><button id="sem2" onclick="sem_2()">Sem 2</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard3.php?name=<?php echo $_GET["name"] ?>"><button id="sem3" onclick="sem_3()">Sem 3</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard4.php?name=<?php echo $_GET["name"] ?>"><button id="sem4" onclick="sem_4()">Sem 4</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard5.php?name=<?php echo $_GET["name"] ?>"><button id="sem5" onclick="sem_5()">Sem 5</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard6.php?name=<?php echo $_GET["name"] ?>"><button id="sem6" onclick="sem_6()">Sem 6</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard7.php?name=<?php echo $_GET["name"] ?>"><button id="sem7" onclick="sem_7()">Sem 7</button></a>
        <a href="/tutor_cgpa/tutor_cgpa/dashboard8.php?name=<?php echo $_GET["name"] ?>"><button id="sem8" onclick="sem_8()">Sem 8</button></a>


    </div>
    </div>
    <div id="abc">
    <div class="row" style="display: flex; justify-content: center;">
    <div id="sampp">
        <table id="samptt">
            <tr>
                <th>course</th>
                <th>credit</th>
                <th>grade</th>
               
            </tr>
            <?php 
$servername = "sql104.infinityfree.com";
    $username = "if0_34376999";
    $password = "BJsLSq514Wgpk";
    $dbname = "if0_34376999_cgpa";
    $conn = mysqli_connect($servername, $username, $password, $dbname);                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM semm1 where reg_no='".$_GET['name']."'";
                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result);
      
    
    

                ?>
            <form method="post" action="/tutor_cgpa/tutor_cgpa/dashboard1d.php?name=<?php echo $_GET["name"] ?>&sem=1">
            <?php    foreach ($arr1 as $k => $v) {  ?>
            <tr>
                <td><?php echo $k ?></td>
                <td><?php echo $v ?></td>
                <td><input type="number" name="<?php echo $k ?>"  id=<?php echo "'".$k."'" ?> value=<?php echo $row[$k] ?> /></td>
                <script>console.log(document.getElementById(<?php echo "'".$k."'" ?>))</script>
            </tr>
            <?php } ?>
            </table>
            <input type="submit" value="submit"/>
            </form>
            <?php 
            // foreach ($arr1 as $k => $v) {  
            //     echo "<script>console.log('".$_POST["19SH11C"]."')</script>";

            //     //  $sql1= "UPDATE semm1 set 19SH11C= $_POST[$k] where name=".$_GET["name"];

            //     //  mysqli_query($conn,$sql1);
            //  }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                foreach ($arr1 as $k => $v){
                    $sql1="UPDATE semm1 set $k=".$_POST[$k]." where reg_no=\"".$_GET['name']."\"";

                    mysqli_query($conn,$sql1);
                }

                $sql = "SELECT * FROM semm1 where reg_no='".$_GET['name']."'";
                $result = mysqli_query($conn, $sql);

                $row = mysqli_fetch_assoc($result);

                $sum1=0;
                $tot1=0;
                $gpa=0;
                foreach ($arr1 as $k => $v){
                    
         if($row[$k]==-1){
             $tot1+=$arr1[$k];
    }
    else if($row[$k]*$arr1[$k]!=0){
                        $sum1+=$row[$k]*$arr1[$k];
                        $tot1+=$arr1[$k];
                    }
                    }

            // $sql1="UPDATE semm1 set 19SH11C=".$_POST["19SH11C"].",19SH12C=".$_POST["19SH12C"]." ,19SH13C=".$_POST["19SH13C"]." ,19SH14C=".$_POST["19SH14C"]." ,19CS11C=".$_POST["19CS11C"]." ,19CS12C=".$_POST["19CS12C"]." ,19SH16C=".$_POST["19SH16C"]." ,19CS13C=".$_POST["19CS13C"]." where name=\"".$_GET['name']."\"";

            //      mysqli_query($conn,$sql1);

            echo "<script>console.log('".$sql1."')</script>";

            //**************gpaupdatecode**********//
                 if($tot1!=0)
                 $gpa=$sum1/$tot1;
                 echo "<script>console.log('".$sum1."')</script>";
                 echo "<script>console.log('".$tot1."')</script>";
                 echo "<script>console.log('".$gpa."')</script>";
                 $sql = "UPDATE semm1 SET gpa='$gpa' where reg_no='".$_GET["name"]."' ";
                 mysqli_query($conn, $sql);
                //  echo "<script>document.getElementById('gpaa').innerHTML=".$gpa."</script>";
                 // Close database connection
                //  mysqli_close($conn);
            //**************gpaupdatecode**********//
            echo "<meta http-equiv='refresh' content='0'>";

            } ?>
            

        
        </div>
    </div>
</div>

<div class="calci" style="width:100%; text-align:center">
        <h1 id="gpaa">GPA : <?php echo $gpa ?></h1>
</div>

</body>
<script>
    

            
        

    function sem_1(){

        
        document.getElementById("abc").style.display="block";


        
    }
</script>
</html>