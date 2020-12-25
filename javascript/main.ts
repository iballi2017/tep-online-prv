
var btn;
var greet;
var navbarSupportedContent;
btn = document.getElementById("nav-toggler");
navbarSupportedContent = document.getElementById("navbarSupportedContent");
greet = "hi there!";
btn.addEventListener('click', function () {
    console.log("BTN clicked!")
    console.log(this);
    console.log(navbarSupportedContent)
    if (!navbarSupportedContent.classList.contains("show")) {
        navbarSupportedContent.classList.add("show")
        // return;
    }
    if (navbarSupportedContent.classList.contains("show")) {
        navbarSupportedContent.classList.remove("show")
        // return;
    }
})