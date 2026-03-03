function toggleBurger() {
    icon = document.getElementById("js-hamburger-icon");
    nav = document.getElementById("js-burger-nav");
    if (nav.style.display != "flex") {
        nav.style.display = "flex";
        icon.classList.toggle("fa-bars");
        icon.classList.toggle("fa-x");
    }
    else {
        nav.style.display = "none";
        icon.classList.toggle("fa-bars");
        icon.classList.toggle("fa-x");
    }
}