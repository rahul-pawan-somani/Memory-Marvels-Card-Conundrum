<!DOCTYPE html>
<html>

<head>
    <title>Pairs Game</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            left: 520px;
            width: 500px;
            height: 115px;
            z-index: -1;
            background-color: orangered;
            transform: skew(-30deg);
            box-shadow: inset 0px 0px 0px 1px purple, 12px 12px 12px rgb(0, 0, 0);
            border: 4px solid purple;
            box-sizing: border-box;
        }

        .gameBoard::before {
            content: "";
            position: absolute;
            top: 240px;
            left: 290px;
            width: 920px;
            height: 450px;
            background-color: grey;
            box-shadow: inset 0px 0px 0px 1px black, 5px 5px 5px rgb(0, 0, 0);
            border: 4px solid black;
            box-sizing: border-box;
            border-radius: 25px;
        }

        .first-5-cards,
        .last-5-cards {
            justify-content: center;
            justify-items: center;
            display: inline-flex;
            margin-left: 280px;
        }

        .first-5-cards {
            margin-top: 55px;
        }

        .card {
            align-items: center;
            justify-content: center;
            margin: 35px;
        }

        .card::before {
            content: "";
            background-color: black;
            width: 116px;
            height: 130px;
            box-shadow: inset 0px 0px 0px 0px transparent, 12px 12px 12px rgb(0, 0, 0);
            border-radius: 8px;
        }

        #face-down {
            width: 116px;
        }

        #face-up img {
            position: absolute;
            height: 105px;
        }

        #final-score {
            margin-left: 5px;
            position: absolute;
            display: inline-block;
            justify-items: center;
            justify-content: center;
        }

        #final-score p {
            padding-left: 3px;
            margin: 0px;
            background-color: yellow;
            color: black;
            font-size: 30px;
            font-weight: bolder;
        }

        #final-score a {
            margin-top: 100px;
            background-color: purple;
            color: white;
            font-size: 20px;
            padding-left: 2px;
            padding-right: 2px;
        }

        #final-score a:hover {
            border: 2px solid black;
            background-color: rebeccapurple;
            color: black;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php' ?>
    <h1 class="heading">Play Pairs</h1>
    <div class="gameBoard">
        <div class="first-5-cards">
            <div class="card" id="card-1"></div>
            <div class="card" id="card-2"></div>
            <div class="card" id="card-3"></div>
            <div class="card" id="card-4"></div>
            <div class="card" id="card-5"></div>
        </div>
        <div class="last-5-cards">
            <div class="card" id="card-6"></div>
            <div class="card" id="card-7"></div>
            <div class="card" id="card-8"></div>
            <div class="card" id="card-9"></div>
            <div class="card" id="card-10"></div>
        </div>
        <script>
            function shuffle(array) {
                for (var i = array.length - 1; i > 0; i--) {
                    var j = Math.floor(Math.random() * (i + 1));
                    var temp = array[i];
                    array[i] = array[j];
                    array[j] = temp;
                }
                return array;
            }

            var cards = [];
            var tempflippedCards = [];
            var finalFlippedCards = [];
            var attempts = 0;

            var skinColor = ["./emoji-assets/skin/green.png", "./emoji-assets/skin/red.png", "./emoji-assets/skin/yellow.png"];
            var eyes = ["./emoji-assets/eyes/closed.png", "./emoji-assets/eyes/laughing.png", "./emoji-assets/eyes/long.png", "./emoji-assets/eyes/normal.png", "./emoji-assets/eyes/rolling.png", "./emoji-assets/eyes/winking.png"];
            var mouth = ["./emoji-assets/mouth/open.png", "./emoji-assets/mouth/sad.png", "./emoji-assets/mouth/smiling.png", "./emoji-assets/mouth/straight.png", "./emoji-assets/mouth/surprise.png", "./emoji-assets/mouth/teeth.png"];

            for (var i = 0; i < 5; i++) {
                shuffle(eyes);
                shuffle(mouth);
                for (var j = 0; j < 6; j++) {
                    shuffle(skinColor);
                    var card = [skinColor[2], eyes[j], mouth[j]];
                    if (!cards.includes(card)) {
                        cards.push(card);
                        break;
                    }
                }
            }
            cards = cards.concat(cards);
            shuffle(cards);

            var firstFiveDiv = document.getElementsByClassName("first-5-cards")[0];
            firstFiveDiv.id = "face-up";
            var remainingFiveDiv = document.getElementsByClassName("last-5-cards")[0];
            remainingFiveDiv.id = "face-up";
            for (var i = 0; i < cards.length; i++) {
                var idElement = document.getElementById("card-" + (i + 1));
                for (var j = 0; j < cards[i].length; j++) {
                    var imgElement = document.createElement("img");
                    imgElement.src = cards[i][j];
                    idElement.appendChild(imgElement);
                }
                var faceDownImg = document.createElement("img");
                faceDownImg.id = "face-down";
                faceDownImg.src = "./face-down.png";
                faceDownImg.style.visibility = "visible";
                idElement.appendChild(faceDownImg);
                if (i < 5) {
                    firstFiveDiv.appendChild(idElement);
                } else {
                    remainingFiveDiv.appendChild(idElement);
                }
                document.body.appendChild(firstFiveDiv);
                document.body.appendChild(remainingFiveDiv);
            }

            function flip(id) {
                var faceDown = document.querySelector(id);
                faceDown.style.visibility = "hidden";
            }
            function unflip(path) {
                var images = document.querySelectorAll('img');
                for (let a = 0; a < images.length; a++) {
                    var imgSrc = images[a].src;
                    imgSrc = imgSrc.replace("http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:53179/", "./");
                    if (imgSrc == path) {
                        var divElement = images[i].parentElement;
                        var faceDownId = "#" + divElement.id + " #face-down";
                        var faceDown_ = document.querySelector(faceDownId);
                        faceDown_.style.visibility = "visible";
                        break;
                    }
                }
            }
            function showScore(score) {
                var finalScoreDiv = document.createElement("div");
                finalScoreDiv.id = "final-score";
                var finalScoreP = document.createElement("p");
                finalScoreP.textContent = 'Final Score: ' + score;
                finalScoreDiv.appendChild(finalScoreP);
                var restartLink = document.createElement("a");
                restartLink.href = "./instructions.php";
                restartLink.textContent = "Play Again";
                restartLink.id = "play-again";
                finalScoreDiv.appendChild(restartLink);
                var leaderboardLink = document.createElement("a");
                leaderboardLink.href = "./leaderboard.php";
                leaderboardLink.textContent = "Save Score";
                leaderboardLink.id = "save-score";
                leaderboardLink.addEventListener('click', () => {
                    document.cookie = "score=" + score;
                    window.location.href = './leaderboard.html';
                });
                finalScoreDiv.appendChild(leaderboardLink);
                document.body.appendChild(finalScoreDiv);
            };

            document.addEventListener('click', function (event) {
                if (event.target.tagName === 'IMG') {
                    var clickedImgId = event.target.id;
                    var parentDivId = event.target.parentElement.id;
                    var imgID = "#" + parentDivId + " #" + clickedImgId;

                    if (tempflippedCards.length == 0) {
                        var imagesList1 = document.querySelectorAll("#" + parentDivId + " img");
                        var list1 = [];
                        for (var i = 0; i < imagesList1.length; i++) {
                            var imgSrc1 = imagesList1[i].src;
                            imgSrc1 = imgSrc1.replace("http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:53179/", "./");
                            list1.push(imgSrc1);
                        }
                        list1.pop();
                        for (var x = 0; x < cards.length; x++) {
                            if ((cards[x][0] == list1[0]) && (cards[x][1] == list1[1]) && (cards[x][2] == list1[2])) {
                                tempflippedCards.push(cards[x]);
                                flip(imgID);
                                break;
                            }
                        }
                    } else if (tempflippedCards.length == 1) {
                        var imagesList2 = document.querySelectorAll("#" + parentDivId + " img");
                        var list2 = [];
                        for (var i = 0; i < imagesList2.length; i++) {
                            var imgSrc2 = imagesList2[i].src;
                            imgSrc2 = imgSrc2.replace("http://ml-lab-4d78f073-aa49-4f0e-bce2-31e5254052c7.ukwest.cloudapp.azure.com:53179/", "./");
                            list2.push(imgSrc2);
                        }
                        list2.pop();
                        for (var x = 0; x < cards.length; x++) {
                            if ((cards[x][0] == list2[0]) && (cards[x][1] == list2[1]) && (cards[x][2] == list2[2])) {
                                tempflippedCards.push(cards[x]);
                                flip(imgID);
                                break;
                            }
                        }
                        if ((tempflippedCards.length == 2) && (tempflippedCards[0] === tempflippedCards[1])) {
                            finalFlippedCards = finalFlippedCards.concat(tempflippedCards);
                            tempflippedCards.length = 0;
                            attempts++;
                            if (finalFlippedCards.length == cards.length) {
                                if (attempts > 35) {
                                    var score = 0;
                                    showScore(score);
                                } else if ((attempts >= 5) && (attempts < 7)) {
                                    var score = 1000;
                                    showScore(score);
                                } else if ((attempts > 7) && (attempts < 12)) {
                                    var score = 800;
                                    showScore(score);
                                } else if ((attempts >= 12) && (attempts < 18)) {
                                    var score = 600;
                                    showScore(score);
                                } else if ((attempts >= 18) && (attempts < 25)) {
                                    var score = 400;
                                    showScore(score);
                                } else if ((attempts >= 25) && (attempts <= 35)) {
                                    var score = 200;
                                    showScore(score);
                                }
                            }
                        } else {
                            tempflippedCards.length = 0;
                            finalFlippedCards.length = 0;
                            attempts++;
                            setTimeout(function () {
                                var images = document.querySelectorAll("#face-down");
                                for (var i = 0; i < images.length; i++) {
                                    images[i].style.visibility = "visible";
                                }
                            }, 400);
                        }
                    }
                }
            });
        </script>
</body>

</html>