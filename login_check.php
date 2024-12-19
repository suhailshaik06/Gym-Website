<?php

include('db_config.php'); 


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['email'], $_POST['password'])) {
        
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        
        $sql = "SELECT * FROM userlogin WHERE email = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Error in query preparation: " . $conn->error);
        }

        
        $stmt->bind_param("s", $email);
        $stmt->execute();

       
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            
            if ($password === $user['password']) { 
                echo "Login successful!";
                
                header("Location: index.html");
                exit;
            } else {
                echo "<script>alert('Invalid password');</script>";
            }
        } else {
            echo "<script>alert('no existing user create new account');</script>";
        }

       
        $stmt->close();
    } else {
        echo "<script>alert('fill both password and Email');</script>";
    }

    
    $conn->close();
}
?>
