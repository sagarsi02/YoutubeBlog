<?php
    $connection = false;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include '_dbconnect.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        if (!$conn) {
            die ("Sorry we fail to connect". mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO `contact` (`user_name`, `user_email`, `user_subject`, `user_msg`, `user_date`) VALUES ('$name', '$email', '$subject', '$message', current_timestamp())";
            $result = mysqli_query($conn, $sql);
            if($result){
                $connection = true;
                header("location: /tech/contact.php?ConnectionSuccess=true");
                exit;
            }
        }
    }
