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
        <h1>your order</h1>
        <?php
        include "connection.php";
        $sql = "SELECT * FROM placedorder";
        $result = mysqli_query($con, $sql) or die("query is not working");
        while ($row = mysqli_fetch_assoc($result)) {
            echo ":" . $row['placeorder'] . "<br>";
        }

        ?>
        <button> <a href="../index.php">home</a></button>
        <form action="cancel.php">
            <button>Cancel order</button>
        </form>
    </div>

</body>

</html>