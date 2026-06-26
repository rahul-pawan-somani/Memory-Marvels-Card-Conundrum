var skinColor = "yellow";
var eyes = "normal";
var mouth = "smiling";

var expiration = new Date();
expiration.setTime(expiration.getTime() + (5 * 365 * 24 * 60 * 60 * 1000));

function changeSkinColor(skinColor) {
    var skinColorSrc = document.getElementById("skinColor").src = "./emoji-assets/skin/" + skinColor + ".png";
    document.cookie = "skinColor=" + skinColorSrc + "; expires=" + expiration.toUTCString();
}
function changeEyes(eyes) {
    var eyesSrc = document.getElementById("eyes").src = "./emoji-assets/eyes/" + eyes + ".png";
    document.cookie = "eyes=" + eyesSrc + "; expires=" + expiration.toUTCString();
}
function changeMouth(mouth) {
    var mouthSrc = document.getElementById("mouth").src = "./emoji-assets/mouth/" + mouth + ".png";
    document.cookie = "mouth=" + mouthSrc + "; expires=" + expiration.toUTCString();
}
