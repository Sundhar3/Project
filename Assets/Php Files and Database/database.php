<?php
$username = $_POST['username'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];
$old_date = "";
$new_date = date("d-m-y" , strtotime($old_date));
$new_date = $_POST['date'];
$symptoms = $_POST['symptoms'];

$conn = new mysqli ('localhost','root','','appointment');
if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
}else {
    $stmt = $conn->prepare("insert into form(username,email,number,date,symptoms)
            values(?,?,?,?,?)");
    $stmt->bind_param("ssiss", $username,$email,$number,$new_date,$symptoms);
    $stmt->execute();
    echo"Appointment Fixed...";
    $stmt->close();
    $conn->close();
}
?>
<br><br>
<a href="Webpage.html"><- Home</a><style>a{ font-size:20px}</style>
