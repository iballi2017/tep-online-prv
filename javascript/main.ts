
var btn;
var greet;
var navbarSupportedContent;
btn = document.getElementById("nav-toggler");
navbarSupportedContent = document.getElementById("navbarSupportedContent");
greet = "hi there!";

if (btn) {
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
    });
}


/* User Dashboard Counters */
var dashBoardCounter;
dashBoardCounter = document.querySelectorAll("#dashboard-counters .count");
for (var i = 0; i < dashBoardCounter.length; i++){
    if (dashBoardCounter[i].innerHTML >= 76) {
        dashBoardCounter[i].style.color = '#17a2b8';
    }
    if (dashBoardCounter[i].innerHTML <= 30) {
        dashBoardCounter[i].style.color = '#dc3545';
    }
    if (dashBoardCounter[i].innerHTML >= 31 && dashBoardCounter[i].innerHTML <= 75) {
        dashBoardCounter[i].style.color = '#6c757d';
    }
}


class Shared{
    constructor(){}

    /* Notification texts limit */
    limitTexts(item: any) {
        if(item){
            item.forEach(element => {
                element.innerHTML = element.innerText.slice(0, 100);
            });
        }
    }

    /* Sidenav nav-links : adding style to active nav-links */
    activeNavLink(links:any) {
        links.forEach(link => {
            if (link.classList.contains('active')) {
                link.parentElement.style.borderBottom = '1px solid #5b9438';
                link.style.color = '#5b9438';
            }
        })
    }

        /* back to previous page History */
        goBack() {
            window.history.back();
        }
        backButton=(element)=>{
            if(element){
                element.addEventListener('click',this.goBack);
            }
        }
}

/* Limiting the number of texts on a notification item in the notification page */
var noticeItems = document.querySelectorAll<any>(".notice_item");
var notice = new Shared().limitTexts(noticeItems);


/* Sidenav nav-links : adding style to active nav-links */
var navLinks = document.querySelectorAll<HTMLElement>(".sidebar .nav-item .nav-link");
var activeNavLink = new Shared().activeNavLink(navLinks);


/* Form Statuses */
var statuses = document.querySelectorAll<HTMLElement>('.status');
statuses.forEach((status:any) => {
    switch (status.innerHTML) {
        case "pending":
            status.classList.add('text-muted');
            break;
        case "approved":
            status.classList.add('text-success');
            break;
        case "rejected":
            status.classList.add('text-danger');
            break;
        case "decline":
            status.classList.add('text-danger');
            break;
        default:
            status.classList.add('text-light');
    }
});


/* back to previous page History */
const backBtn = document.querySelector<HTMLElement>('.back_btn');
const backHistory = new Shared().backButton(backBtn);