<!DOCTYPE html>
<html lang="tl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barangay Website - Mag-sign In</title>
  <link rel="stylesheet" href="styles.css">
  
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .container {
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 15px;
    }
    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    button {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }
    button:hover {
      background-color: #0056b3;
    }
    .success {
      color: green;
      margin-top: 10px;
      text-align: center;
    }
    .error {
      color: red;
      margin-top: 10px;
      text-align: center;
    }
    p {
      text-align: center;
      margin-top: 15px;
    }
    a {
      color: #007bff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <?php
    // Include the language file (replace 'tl' with the actual filename if different)
    include('languages/tl.php');
  ?>
  <div class="container">
    <h2><?php echo $translations['sign_in']; ?></h2>
    <?php if (isset($error)) { ?>
      <p class="error"><?php echo $error; ?></p>
    <?php } ?>
    <?php if (isset($success)) { ?>
      <p class="success"><?php echo $success; ?></p>
    <?php } ?>
    <form action="login.php" method="POST">
      <div class="form-group">
        <label for="username"><?php echo $translations['username']; ?></label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password"><?php echo $translations['password']; ?></label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit" name="signup"><?php echo $translations['sign_in']; ?></button>
    </form>
    <p>Wala ka pa bang account? <a href="signup.php">Mag-sign Up</a></p>
  </div>
</body>
</html>