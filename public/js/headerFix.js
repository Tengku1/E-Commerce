window.onscroll = function () {
    myFunction()
};

// Get the header
var header = document.getElementById("navbar");

var sticky = header.offsetTop;

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    } else {
        header.classList.remove("sticky");
    }
}
