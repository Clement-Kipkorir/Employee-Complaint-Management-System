<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Registration</title>
  <link rel="stylesheet" href="logreg.css">
</head>
<body>
  <header>
    <h1>Register</h1>
  </header>
  <main>
    <form class="form-container" method="POST" action="reg.php">
      <label for="username">Employee Username:</label>
      <input type="text" id="username" name="username" placeholder="enter username" required autocomplete="off"><br><br>

      <label for="staff_number">Employee Staff Number:</label>
      <input type="text" id="staff_number" name="staff_number" placeholder="enter staff number"  autocomplete="off" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email"  autocomplete="off" placeholder="enter email" required><br><br>

      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone"  autocomplete="off" placeholder="enter phone number" required><br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password"  autocomplete="off" placeholder="enter password" required><br><br>

      <label for="confirm_password">Confirm Password:</label>
      <input type="password" id="confirm_password"  autocomplete="off"  placeholder="confirm password" name="confirm_password" required><br><br>

      <input type="submit" value="Register">
      
    <p>Already have an account? <a href="login.php"> Please Login</a></p>
    </form>
  </main>
</body>
</html>

