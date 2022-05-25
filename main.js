

function MainScrolled() {
    HideScrollBox();
    CurrentPageIndicator();
}

function HideScrollBox() {
    var ScrollBox = document.getElementById("ScrollDown");
    if (ScrollBox.classList.contains("hide") == false) {
        ScrollBox.classList.add("hide");
    }
    if (document.getElementById("MainPage").scrollTop == 0) {
        if (ScrollBox.classList.contains("hide")) {
            ScrollBox.classList.remove("hide");
        }
    }
}

function CurrentPageIndicator() {
    var main = document.getElementById("MainPage");
    var currentPageIndicator = document.getElementById("currentPageIndicator");
    var allNodes = currentPageIndicator.parentNode.children;
    var windowHeight = main.clientHeight;
    var topDistance = main.scrollTop;

    if (topDistance < windowHeight) {
        var newIndicator = allNodes.item(0);
        if (!(newIndicator.id == "currentPageIndicator")) {
            currentPageIndicator.removeAttribute('id');
            newIndicator.id = "currentPageIndicator";
            currentPageIndicator = newIndicator;
        }
    }

    if ((topDistance >= windowHeight) && (topDistance < windowHeight * 2)) {
        var newIndicator = allNodes.item(1);
        if (!(newIndicator.id == "currentPageIndicator")) {
            currentPageIndicator.removeAttribute('id');
            newIndicator.id = "currentPageIndicator";
            currentPageIndicator = newIndicator;
        }
    }
    if ((topDistance >= windowHeight * 2) && (topDistance < windowHeight * 3)) {
        var newIndicator = allNodes.item(2);
        if (!(newIndicator.id == "currentPageIndicator")) {
            currentPageIndicator.removeAttribute('id');
            newIndicator.id = "currentPageIndicator";
            currentPageIndicator = newIndicator;
        }
    }

    if ((topDistance >= windowHeight * 3) && (topDistance < windowHeight * 4)) {
        var newIndicator = allNodes.item(3);
        if (!(newIndicator.id == "currentPageIndicator")) {
            currentPageIndicator.removeAttribute('id');
            newIndicator.id = "currentPageIndicator";
            currentPageIndicator = newIndicator;
        }
    }
}




function ScrollLeft() {
    var ProjectsCards = document.getElementById("ProjectsCards");
    ProjectsCards.scrollTo({
        left: ProjectsCards.scrollLeft - ProjectsCards.offsetWidth,
        behavior: 'smooth',
    });
}
function ScrollRight() {
    var ProjectsCards = document.getElementById("ProjectsCards");
    ProjectsCards.scrollTo({
        left: ProjectsCards.scrollLeft + ProjectsCards.offsetWidth,
        behavior: 'smooth',
    });
}
