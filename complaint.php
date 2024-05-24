<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submit a Complaint</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Submit a Complaint</h1>
  </header>
  
  <nav>
    <ul>
      <li><a href="home.html" class="button">Home</a></li>
      <li><a href="complaint.html"  class="button">Submit a Complaint</a></li>
      <li><a href="feedback.html"  class="button">Messages</a></li>
      <li><a href="logout.html"  class="button">Logout</a></li>
    </ul>
  </nav>

  <main>
    
    <h2 style="text-align: center;">Register a Complaint</h2>
    <form class="form-container">
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" required><br><br>

      <label for="staff_number">Employee Staff Number:</label>
      <input type="text" id="staff_number" name="staff_number" required><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>

      <label for="contact_number">Contact No:</label>
      <input type="tel" id="contact_number" name="contact_number" required><br><br>

      <label for="subject">Subject:</label>
      <input type="text" id="subject" name="subject" required><br><br>

      <label for="complaint">Complaint:</label><br>
      <textarea id="complaint" name="complaint" rows="4" cols="50" required></textarea><br>

      <label for="file">Upload File:</label>
      <input type="file" id="file" name="file"><br><br>


      <input type="submit" value="Submit">
    </form>
  </main>
</body>
</html>
