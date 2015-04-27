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


    <title>Cart</title>
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

    <div id="cart-item">
        <form action="">
            <!-- You can connect the database to generate  -->
            <div id="cart-item1">
                <img id="cartitem1" alt="placeholder1"/>
                <p>Description1</p>
                <input type="checkbox" id="Checkbox1" />
            </div>
            <div id="cart-item2">
                <img id="cartitem2" alt="placeholder2"/>
                <p>Description2</p>
                <input type="checkbox" id="Checkbox2" />
            </div>
            <div id="cart-item3">
                <img id="cartitem3" alt="placeholder3"/>
                <p>Description3</p>
                <input type="checkbox" id="Checkbox3" />
            </div>
        </form>
    </div>

    <div id="shipping">
        <div id="address-info">
            <p>Address1</p>
            <p>Address2</p>
        </div>
        <div id="ship-price">
            <h3>Shipping Price</h3>
            <p>The shipping price is: XXX</p>
        </div>
        <div id="total-price">
            <h3>Total Price</h3>
            <p>Total price is: XXX</p>
        </div>
        <button id="change-address">Change Address</button>
        <!-- checkout based on selected items -->
        <button id="checkout">Checkout</button>
    </div>

    <!-- I will change it to a thumbnail -->
    <div id="wishlist">
        <h3>Items in the wishlist</h3>
        <img id="cartitem" alt="placeholder1"/>
        <img id="cartitem" alt="placeholder1"/>
        <img id="cartitem" alt="placeholder1"/>
    </div>


</body>
</html>