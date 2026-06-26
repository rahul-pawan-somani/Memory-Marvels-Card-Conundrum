<?php
$username = htmlspecialchars($_COOKIE["username"] ?? "Current player", ENT_QUOTES, "UTF-8");
$score = htmlspecialchars($_COOKIE["score"] ?? "Not saved", ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pairs Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="navbar_styles.css">
    <style>
        body {
            background-image: url('arcade-unsplash.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }

        .heading {
            margin-top: 50px;
            font-family: 'GeorgiaPro-Black';
            text-align: center;
            color: greenyellow;
            font-size: 88px;
            font-weight: bold;
            text-shadow: 6px 6px 6px #333, -2px -2px 2px #333, 2px -3px 3px #333, -3px 3px 3px #333;
        }

        .heading::before {
            content: "";
            position: absolute;
            left: 490px;
            width: 565px;
            height: 115px;
            z-index: -1;
            background-color: orangered;
            transform: skew(-30deg);
            box-shadow: inset 0px 0px 0px 1px purple, 12px 12px 12px rgb(0, 0, 0);
            border: 4px solid purple;
            box-sizing: border-box;
        }

        #leaderboard {
            margin-left: 545px;
            margin-top: 40px;
            background-color: grey;
            border: 3px solid orange;
        }

        table {
            border-spacing: 2px;
        }

        th {
            padding-left: 50px;
            padding-right: 50px;
            font-size: 28px;
            font-weight: bolder;
            color: greenyellow;
            background-color: blue;
        }

        td {
            padding-left: 50px;
            padding-right: 50px;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }

        .sample-label {
            background-color: #333;
            color: #fff;
            font-size: 18px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php include "./navbar.php" ?>
    <h1 class="heading">Leaderboard</h1>
    <table id="leaderboard">
        <thead>
            <tr>
                <th id="th1">Username</th>
                <th id="th2">Score</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $username; ?>
                </td>
                <td>
                    <?php echo $score; ?>
                </td>
            </tr>
            <tr>
                <td colspan="2" class="sample-label">Static sample entries</td>
            </tr>
            <tr>
                <td>Sample Player 1</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>Sample Player 2</td>
                <td>1000</td>
            </tr>
            <tr>
                <td>Sample Player 3</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Sample Player 4</td>
                <td>200</td>
            </tr>
            <tr>
                <td>Sample Player 5</td>
                <td>400</td>
            </tr>
            <tr>
                <td>Sample Player 6</td>
                <td>800</td>
            </tr>
        </tbody>

    </table>
    </body>

</html>
