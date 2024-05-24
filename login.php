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
    <h1>Login</h1>
  </header>
  <main>
    <form class="form-container" method="POST" action="log.php">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email"  autocomplete="off" placeholder="enter email" required><br><br>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password"  autocomplete="off" placeholder="enter password" required><br><br>

      <input type="submit" value="Login">
      <p>Don't have an account? <a href="register.php"> Please Register</a></p>
    </form>
  </main>
</body>
</html>

