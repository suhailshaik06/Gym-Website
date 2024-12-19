<?php
include('dbconfig.php'); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    if (isset($_POST['fullName'], $_POST['email'], $_POST['password'], $_POST['confirmPassword'])) {

       
        $full_name = mysqli_real_escape_string($conn, $_POST['fullName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = trim($_POST['password']);
        $confirmPassword = trim($_POST['confirmPassword']);

       

    
        if ($password != $confirmPassword) {
            echo "Passwords do not match!";
            exit;  
        }

        
        $sql = "INSERT INTO user (name, email, password) VALUES (?, ?, ?)";

        
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password); 

        
        if ($stmt->execute()) {
            echo "<script>alert('Registered Successful')</script>";
        } else {
            echo "Error: " . $stmt->error;
        }

      
        $stmt->close();
    } else {
        echo "Please fill in all fields!";
    }

    $conn->close();
}
?>
