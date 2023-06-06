<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background: beige;
        }

        div {
            background: oldlace;
            font-family: 'Instrument Serif', serif;
            font-size: 30px;
            text-align: center;
            padding: 2%;
            margin: 5% 25%;
            border: 3px solid black;
            border-radius: 50px;
        }

        @media (max-width:720px) {
            div {
                font-size: 20px;
                padding: 0%;
                margin: 5% 0%;
            }
        }
    </style>
</head>

<body>
    <div>

        <?php
        include "connection.php";
        $loc = $_POST['location'];
        $name = $_POST['name'];
        $phoneno = $_POST['phoneno'];
        $placeorder = $_POST['placeorder'];
        $sql = "insert into `foodexpress`.`placedorder`(`loc`,`name`,`phoneno`,`placeorder`) values('$loc','$name','$phoneno','$placeorder')";
        if ($con->query($sql) == true) {
            echo "<h1>your order is placed,delivery on time</h1>";
        } else {
            echo "<h1>order again</h1>";
        }
        echo "<h2>For another order go backward,Thankyou</h2>";
        ?>
        <button> <a href="../index.php">home</a></button>
        <form action="cancel.php">
            <button>Cancel order</button>
        </form>

    </div>

</body>

</html>