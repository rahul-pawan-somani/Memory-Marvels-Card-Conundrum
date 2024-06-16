<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="navbar_styles.css">
</head>

<body>
    <nav>
        <div class="navbar">
            <a class="home" href="index.php">Home</a>

            <?php
            if (isset($_COOKIE["username"])) {
                $username = $_COOKIE["username"];
                $skinColor = $_COOKIE["skinColor"];
                $eyes = $_COOKIE["eyes"];
                $mouth = $_COOKIE["mouth"];
                ?>
                <div class="mid">
                    <div class="usermane">
                        <?php echo $username; ?>
                    </div>
                    <div class="avatar">
                        <img src="<?php echo $skinColor; ?>">
                        <img src="<?php echo $eyes; ?>">
                        <img src="<?php echo $mouth; ?>">
                    </div>
                </div>
                <div class="right_side">
                    <a class="playPairs" href="instructions.php">Play Pairs</a>
                    <a class="leaderboard" href="leaderboard.php">Leaderboard</a>
                    <?php
            } else {
                ?>
                    <a class="registration" href="registration.php">Register</a>
                    <?php
            }
            ?>
            </div>
        </div>
    </nav>
</body>

</html>