<?php
include 'connection.php';
class project extends connection
{
    public function login()
    {
        session_start();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $password = $_POST["password"];
            $sql = "SELECT * FROM `users` WHERE email='$email'";
            $result = $this->conn->query($sql);
            $row = $result->fetch_assoc();
            $hashpassword = $row["password"];
            if (password_verify($password, $hashpassword)) {
                // $sql = "INSERT INTO `login_sucess`(`email`,`date_sucess`,`time_sucess`) VALUES ('$email','$date','$time')";
                // $result = $this->conn->query($sql);
                $_SESSION['users_id'] = $row['id'];
                $_SESSION['users_name'] = $row['name'];
                $_SESSION['users_email'] = $row['email'];
                $_SESSION['users_phone'] = $row['phone'];
                $_SESSION['users_address'] = $row['address'];
                $_SESSION['users_img'] = $row['img'];
                header("location:index.php");
                exit();
            } else {
                // $sql = "INSERT INTO login_error (`email`,`date_error`,`time_error`)values('$email','$date','$time')";
                // $result = $this->conn->query($sql);
                header('location:login.php?error=Inavlid username or password');
                exit();
            }
        }
    }
    public function register()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $email = $_POST["email"];
            echo $name;
            echo $email;
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            echo $password;
            $sql = "SELECT * FROM users WHERE `email`='$email'";
            $result = $this->conn->query($sql);
            if (mysqli_num_rows($result) > 0) {
                header('location:register.php?error=username or password not null');
                exit();
            } else {
                $sql = "INSERT INTO users(`name`,`email`,`password`)values('$name','$email','$password')";
                $result = $this->conn->query($sql);
                header("location:login.php");
                exit;
            }
        }
    }
}
$function =new project();