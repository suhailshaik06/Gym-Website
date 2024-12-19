<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>

  <!-- Bootstrap 5 CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background: url('img/zoobg.jpg') no-repeat center center fixed;
      background-size: cover;
    }

    header {
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 10px 20px;
    }

    header h1 {
      display: flex;
      align-items: center;
    }

    header h1 img {
      margin-right: 10px;
    }

    .nav-links a {
      color: white;
      margin: 0 10px;
      text-decoration: none;
    }

    .nav-links a:hover {
      text-decoration: underline;
    }

    .registration-container {
      margin: 50px auto;
      max-width: 600px;
      padding: 20px;
      background: rgba(255, 255, 255, 0.9);
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.5);
    }

    .form-control:focus {
      box-shadow: none;
      border-color: #007bff;
    }

    .btn-primary {
      background-color: #007bff;
      border: none;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .registration-footer {
      text-align: center;
      margin-top: 20px;
    }

    .error {
      color: red;
      font-size: 0.9em;
      margin-top: -5px;
    }
  </style>
  
  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script>
    $(document).ready(function () {
      // Validate Full Name
      $("#nameError").hide();
      let nameError = true;
      $("#fullName").keyup(function () {
        validateFullName();
      });

      function validateFullName() {
        let fullName = $("#fullName").val();
        if (fullName.length === 0) {
          $("#nameError").show().html("**Full Name cannot be empty");
          nameError = false;
        } else if (fullName.length < 3) {
          $("#nameError").show().html("**Full Name must be at least 3 characters long");
          nameError = false;
        } else {
          $("#nameError").hide();
          nameError = true;
        }
      }

      // Validate Email
      const email = $("#email");
      let emailError = true;
      email.on("blur", function () {
        let regex = /^[\w\.-]+@[a-zA-Z0-9\.-]+\.[a-zA-Z]{2,6}$/;
        let emailValue = email.val();
        if (regex.test(emailValue)) {
          emailError = true;
        } else {
          emailError = false;
          $("#emailError").show().html("**Invalid email format");
        }
      });

      
      $("#passwordError").hide();
      let passwordError = true;
      $("#password").keyup(function () {
        validatePassword();
      });

      function validatePassword() {
        let password = $("#password").val();
        if (password.length === 0) {
          $("#passwordError").show().html("**Password cannot be empty");
          passwordError = false;
        } else if (password.length < 3 || password.length > 10) {
          $("#passwordError").show().html("**Password length must be between 3 and 10 characters");
          passwordError = false;
        } else {
          $("#passwordError").hide();
          passwordError = true;
        }
      }

      
      $("#confirmPasswordError").hide();
      let confirmPasswordError = true;
      $("#confirmPassword").keyup(function () {
        validateConfirmPassword();
      });

      function validateConfirmPassword() {
        let confirmPassword = $("#confirmPassword").val();
        let password = $("#password").val();
        if (confirmPassword !== password) {
          $("#confirmPasswordError").show().html("**Passwords do not match");
          confirmPasswordError = false;
        } else {
          $("#confirmPasswordError").hide();
          confirmPasswordError = true;
        }
      }

      
      $("#submitbtn").click(function () {
        validateFullName();
        validatePassword();
        validateConfirmPassword();
        email.trigger("blur");

        if (nameError && emailError && passwordError && confirmPasswordError) {
          return true;
        } else {
          return false;
        }
      });
    });
  </script>
</head>
<body>

<header>
  <nav class="d-flex justify-content-between align-items-center">
    <h1>
      <img src="img/logo.png" alt="Logo" width="50" height="50">
      Zoo Animal Protection
    </h1>
    <div class="nav-links">
      <a href="index.html" class="btn btn-link text-white">Home</a>
      <a href="adminlog.php" class="btn btn-link text-white">Admin Login</a>
    </div>
  </nav>
</header>

<div class="divider"></div>

<div class="registration-container">
  <h2 class="text-center">User Registration</h2>
  <form action="register.php" method="POST">
   
    <div class="mb-3">
      <label for="fullName" class="form-label">Full Name</label>
      <input type="text" id="fullName" name="fullName" class="form-control" placeholder="Enter Full Name" required>
      <span id="nameError" class="error"></span>
    </div>

    
    <div class="mb-3">
      <label for="email" class="form-label">Email Address</label>
      <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" required>
      <span id="emailError" class="error"></span>
    </div>

   
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
      <span id="passwordError" class="error"></span>
    </div>

   
    <div class="mb-3">
      <label for="confirmPassword" class="form-label">Confirm Password</label>
      <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm Password" required>
      <span id="confirmPasswordError" class="error"></span>
    </div>

    <div class="d-grid gap-2">
      <button type="submit" id="submitbtn" class="btn btn-primary">Register</button>
    </div>
  </form>

  
  <div class="registration-footer">
    <p>Already have an account? <a href="login.php">Login here</a></p>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
