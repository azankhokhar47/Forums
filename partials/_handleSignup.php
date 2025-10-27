<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';

    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    $exitsql = "SELECT * FROM `users` WHERE user_email = '$user_email'";
    $result = mysqli_query($conn, $exitsql);
    $numRows = mysqli_num_rows($result);
    $showError = "";
    if($numRows > 0){
        $showError = "Email already in use";
        print("Error num rows > 0");
    }
    else if($pass == $cpass){
        $hash = password_hash($pass, PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (`user_email`, `user_pass`, `timestamp`) 
                VALUES ('$user_email', '$hash', current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if($result){
            print("Reuslt k andar agya");
            $showAlert = true;
             header("Location: ../index.php?signupsuccess=true");
        }
    }
    else {
        $showError = "Passwords do not match";
        print("Passowrd not match");
    }
}

    header("location: ../index.php?signupsuccess=false&error=$showError");
?>