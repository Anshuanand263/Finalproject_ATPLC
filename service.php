<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services </title>
    <style>
        body {
            background-image: url('https://th.bing.com/th/id/OIP.H0Nbz8D-F50XbECSKgEhjwHaDA?w=324&h=142&c=7&r=0&o=5&pid=1.7');
            background-size: cover;
            color: white;
        }

        .main2 {
            display: flex;

            justify-content: center;
            align-items: center;

        }

        .main2 .card {
            border: 3px solid rgb(245, 245, 245);
            margin: 5%;
            padding: 15px;

        }

        .main2 .card div {
            border: 1px solid rgb(255, 255, 255);


        }



        img {
            width: 100%;



        }

        h1 {
            text-align: center;
            background-color: dodgerblue;
            border-radius: 50px;
        }

        @media (max-width:720px) {
            .main2 {
                display: block;

            }
        }
    </style>
</head>

<body>

    <?php
    include "nav.php";
    ?>
    <h1>SERVICES</h1>

    <div class="main2">
        <div class="card">
            <div><img src="images/tut.jpeg" alt="" width="100">
                <h3>Tutorial</h3><span> videos</span>
                <ul>
                    <li>food ordering
                    </li>
                    <li>cancel order</li>
                    <li>how to get refund
                    </li>
                    <li> how to complain

                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div><img src="images/complain.jpeg" alt="" width="100">
                <h3>complaints</h3><span>24*7</span>
                <ul>
                    <li>order is not placed
                    </li>
                    <li>food is not deliver</li>
                    <li>food is not good
                    </li>
                    <li> for refund

                    </li>
                </ul>
            </div>
        </div>

    </div>

</body>

</html>