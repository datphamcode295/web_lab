<?php
session_start(); 
include "config.php";
if(isset($_POST['uname']) && isset($_POST['pass'])) {
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    $uname = validate($_POST['uname']);
    $pass = $_POST['pass'];
    $rpass = $_POST['rpass'];
    $name = $_POST['name'];
    
    $uppercase = preg_match('@[A-Z]@', $pass);
    $lowercase = preg_match('@[a-z]@', $pass);
    $number    = preg_match('@[0-9]@', $pass);
    $specialChars = preg_match('@[^\w]@', $pass);
    
    if(empty($uname)){
        header("Location: index.php?page=register&&error=User name is require");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?page=register&&error=Password is require");
        exit();
    }else if(empty($rpass)){
        header("Location: index.php?page=register&&error=Repeat password is require");
        exit();
    }else if(empty($name)){
        header("Location: index.php?page=register&&error=Name is required");
        exit();
    }else if($pass != $rpass){
        header("Location: index.php?page=register&&error=The confirmation password  does not match");
        exit();
    }else if(!filter_var($uname, FILTER_VALIDATE_EMAIL)){
        header("Location: index.php?page=register&&error=Invalid format for email");
        exit();
    }else if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($pass) < 8){
        header("Location: index.php?page=register&&error=Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character");
        exit();
    }else{
            $pass = md5($pass);
            $sql3 = "SELECT * FROM users WHERE 'username'='a'";
            $check =  $conn->query($sql3);
            if ($check) {
                echo "Table products created successfully\n";
            }else{
                echo("Error description: " . $conn -> error);
            }

            echo "Table products created successfully\n";

            
            if (mysqli_num_rows($check) > 0) {
                header("Location: index.php?page=register&&error=The username is taken try another");
                exit();
            }else {
               $sql2 = "INSERT INTO users(username, password, role, name) VALUES('$uname', '$pass', 0,'$name')";

               $result2 = mysqli_query($conn, $sql2);

               if ($result2) {
                   setcookie("name", $uname, time() + (86400 * 365), "/");
                   header("Location: index.php?page=home");
                exit();
               }else {
                    header("Location: index.php?page=register&&error=unknown error occurred");
                    exit();
               }
            }       
    }

}else{
    header("Location: register.php");
    exit();
}
