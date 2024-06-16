<html>

<head>
    <title>My Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="instructions_styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <h1>Instructions</h1>
    <div class="instructions">
        <p>1. If you click on 2 cards consecutively and they do not match all the cards will be flipped again</p>
        <p>2. If you click on 2 cards consecutively and they do match, then you will be able to flip more cards</p>
        <br>
        <p id="m"> Good Luck! You are going to need it!</p>
    </div>
    <a id="start" href="pairs.php">Start Game</a>
</body>

</html>