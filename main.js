

function MainScrolled() {
    HideScrollBox();
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
