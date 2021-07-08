<?php
    $login = false;
    $showError = false;
    $ShowPassError = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include '_dbconnect.php';
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "Select * from admin where username = '$username'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['username'] = $username;
                    header("location: /tech/dashboard.php");
                }
                else{
                    $ShowPassError = "Password was Wrong";
                    header("location: /tech/login.php?password=false&error=$ShowPassError");
                }
            }
        }
        else{
            $showError = "Username is not exist";
            header("location: /tech/login.php?username=false&error=$showError");
        }
    }

?>