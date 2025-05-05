<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <script src="https://kit.fontawesome.com/fb10adb104.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
   <div class="main-body" id="Home">
    <nav>
        <div class="logo">
            <img src="images\Rojot-removebg-preview.png" alt="">
        </div>
        <div class="right-nav">
            <ul>
                <li>
                    <a href="#Home">Home</a>
                </li>
                <li>
                    <a href="">Services</a>
                </li>
                <li>
                    <a href="">About us</a>
                </li>
                <li>
                    <a href="">Contact us</a>
                </li>
                <li class="cart_box">
                        <a style="border: 0px;padding: 0px;" href=""><img class="cart_img" src="images/shopping-cart.png" alt=""></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="section1">
        <h1>
            We The Fastest In Delivering Your Food
        <p>
            Where Quality Meets Convenience, and Flavor Meets Speed. Enjoy Your Meals with Peace of Mind, Knowing We've Got the Delivery Covered.
        </p>
        <form action="indexy.php" method="post" class="search">
            <input type="search" placeholder="  Burger..." name="search" id="search-box" >
            <input type="submit" value="Search" name="submit" id="search-button">
        </form>
        <!-- <a href="#" class="view_more">View Menu</a> -->
    </div>
   </div>
   <?php
$con = new PDO("mysql:host=localhost;dbname=food_odering", 'root', '');

if (isset($_POST["submit"])) {
    $str = $_POST["search"];
    $sth = $con->prepare("SELECT * FROM `users` WHERE username = :name");
    $sth->bindParam(':name', $str);
    $sth->setFetchMode(PDO::FETCH_OBJ);
    $sth->execute();

    if ($row = $sth->fetch()) {
        // Store the data in session to pass to the new page
        session_start();
        $_SESSION['search_result'] = $row;
        
        // Redirect to a new page to display the result
        header("Location: search_results.php");
        exit; // Ensure that no more content is sent
    } else {
        
        echo "Name Does not exist";
    }
}
?>

   <div class="section2">
    
    <div class="box1">
        <img src="images/free-truck-icon-1058-thumb.png" alt="">
        <br><p>Easy to order</p>
        <br><p style="text-align: center;">Dynamically maximize word-class process improvement</p>
    </div>
    
    <div class="box1">
        <img src="images/free-truck-icon-1058-thumb.png" alt="">
        <br><p>Fastest Delivery</p>
        <br><p style="text-align: center;">Dynamically maximize word-class process improvement</p>
    </div>
    
    <div class="box1">
        <img src="images/free-truck-icon-1058-thumb.png" alt="">
        <br><p>Best Quality</p>
        <br><p style="text-align: center;">Dynamically maximize word-class process improvement</p>
    </div>
    <div class="box1">
        <img src="images/free-truck-icon-1058-thumb.png" alt="">
        <br><p>Stylish Food</p>
        <br><p style="text-align: center;">Dynamically maximize word-class process improvement</p>
    </div>
    <!-- <div class="box1">Best Quality</div>
    <div class="box1">Best Taste</div> -->
   </div>
   <div class="section3">
    <h1>
        Foods we offer
    </h1>
    <h2>
        Category
    </h2>
    <div class="tab-titles">
        <p class="tab-links active-link" onclick="opentab('Indian')">Indian</p>
        <p class="tab-links" onclick="opentab('Chinese')">Chinese</p>
        <p class="tab-links" onclick="opentab('American')">American</p>
      </div>

      <div class="tab-contents active-tab " id="Indian" >
        <ul>
          <li>First box for indian</li>
        </ul>
      </div>

      <div class="tab-contents " id="Chinese">
        <ul>
          <li>First box for chinese</li>
        </ul>
      </div>

      <div class="tab-contents" id="American">
        <ul>
          <li>First box for American</li>
        </ul>
      </div>
    
   </div>








   <footer>
    <div class="foot1">
        <div class="food">
            Foodish
        </div>
        <br>
        Continue foodish 2023 all rights reserved
    </div>
    <div class="foot2"><h1>Menu</h1>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">Offers</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">About us</a></li>
        </ul></div>
    <div class="foot3"><h1>Information</h1>
        <ul>
            <li><a href="">Menu</a></li>
            <li><a href="">Quality</a></li>
            <li><a href="">Fast delivery</a></li>
            <li><a href="">Contact us</a></li>
        </ul></div>
    <div class="foot4">
        <div class="social">
            <h1>
                Follow us on
            </h1>
                <ul>
                    <li><a href="">Instagram</a></li>
                    <li><a href="">Facebook</a></li>
                    <li><a href="">Twitter</a></li>
                    <li><a href="">Linkedin</a></li>
                </ul>
        </div>
    </div>
   </footer>
   


   <script>

    var tablinks =document.getElementsByClassName("tab-links");
    var tabcontents=document.getElementsByClassName("tab-contents");
    function opentab(tabname)
    {
      for(tablink of tablinks)
      {
        tablink.classList.remove("active-link");
      }

      for(tabcontent of tabcontents)
      {
        tabcontent.classList.remove("active-tab");
      }


      event.currentTarget.classList.add("active-link");
      document.getElementById(tabname).classList.add("active-tab");
    }

  </script>
</body>
</html>