
function hello($butVal) {
    var letter, letterNode;

    console.log(sessionStorage.getItem("letter"));
    while (sessionStorage.getItem("letter") <= 3) {
        if (sessionStorage.getItem("letter") == "3")
            letter = "a3";
        else
            letter = "a" + sessionStorage.getItem("letter");
        console.log(letter);
        letterNode = document.getElementsByName(letter);
        if (letterNode[letterNode.length - 1].style.backgroundColor != "green") {
            letterNode[letterNode.length - 1].value = $butVal;
            break;
        }
        else
            sessionStorage.setItem("letter", parseInt(sessionStorage.getItem("letter")) + 1);
    }
    if (sessionStorage.getItem("letter") == "3")
        sessionStorage.setItem("letter", "1");
    else
        sessionStorage.setItem("letter", parseInt(sessionStorage.getItem("letter")) + 1);
}

