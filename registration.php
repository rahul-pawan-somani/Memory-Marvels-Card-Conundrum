<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty(trim($_POST["username"]))) {
        echo '<script>window.alert("Please enter a username.");</script>';
    } elseif (preg_match('/[!@#%&*()+=^{}[\]\-;:"\'<>?,.\/]/', $_POST["username"])) {
        echo '<script>window.alert("Invalid username. Username cannot contain special characters");</script>';
    } else {
        $username = $_POST["username"];
        setcookie("username", $username, time() + (5 * 365 * 24 * 60 * 60));
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Registration Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="registration_styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="emoji-assets.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <form method="POST">
        <div class="username">
            <span id="username">Username</span>
            <input type="text" name="username" placeholder="Enter username..." aria-label="Username"
                aria-describedby="basic-addon1">
        </div>
        <div class="avatar-container">
            <div class="avatar-options">
                <h2>Create Avatar: </h2>
                <div class="default-avatar">
                    <img id="skinColor" src="emoji-assets/skin/yellow.png" alt="Image of yellow skin">
                    <img id="eyes" src="emoji-assets/eyes/normal.png" alt="Image of normal eyes">
                    <img id="mouth" src="emoji-assets/mouth/smiling.png" alt="Image of smiling mouth">
                </div>
                <br>
                <br>
                <p>Choose Skin Color:</p>
                <div class="options" id="skinColor">
                    <img src="emoji-assets/skin/green.png" onclick="changeSkinColor('green')" alt="Image of green skin">
                    <img src="emoji-assets/skin/red.png" onclick="changeSkinColor('red')" alt="Image of red skin">
                    <img src="emoji-assets/skin/yellow.png" onclick="changeSkinColor('yellow')"
                        alt="Image of yellow skin">
                </div>
            </div>
            <div>
                <p>Choose Eyes:</p>
                <div class="options" id="eyes">
                    <img src="emoji-assets/eyes/closed.png" onclick="changeEyes('closed')" alt="Image of closed eyes">
                    <img src="emoji-assets/eyes/laughing.png" onclick="changeEyes('laughing')"
                        alt="Image of laughing eyes">
                    <img src="emoji-assets/eyes/long.png" onclick="changeEyes('long')" alt="Image of long eyes">
                    <img src="emoji-assets/eyes/normal.png" onclick="changeEyes('normal')" alt="Image of normal eyes">
                    <img src="emoji-assets/eyes/rolling.png" onclick="changeEyes('rolling')"
                        alt="Image of rolling eyes">
                    <img src="emoji-assets/eyes/winking.png" onclick="changeEyes('winking')"
                        alt="Image of winking eyes">
                </div>
            </div>
            <div>
                <p>Choose Mouth:</p>
                <div class="options" id="mouth">
                    <img src="emoji-assets/mouth/open.png" onclick="changeMouth('open')" alt="Image of open mouth">
                    <img src="emoji-assets/mouth/sad.png" onclick="changeMouth('sad')" alt="Image of sad mouth">
                    <img src="emoji-assets/mouth/smiling.png" onclick="changeMouth('smiling')"
                        alt="Image of smiling mouth">
                    <img src="emoji-assets/mouth/straight.png" onclick="changeMouth('straight')"
                        alt="Image of straight mouth">
                    <img src="emoji-assets/mouth/surprise.png" onclick="changeMouth('surprise')"
                        alt="Image of surprise mouth">
                    <img src="emoji-assets/mouth/teeth.png" onclick="changeMouth('teeth')" alt="Image of teeth mouth">
                </div>
            </div>
        </div>
        <br>
        <button id="registerButton" type="submit">Register now</button>
    </form>
    <?php
    if (isset($_COOKIE["username"]) && isset($_COOKIE["eyes"])) {
        ?>
        <script>
            alert("Click on Home to to get started");
        </script>
        <?php
    }
    ?>
</body>

</html>