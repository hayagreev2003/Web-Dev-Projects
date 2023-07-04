var captcha;

function generate() {
    document.getElementById("capt").value = "";
    captcha = document.getElementById("image");
    var uniquechar = "";

    const randomchar = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    for (let i = 1; i < 6; i++) {
        uniquechar += randomchar.charAt(
            Math.random() * randomchar.length)
    }

    captcha.innerHTML = uniquechar;
}

function check() {
    const usr_input = document.getElementById("capt").value;

    if (usr_input == captcha.innerHTML) {
        var s = document.getElementById("key").innerHTML = "Matched";
        generate();
    } else {
        var s = document.getElementById("key").innerHTML = "not Matched";
        generate();
    }
}