<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Login</title>

 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Pacifico&display=swap" rel="stylesheet">

  <style>
 
    body {
      background: url('https://www.w3schools.com/w3images/lights.jpg') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Roboto', sans-serif;
    }

    header {
      background-color: rgba(0, 0, 0, 0.7);
      color: white;
      padding: 15px 20px;
    }

    header h1 {
      font-family: 'Pacifico', cursive;
      font-size: 28px;
    }

    .nav-links a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-size: 18px;
    }

    .nav-links a:hover {
      text-decoration: underline;
      color: #f1c40f;
    }

    
    .login-container {
      margin: 100px auto;
      max-width: 400px;
      padding: 30px;
      background: rgba(255, 255, 255, 0.8);
      border-radius: 10px;
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
      transition: transform 0.3s ease-in-out;
    }

    
    .login-container:hover {
      transform: scale(1.05);
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

    .footer {
      text-align: center;
      margin-top: 20px;
      font-size: 16px;
    }

   
    @media (max-width: 767px) {
      header h1 {
        font-size: 20px;
      }

      .login-container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<header>
  <nav class="d-flex justify-content-between align-items-center">
    <h1>
      <img src="img/logo.png" alt="Logo" width="50" height="50">
      Zoo Animal Protection
    </h1>
    <div class="nav-links">
      <a href="index.html">Home</a>
      <a href="adminlog.php">Admin Login</a>
    </div>
  </nav>
</header>


<div class="login-container">
  <h2 class="text-center mb-4">User Login</h2>
  <form action="login_check.php" method="POST">
    <!-- Username -->
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" id="username" name="email" class="form-control" placeholder="Enter Email" required>
    </div>

    <!-- Password -->
    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required>
    </div>

    <!-- Login Button -->
    <div class="d-grid gap-2">
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </form>

  <!-- Footer Section -->
  <div class="footer">
    <p>Don't have an account? <a href="userlogin.php">Register</a></p>
  </div>
</div>

<!-- Bootstrap 5 JS and Popper.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
