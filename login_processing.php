<?php
session_start(); 
include "config.php";

if(isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = $_POST['password'];

    if(empty($uname)){
        header("Location: index.php?page=login&&error=User name is require");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?page=login&&error=Password is require");
        exit();
    }else{

        $pass = md5($pass);
        
		$sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
                setcookie("name", $uname, time() + (86400 * 30), "/");
                setcookie("role", $row['role'], time() + (86400 * 30), "/");

            	header("Location: index.php?page=home");
		        exit();
            }else {
				header("Location: index.php?page=login&&error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index.php?page=login&&error=Incorect User name or password");
	        exit();
		}
    }

}else{
    header("Location: index.php?page=login");
    exit();
}
