const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".header__ul");
const heeder = document.querySelector(".header");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    nav.classList.toggle("active");

    if (nav.classList.contains("active")) {
        document.body.style.overflow = "hidden"; // Disable scrolling
        document.main.style.display = "none";
       

    } else {
        document.body.style.overflow = "auto"; // Enable scrolling
    }
});

document.querySelectorAll(".header__link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    nav.classList.remove("active");

    document.body.style.overflow = "auto"; // Enable scrolling
}));








