<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "food_odering";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $username = $conn->real_escape_string($_POST['username']); // Using real_escape_string to prevent SQL injection
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username; // Store username in session for further use (e.g., on 'index.php')
            header("Location: index.php"); // Redirect on successful login
            exit();
        } else {
            $error = "Incorrect password";
        }
    } else {
        $error = "User not found";
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Log in</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="container">
      <div class="contain">
          <h1>Log in</h1>
          <form action="login.php" method="post">
            <ul>
                <li><label class="labels"><input placeholder="Username" type="text" name="username" /></label></li>
                  <li><label class="labels"><input placeholder="Password"  type="password" name="password" /></label></li>
                  <li><input class="last-but" type="submit" value="Login" /></li>
                  <li><a class="already" href="register.php">Don't have a account?<span> sign up</span></a></li>
            </ul>
          </form>
                <?php
                if (isset($error)) {
                    echo "<p class='error'>$error</p>";
                }
                ?>
            </div>
    </div>
  </body>
</html>
