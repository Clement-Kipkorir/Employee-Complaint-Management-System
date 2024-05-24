<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="../logreg.css">
</head>
<body>
  <header>
    <h1>Admin Dashboard</h1>
  </header>
  
  <nav>
    <ul>
      <li><a href="dashboard.html" class="button">Dashboard</a></li>
      <li><a href="users.html" class="button">Users</a></li>
      <li><a href="messages.html" class="button">Messages</a></li>
      <li><a href="create.html" class="button">Create</a></li>
      <li><a href="settings.html" class="button">General Settings</a></li>
      <li><a href="logout.html" class="button">Logout</a></li>
    </ul>
  </nav>

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
      </form>
</body>
</html>
