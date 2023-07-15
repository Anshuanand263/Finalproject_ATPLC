<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/styleall.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <h1>POORI </h1>
    <div class="main">

        <div>
            <a><img src="images/poori/p1.jpeg" alt="loading...">
                <h5>KAlam hotel</h5>
                <li>4.1</li>
                Poori sabji:-<i class="fa-solid fa-indian-rupee-sign"></i>100<br><button class="addcart">Add to
                    cart</button>

            </a>
        </div>
        <div>
            <a><img src="images/poori/p2.jpeg" alt="loading...">
                <h5>Anupurna</h5>
                <li>3.1</li>
                Panner pori:-<i class="fa-solid fa-indian-rupee-sign"></i>200<br><button class="addcart">Add to
                    cart</button>

            </a>
        </div>
        <div>
            <a><img src="images/poori/p3.jpeg" alt="loading...">
                <h5>Hot and cold</h5>
                <li>4.0</li>
                poori chatni:-<i class="fa-solid fa-indian-rupee-sign"></i>300<br><button class="addcart">Add
                    to cart</button>

            </a>
        </div>
    </div>
    <div class="main">
        <div>
            <a><img src="images/poori/p4.jpeg" alt="loading...">
                <h5>Gandhi hotel</h5>
                <li>3.8</li>
                kadhai panner and poori:-<i class="fa-solid fa-indian-rupee-sign"></i>100<br><button class="addcart">Add
                    to cart</button>

            </a>
        </div>
        <div>
            <a><img src="images/poori/p5.jpeg" alt="loading...">
                <h5>Punjabi hotel</h5>
                <li>3.1</li>
                homemade pori sabji:-<i class="fa-solid fa-indian-rupee-sign"></i>200<br><button class="addcart">Add
                    to cart</button>

            </a>
        </div>
        <div>
            <a><img src="images/poori/p6.jpeg" alt="loading...">
                <h5>Shiv mistan</h5>
                <li>4.0</li>
                poori and mix veg :-<i class="fa-solid fa-indian-rupee-sign"></i>300<br><button class="addcart">Add to
                    cart</button>

            </a>
        </div>
    </div>
    <div class="popup-cart">
        <form action="php/order.php" method="post">
            <h2> YOUR
                ORDER
            </h2>
            <div>

            </div>
            <input name="placeorder" type="text" placeholder="write your order for confirmation">
            <input type="text" name="name" placeholder="enter your name">
            <input type="number" name="phoneno" placeholder="enter your phone no">
            <input name="location" type="text" placeholder="enter your delivery location">
            <button class="placebutton"> Place Order</button>
            <button type="button" class="close-btn2">close</button>
        </form>
        <?php
        include "foooter.php";
        ?>
        <script src="scripts/javascript1.js"></script>
</body>

</html>