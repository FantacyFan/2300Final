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


    <title>Profile</title>
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

    <div id="sidebar">     
            <ul>
                <li><a href="#userinfo">User Information</a></li>
                <li><a href="#history">Rental & Purchase<br>&nbsp;&nbsp;History</a></li>
                <li><a href="#wl">WishList</a></li>
            </ul>
    </div>

    <div id="main-content">
        <div id="userinfo">
            Here is basic user information
            <form>
                <p>
                Name: <input type="text" name="name" value="" size="25" maxlength="50" />
                </p>
                <p>
                Email: <input type="text" name="emao;" value="" size="25" maxlength="50" />
                </p>
                <p>
                Size: <input type="text" name="size;" value="" size="25" maxlength="50" />
                </p>
                <p>
                Color: <input type="text" name="color;" value="" size="25" maxlength="50" />
                </p>
                <button type="submit">Submit</button>
            </form>
        </div>

        <div id="history">
            Here is rental or purchase history
        </div>

        <div id="wl">
            Here is wishlist
        </div>
    </div>
</body>
</html>