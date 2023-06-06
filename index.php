<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>khatkhatkhao.com</title>
    <link rel="stylesheet" href="styles/style.css">
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

    <section id="maincontent">
        <div id="menu">
            <a href="biryani.php">

                <img src="images/biryani.png">
                <p>Biryani</p>
            </a>

            <a href="northindian.php"><img src="images/northindian.png">
                <p>Northindian</p>
            </a>
            <a href="southindian.php"><img src="images/southindian.png">
                <p>Southindian</p>
            </a>
            <a href="chineese.php"><img src="images/chinese.png">
                <p>Chinese</p>
            </a>
            <a href="kebabd.php"><img src="images/kebab.png">
                <p>Kababs</p>
            </a>
            <a href="poori.php"><img src="images/poori.png">
                <p>Poori</p>
            </a>
            <a href="dosa.php"><img src="images/dosa.png">
                <p>Dosa</p>
            </a>
            <a href="idli.php"><img src="images/idli.png">
                <p>Idli</p>
            </a>
        </div>
        <div class="menu-popup">

            <h2 class="title"></h2>
            <div>



            </div>


            <button class="close-btn1">close</button>
        </div>
        <div id="foodcard">
            <div>
                <a class="card"><img src="images/8th.jpeg" alt="loading...">
                    <h5>KAlam hotel</h5>
                    <li>4.1</li>
                    <p>Chinese,Nothindian</p>

                </a>

                <a class="card"><img src="images/2nd.jpeg" alt="loading...">
                    <h5>Anupurna</h5>
                    <li>4.1</li>
                    <p>Southindian,nothindian</p>
                </a>

                <a class="card"><img src="images/4th.jpeg" alt="loading...">
                    <h5>Hot and cold</h5>
                    <li>4.1</li>
                    <p>chinese, Eggrolls</p>
                </a>

            </div>
            <div>
                <a class="card"><img src="images/5thy.jpeg" alt="loading...">
                    <h5>Gandhi hotel</h5>
                    <li>3.8</li>
                    <p>Northindian,Southindian</p>
                </a>

                <a class="card"><img src="images/6th.jpeg" alt="loading...">
                    <h5>Punjabi hotel</h5>
                    <li>3.1</li>
                    <p>Pnjabi Tadka etc</p>
                </a>

                <a class="card"><img src="images/7th.jpeg" alt="loading...">
                    <h5>Shiv mistan</h5>
                    <li>4.0</li>
                    <p>Sweets,rosogulla etc</p>
                </a>

            </div>
            <div>
                <a class="card"><img src="images/9th.jpeg" alt="loading...">
                    <h5>Shova hotel</h5>
                    <li>4.1</li>
                    <p>chinese,nothindian,Dosa etc</p>
                </a>

                <a class="card"><img src="images/11th.jpeg" alt="loading...">
                    <h5>Paradise hotel</h5>
                    <li>4.1</li>
                    <p>Biryani,chickenchilli</p>
                </a>

                <a class="card"><img src="images/12th.jpeg" alt="loading...">
                    <h5>Chaudary restro</h5>
                    <li>4.1</li>
                    <p> Momos and chinese noodels</p>
                </a>

            </div>

        </div>
        <div class="foodcard-popup">
            <img src="images/" alt="loading..">
            <h2 class="title"></h2>
            <h3>Desi swaad</h3>
            <ul>
                <b>
                    <li>choley bhature<br><i class="fa-solid fa-indian-rupee-sign"></i>152 </li><button
                        class="addcart">+</button>
                </b>

                <b>
                    <li>Extra bhature<br><i class="fa-solid fa-indian-rupee-sign"></i>48</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>Extra choley<br><i class="fa-solid fa-indian-rupee-sign"></i>81</li><button class="addcart"
                        href=".popup-cart">+</button>
                </b>

            </ul>
            <h3>South indian</h3>
            <ul>
                <b>
                    <li>Masala DOsa<br><i class="fa-solid fa-indian-rupee-sign"></i>150</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>Idli sambhar<br><i class="fa-solid fa-indian-rupee-sign"></i>120</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>Butter Masala Dosa<br><i class="fa-solid fa-indian-rupee-sign"></i>170</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>Spl Harilal Dosa<br><i class="fa-solid fa-indian-rupee-sign"></i>250</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>Vada Sambhar<br><i class="fa-solid fa-indian-rupee-sign"></i>120</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>PLain Dosa<br><i class="fa-solid fa-indian-rupee-sign"></i>130</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>Extra Idli<br><i class="fa-solid fa-indian-rupee-sign"></i>50</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>Onion Masala DOsa<br><i class="fa-solid fa-indian-rupee-sign"></i>170</li><button
                        class="addcart">+</button>
                </b>
                <b>
                    <li>Panner Dosa <br><i class="fa-solid fa-indian-rupee-sign"></i>210</li><button
                        class="addcart">+</button>
                </b>
                <h3>ROTI:-</h3>
                <b>
                    <li>
                        <p>Butter naan</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>50
                    </li><button class="addcart">+</button>
                </b>
                <b>
                    <li>
                        <p>Naan</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>20
                    </li><button class="addcart">+</button>
                </b>
                <b>
                    <li>
                        <p>Laccha paratha</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>50
                    </li><button class="addcart">+</button>
                </b>
                <b>
                    <li>
                        <p>Tandoori Roti</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>12
                    </li><button class="addcart">+</button>
                </b>
                <b>
                    <li>
                        <p>Garlic Naan</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>50
                    </li><button class="addcart">+</button>
                </b>
                <b>
                    <li>
                        <p>Masala Naan</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>60
                    </li><button class="addcart">+</button>
                </b>
                <b>
                    <li>
                        <p>Tandoori parathaS</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>30
                    </li><button class="addcart">+</button>
                </b>

                <li>
                    <h3>SALAD:-</h3>
                    <b>
                <li>
                    <p>onionmix</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>30
                </li><button class="addcart">+</button>
                </b>
                <b>
                    <li>
                        <p>special salad</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>30
                    </li><button class="addcart">+</button>
                </b>
                <b>
                    <li>
                        <p>Papad</p>:-<i class="fa-solid fa-indian-rupee-sign"></i>30
                    </li><button class="addcart">+</button>
                </b>

            </ul>
            <button class="close-btn">close</button>
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
        </div>

    </section>

    <div class="footer">
        <div class="row">

            <a href="https://instagram.com/anshu_romeo?igshid=ZDdkNTZiNTM="><i class="fa fa-instagram"></i></a>
            <a class="material-symbols-outlined">
                mail
            </a>
        </div>

        <div class="row">
            <ul>

                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="terms.php">Terms & Conditions</a></li>
                <li><a href="career.php">Career</a></li>
            </ul>
        </div>

        <div class="row">
            Copyright © 2021 - All rights reserved || Designed By:Anshu Anand
        </div>
    </div>

    <script src="scripts/javascript.js"></script>
</body>

</html>