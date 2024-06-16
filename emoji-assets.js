var skinColor = "yellow";
var eyes = "normal";
var mouth = "smiling";

var faceContainer = document.getElementById("avatar-container");
var saveButton = document.getElementById("register");

var expiration = new Date();
expiration.setTime(expiration.getTime() + (5 * 365 * 24 * 60 * 60 * 1000));

function changeSkinColor(skinColor) {
    var skinColorSrc = document.getElementById("skinColor").src = "./emoji-assets/skin/" + skinColor + ".png";
    document.cookie = "skinColor=" + skinColorSrc + "; expires=" + expiration;
}
function changeEyes(eyes) {
    var eyesSrc = document.getElementById("eyes").src = "./emoji-assets/eyes/" + eyes + ".png";
    document.cookie = "eyes=" + eyesSrc + "; expires=" + expiration;
}
function changeMouth(mouth) {
    var mouthSrc = document.getElementById("mouth").src = "./emoji-assets/mouth/" + mouth + ".png";
    document.cookie = "mouth=" + mouthSrc + "; expires=" + expiration;
}

document.addEventListener('click', function (event) {
    if (event.target.tagName === 'BUTTON') {
        window.location.href = "index.php";
    }
});