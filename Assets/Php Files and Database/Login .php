<?php

    $email1    = $_POST['email1'];
    $password1 = $_POST['password1'];

    $conn = new mysqli ('localhost','root','','project1');
    if($conn->connect_error){
        die('connection failed :'.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into login(email1,password1)
                values(?,?)");
        $stmt->bind_param("ss", $email1,$password1);
        $stmt->execute();

        echo"Login Successfully...!";
        $stmt->close();
        $conn->close();
    }
?>
<br>
<br>
 <a href = "Appointment.html"><- Appointment</a><style> a{font-size:20px;} </style>