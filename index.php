<html>

<head>
    <title>My Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index_styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <div id="main">
        <?php
        if (isset($_COOKIE["username"])) {
            $username = $_COOKIE["username"];
            if (isset($_COOKIE["skinColor"]) && isset($_COOKIE["eyes"]) && isset($_COOKIE["mouth"])) {
                $skinColor = $_COOKIE["skinColor"];
                $eyes = $_COOKIE["eyes"];
                $mouth = $_COOKIE["mouth"];

                include 'navbar.php'; ?>
                <div class="body">
                    <div class="container_1">
                        <h1>Welcome to Pairs</h1>
                        <p>
                            <a href="instructions.php">Click here to play</a>
                        </p>
                    </div>
                </div>
                <?php
            }
        } else {
            include 'navbar.php';
            ?>
            <div class="body">
                <h1>Welcome to Pairs</h1>
                <div class="container_2">
                    <p>You're not using a registered session?
                        <br>
                        <a href="registration.php">Register now</a>
                    </p>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</body>

</html>