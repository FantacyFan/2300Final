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


        <!-- Thumbnail to show the item in different angles -->
       <div id="thumbnail">
          <button class="next">Next</button>
          <button class="prev">Previous</button>
          <div class="container">
            <div style="display: inline-block;">
              <img src="http://placeimg.com/400/200/people"/>
            </div>
            <div>
             <img src="http://placeimg.com/400/200/any"/>
            </div>
            <div>
              <img src="http://placeimg.com/400/200/nature"/>
            </div>
            <div>
              <img src="http://placeimg.com/400/200/architecture"/>
            </div>
            <div>
              <img src="http://placeimg.com/400/200/animals"/>
            </div>
            <div>
              <img src="http://placeimg.com/400/200/people"/>
            </div>
            <div>
              <img src="http://placeimg.com/400/200/tech"/>
            </div>
          </div>
        </div>

        <!-- the detailed description of item -->
        <div id="item-description">
          <h3>Description</h3>
          <p>
            Here is the description, Here is the description, Here is the description, Here is the description
            Here is the description, Here is the description, Here is the description, Here is the description
            Here is the description, Here is the description, Here is the description, Here is the description
            Here is the description, Here is the description, Here is the description, Here is the description
          </p>
        </div>

        <div id="buttons">
          <button>Add to Cart</button>
          <button>Add to Wishlist</button>
        </div>
        <!-- other related items' img -->
        <div id="related-img">
          <h3>Here should be a thumbnail slider</h3>
          <img id="item1" src="" alt="placeholder1"/>
          <img id="item2" src="" alt="placeholder2"/>
          <img id="item3" src="" alt="placeholder3"/>
          <img id="item4" src="" alt="placeholder4"/>
        </div>



    <script>
    $(document).ready(function() {
        var currentIndex = 0,
          items = $('.container div'),
          itemAmt = items.length;

        function cycleItems() {
          var item = $('.container div').eq(currentIndex);
          items.hide();
          item.css('display','inline-block');
        }

        var autoSlide = setInterval(function() {
          currentIndex += 1;
          if (currentIndex > itemAmt - 1) {
            currentIndex = 0;
          }
          cycleItems();
        }, 3000);

        $('.next').click(function() {
          clearInterval(autoSlide);
          currentIndex += 1;
          if (currentIndex > itemAmt - 1) {
            currentIndex = 0;
          }
          cycleItems();
        });

        $('.prev').click(function() {
          clearInterval(autoSlide);
          currentIndex -= 1;
          if (currentIndex < 0) {
            currentIndex = itemAmt - 1;
          }
          cycleItems();
        });
    });
    </script>
</body>
</html>