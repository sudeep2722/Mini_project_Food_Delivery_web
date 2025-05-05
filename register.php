<!DOCTYPE html>
<html>
  <head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="register.css" />
  </head>
  <body>
    <div class="container">
      <div class="contain">
        <h1>Sign Up</h1>
        <form action="register.php" method="post">
            <ul>
                <li><label> <input type="text" placeholder="Username" name="username" required /></label</li>
                <li><label> <input type="password" placeholder="Password" name="password" required /></label></li>
                <li><label><input type="text" placeholder="name123@gmail.com" name="email" required /></label></li>
                <li><input class="last-but" type="submit" value="Register" /></li>
                <li><a class="already" href="login.php">Already have a account<span> sign in</span></a></li>
            </ul>
          
        </form>
        
     

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "food_odering";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Get user input
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password
        $email = $_POST['email'];

        // Insert user data into the database
        $sql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<div id='success-message' style='display: block;'>Registration successful. Please log in to your account.</div>";
            echo "<script>
                setTimeout(function() {
                    document.getElementById('success-message').style.display = 'none';
                    window.location.href = 'login.php';
                }, 2500); // Hide message and redirect after 2 seconds
              </script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close(); 
    }
    ?>
     </div>
    </div>
</body>
</html>
