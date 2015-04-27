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
    <title>Catalogue</title>
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

    <!-- switch between rental and purchase -->
    <div id="switch">
        <form id="switch-form">
                <select id="rental-purchase">
                  <option value="rental">Rent</option>
                  <option value="purchase">Buy</option>
                </select>   
        </form>
    </div>

    <!-- filter of size, style, color, etc -->
    <div id="filter">
        <form id="filter-form">
                <ul id="filter-ul">
                    <li id="size" name="size" onclick="selectSize()">
                        Size
                    </li>
                    <li id="style" name="style" onclick="selectStyle()">
                        Style
                    </li>
                    <li id="color" name="color" onclick="selectColor()">
                        Color
                    </li>
                    <li id="type" name="type" onclick="selectType()">
                        Type
                    </li>
                </ul>

                <!-- options of size -->
                <ul id="filter-size" style="display:none">
                    <li>10</li>
                    <li>9</li>
                    <li>8</li>
                    <li>7</li>
                </ul>

                <!-- options of style -->
                <ul id="filter-style" style="display:none">
                    <li>Style1</li>
                    <li>Style2</li>
                    <li>Style3</li>
                    <li>Style4</li>
                </ul>

                <!-- options of color -->
                <ul id="filter-color" style="display:none">
                    <li>Red</li>
                    <li>White</li>
                    <li>Black</li>
                    <li>Blue</li>
                </ul>

                <!-- options of type -->
                <ul id="filter-type" style="display:none">
                    <li>Type1</li>
                    <li>Type2</li>
                    <li>Type3</li>
                    <li>Type4</li>
                </ul>
        </form>
    </div>

    <!-- gallery of items -->
    <div id="gallery">
        <!-- you can use a for loop to generate the img 
        and description dynamically by connecting with DB -->
        <div id="item1">
            <img src="" alt="placeholder1"/>
        </div>

        <div id="item2">
            <img src="" alt="placeholder2"/>
        </div>

        <div id="item3">
            <img src="" alt="placeholder3"/>
        </div>

        <div id="item4">
            <img src="" alt="placeholder4"/>
        </div>

        <div id="item5">
            <img src="" alt="placeholder5"/>
        </div>
        
        <div id="item6">
            <img src="" alt="placeholder6"/>
        </div>      
    </div>

    <script>
    function selectSize() {
        document.getElementById('filter-size').style.display = "block";
        document.getElementById('filter-style').style.display = "none";
        document.getElementById('filter-color').style.display = "none";
        document.getElementById('filter-type').style.display = "none";
    }
    function selectStyle() {
        document.getElementById('filter-size').style.display = "none";
        document.getElementById('filter-style').style.display = "block";
        document.getElementById('filter-color').style.display = "none";
        document.getElementById('filter-type').style.display = "none";
    }
    function selectColor() {
        document.getElementById('filter-size').style.display = "none";
        document.getElementById('filter-style').style.display = "none";
        document.getElementById('filter-color').style.display = "block";
        document.getElementById('filter-type').style.display = "none";
    }
    function selectType() {
        document.getElementById('filter-size').style.display = "none";
        document.getElementById('filter-style').style.display = "none";
        document.getElementById('filter-color').style.display = "none";
        document.getElementById('filter-type').style.display = "block";
    }
    </script>

</body>
</html>