<?php
    // $firstName = $_GET['firstName'];
    // $lastName = $_GET['lastName'];
    // $email = $_GET['email'];
    // $password = $_GET['password'];

    $conn = new mysqli('localhost', 'root', '', 'db_mosh');
    if($conn->connect_error){
        die('Connection Failure : ' .$conn->connect_error);
    } else {          
        // $stmt = $conn->prepare("INSERT INTO registration(firstName, lastName, email, password) VALUES (?, ?, ?, ?)");
        // $stmt->bind_param("ssss", $firstName, $lastName, $email, $password);
        // $stmt->execute();
        // echo "Registration Successfully...";
        // $stmt->close();
        // $conn->close();
    }

    if (isset($_POST['signup'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "INSERT INTO signup (firstName, lastName, email, password) VALUES ('{$firstName}', '{$lastName}', '{$email}', '{$password}')";
        if ($conn->query($sql) === TRUE) {
            // echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
?>