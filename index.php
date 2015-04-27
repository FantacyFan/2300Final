<!DOCTYPE html>
<html>

<head>
    <!-- character encoding of my website -->
    <meta charset="UTF-8" />	   
    <!-- icon on the topleft of your browser tab -->
    <link rel="icon" href="assets/icon.png" />      
    <!-- external CSS file -->    
    <link type='text/css' rel="stylesheet" href="css/style.css" />	   
    <!-- google fonts external CSS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,200' rel='
    stylesheet' type='text/css'>
    <!-- external jQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- external JS --> 
    <script src="js/script.js"></script>
    <!-- text that appears on the browser tab -->
    <title>SoleScription</title>
</head>

<body>
    <div id="nav-wrapper">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="catalogue.php">Catalogue</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="cart.php">Cart</a></li>
        </ul>
        <div id="login-wrapper">
            <form id="login-form">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="password" placeholder="Password">
                <input type="submit" name="login" value="Log In">
            </form>
        </div>
    </div>
    <div id="content-wrapper">
        <div id="homepage-image">
            <div id="homepage-text-wrapper">
                <h1>SoleScription</h1>
                <hr>
                <p>Together we can give others a leg up.</p>
                <p id="button">Find out more</p>
            </div>
        </div>
        <div id="howitworks-wrapper">
            <h1>Here's how it works</h1>
            <hr class="dark">
            <ul id="howitworks-list">
                <li>
                    <img class="number" src="assets/num1.png" alt=""><br>
                    Sign up and become a monthly subscriber
                </li>
                <li>
                    <img class="number" src="assets/num2.png" alt=""><br>
                    Receive one pair of your favorite shoes at your doorstep
                </li>
                <li>
                    <img class="number" src="assets/num3.png" alt=""><br>
                    Return them when you are done and receive the next pair ...
                    <br><br>
                    ... or just buy them at a discounted Members only price!
                </li>
            </ol>
        </div>
        <div id="homepage-bottom-image">
        </div>
    </div>
</body>

</html>