var interval;
var button;
var buttonIdRef;
var html = "<i class='fas fa-copy'></i> &nbsp; Copy";

function copyFunction(id, buttonId) {
    // console.log(buttonId);
    buttonIdRef = buttonId;
    var copyText = document.getElementById(id);
    // console.log(copyText);
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    button = document.getElementById(buttonId);
    button.innerHTML = "Copied";
    interval = setInterval(myTimer, 1500);
    // alert("Copied the text: " + copyText.value);
}

function myTimer() {
    button = document.getElementById(buttonIdRef);
    button.innerHTML = html;
    clearInterval(interval);
}
