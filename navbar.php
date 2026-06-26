<?php
$hasAvatar = isset($_COOKIE["username"], $_COOKIE["skinColor"], $_COOKIE["eyes"], $_COOKIE["mouth"]);
$username = htmlspecialchars($_COOKIE["username"] ?? "", ENT_QUOTES, "UTF-8");
$skinColor = htmlspecialchars($_COOKIE["skinColor"] ?? "", ENT_QUOTES, "UTF-8");
$eyes = htmlspecialchars($_COOKIE["eyes"] ?? "", ENT_QUOTES, "UTF-8");
$mouth = htmlspecialchars($_COOKIE["mouth"] ?? "", ENT_QUOTES, "UTF-8");
?>

<nav>
    <div class="navbar">
        <a class="home" href="index.php">Home</a>

        <?php if ($hasAvatar) { ?>
            <div class="mid">
                <div class="profile-name">
                    <?php echo $username; ?>
                </div>
                <div class="avatar">
                    <img src="<?php echo $skinColor; ?>" alt="">
                    <img src="<?php echo $eyes; ?>" alt="">
                    <img src="<?php echo $mouth; ?>" alt="">
                </div>
            </div>
            <div class="right_side">
                <a class="playPairs" href="instructions.php">Play Pairs</a>
                <a class="leaderboard" href="leaderboard.php">Leaderboard</a>
            </div>
        <?php } else { ?>
            <div class="right_side">
                <a class="registration" href="registration.php">Register</a>
            </div>
        <?php } ?>
    </div>
</nav>
