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

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div>
        <?php
        include "connection.php";
        $sql = "DELETE FROM placedorder";
        if ($con->query($sql) == true) {
            echo "<h1>your order is cancel</h1>";
        } else {
            echo "<h2>order is not yet placed</h2>";
        }
        echo "<h2>For another order go backward,Thankyou</h2><br>
       ";
        ?>
        <button> <a href="../index.php">home</a></button>
    </div>

</body>

</html>