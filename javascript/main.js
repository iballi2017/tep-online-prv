var btn;
var greet;
var navbarSupportedContent;
btn = document.getElementById("nav-toggler");
navbarSupportedContent = document.getElementById("navbarSupportedContent");
greet = "hi there!";
if (btn) {
    btn.addEventListener('click', function () {
        console.log("BTN clicked!");
        console.log(this);
        console.log(navbarSupportedContent);
        if (!navbarSupportedContent.classList.contains("show")) {
            navbarSupportedContent.classList.add("show");
            // return;
        }
        if (navbarSupportedContent.classList.contains("show")) {
            navbarSupportedContent.classList.remove("show");
            // return;
        }
    });
}
/* User Dashboard Counters */
var dashBoardCounter;
dashBoardCounter = document.querySelectorAll("#dashboard-counters .count");
for (var i = 0; i < dashBoardCounter.length; i++) {
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
var Shared = /** @class */ (function () {
    function Shared() {
        var _this = this;
        this.backButton = function (element) {
            if (element) {
                element.addEventListener('click', _this.goBack);
            }
        };
    }
    /* Notification texts limit */
    Shared.prototype.limitTexts = function (item) {
        if (item) {
            item.forEach(function (element) {
                element.innerHTML = element.innerText.slice(0, 100);
            });
        }
    };
    /* Sidenav nav-links : adding style to active nav-links */
    Shared.prototype.activeNavLink = function (links) {
        links.forEach(function (link) {
            if (link.classList.contains('active')) {
                link.parentElement.style.borderBottom = '1px solid #5b9438';
                link.style.color = '#5b9438';
            }
        });
    };
    /* back to previous page History */
    Shared.prototype.goBack = function () {
        window.history.back();
    };
    return Shared;
}());
/* Limiting the number of texts on a notification item in the notification page */
var noticeItems = document.querySelectorAll(".notice_item");
var notice = new Shared().limitTexts(noticeItems);
/* Sidenav nav-links : adding style to active nav-links */
var navLinks = document.querySelectorAll(".sidebar .nav-item .nav-link");
var activeNavLink = new Shared().activeNavLink(navLinks);
/* Form Statuses */
var statuses = document.querySelectorAll('.status');
statuses.forEach(function (status) {
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
var backBtn = document.querySelector('.back_btn');
var backHistory = new Shared().backButton(backBtn);
