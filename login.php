<?php
// if($_SERVER['REQUEST_METHOD']=='POST')
// { 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "cgpa";
// $conn = new mysqli($servername, $username, $password, $dbname);
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }
// if(!empty($_POST['tutorid']) && !empty($_POST['password'])) { 
// $user=$_POST['tutorid']; 
// $pass=$_POST['password']; 
// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }


// echo($_POST['tutorid']);
// echo($_POST['password']);
// $sql = "SELECT * FROM `tutor` WHERE tutorid='".$user."' AND 
// password='".$pass."'";
// $result = $conn->query($sql);
// ob_start();
// if ($result->num_rows > 0) {
// while($row = $result->fetch_assoc()) {
// $useremail = $row['tutorid'];
// $password = $row['password'];
// }
// if($useremail==$user && $pass==$password)
// {
// session_start();
// $_SESSION['sess_user']=$user;
// header("Location: tutorward.php");
// }
// }
// else{
// echo "<script> alert('Invalid tutorid or password!') </script>";
// }
// }
// else{
// echo "All fields are required!";
// }
// }

$servername = "sql104.infinityfree.com";
    $username = "if0_34376999";
    $password = "BJsLSq514Wgpk";
    $dbname = "if0_34376999_cgpa";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$user=$_POST['tutorid']; 
$pass=$_POST['password']; 
$sql = "SELECT * FROM tutor WHERE tutor_name='".$user."' AND password='".$pass."'";
// $result = $conn->query($sql);
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
echo $sql;
// echo $result;
if(mysqli_num_rows($result)){
    session_start();
    $_SESSION['sess_user']=$user;
    header("Location: tutorward.php");
}
else{
    echo "<script> alert('Invalid tutorid or password!') </script>";
}


?>
