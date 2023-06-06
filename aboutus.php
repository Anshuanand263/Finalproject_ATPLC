<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABout us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
    <style>
        .main {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            margin: 20px;
            height: 350px;
            border: 3px solid black;
            width: 100%;
            padding: 3%;
        }

        .card div {
            border: 1px solid black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        ul {
            display: flex;
            gap: 15px;
            list-style: none;
        }

        .top {
            width: 100%;

        }

        .top img {
            width: 80%;
            margin-left: 10%;
            border-radius: 50px;
        }

        .head div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        body {
            background-color: rgb(176, 190, 216);
        }

        @media (max-width:720px) {
            .main {
                display: block;

            }
        }
    </style>
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <div class="top"><img src="images/about.jpeg"></div>

    <div class="head">
        <div>
            <h2>OUR TEAM</h2>
            <p>Food express is here for all</p>
        </div>
    </div>
    <div class="main">
        <div class="card">
            <div><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100">
                <h5>ANSHU ANAND</h5><span>CEO - Founder</span>
                <ul>
                    <li><a href=""><i class="fa fa-facebook-f"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/anshu_romeo?igshid=ZDdkNTZiNTM="><i
                                class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/in/anshu-anand-30526922b"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100">
                <h5>Manisha kumari</h5><span>CEO - Founder</span>
                <ul>
                    <li><a href="https://www.facebook.com/profile.php?id=100025318038093&mibextid=ZbWKwL"><i
                                class="fa fa-facebook-f"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/its_bittu_badshah?igshid=ZDdkNTZiNTM="><i
                                class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.linkedin.com/in/bittu-kumar-61aaa5235"><i class="fa fa-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card">
            <div><img src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100">
                <h5>Neha kumari</h5><span>CEO - Founder</span>
                <ul>
                    <li><a href="https://www.facebook.com/nitishkumar.bharti.18"><i class="fa fa-facebook-f"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://instagram.com/dominos_india?igshid=YmMyMTA2M2Y="><i
                                class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>