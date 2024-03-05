<?php
    include("db_mosh"); // Pastikan ini koneksi ke database

    if($_SERVER['REQUEST_METHOD']=="POST"){
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Lakukan validasi
        if(!empty($email) && !empty($password) && !is_numeric($email)){
            // Lakukan koneksi ke database dan eksekusi query
            $query = "SELECT * FROM login WHERE email = '$email' LIMIT 1";
            $result = mysqli_query($con, $query);
            if($result && mysqli_num_rows($result) > 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password){
                    echo "SUKSES";
                } else {
                    echo "Password salah";
                }
            } else {
                echo "Email tidak ditemukan";
            }
        } else {
            echo "Email atau password tidak valid";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="" method="POST">
            <input type="email" name="email">
            <input type="password" name="password">
            <input type="submit" name="submit" value="Login">
        </form>
    </div>
</body>
</html>