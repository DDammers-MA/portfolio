const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector(".header__ul");
const heeder = document.querySelector(".header");

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    nav.classList.toggle("active");

    if (nav.classList.contains("active")) {
        document.body.style.overflow = "hidden";
        document.main.style.display = "none";
       

    } else {
        document.body.style.overflow = "auto"; 
    }
});

document.querySelectorAll(".header__link").forEach(n => n.addEventListener("click", () => {
    hamburger.classList.remove("active");
    nav.classList.remove("active");

    document.body.style.overflow = "auto"; 
}));

function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  window.addEventListener("scroll", reveal);








