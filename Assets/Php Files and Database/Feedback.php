<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedback";

$conn = new mysqli('localhost','root','','feedback');
if ($conn->connect_error) {
    die("connection failed:" .$conn->connect_error);
}
$username = $_POST['username3'];
$email = $_POST['email3'];
$feedback = $_POST['feedback'];

 $sql = "insert into fbform(username,email,feedback)values('$username','$email','$feedback')";
if($conn->query($sql)===true){
    echo"Feedback Submitted Successfully..";
}else{
    echo "error:" .$sql . "<br>". $conn->error;
}
$conn->close();
?>
<br><br>
<a href="Webpage.html"><- Home</a><style>a{ font-size:20px}</style>
