import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// On page load or when changing themes, best to add inline in `head` to avoid FOUC
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    document.documentElement.classList.add("dark");
} else {
    document.documentElement.classList.remove("dark");
}

var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");



const logoDarkEl = document.getElementsByClassName('logo_dark_el');
const logoLightEl = document.getElementsByClassName('logo_light_el');


// Change the icons inside the button based on previous settings
if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
    for (let i = 0; i < logoDarkEl.length; i++) {
        logoDarkEl[i].classList.remove('hidden');
    }
} else {
    themeToggleDarkIcon.classList.remove("hidden");
    for (let i = 0; i < logoDarkEl.length; i++) {
        logoLightEl[i].classList.remove('hidden');
    }
}

var themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    // toggle icons inside button
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");


    for (let i = 0; i < logoDarkEl.length; i++) {
        logoDarkEl[i].classList.toggle('hidden');
        logoLightEl[i].classList.toggle('hidden');
    }

    // if set via local storage previously
    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }

        // if NOT set via local storage previously
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});




var constrain = 20;
var mouseOverContainer = document.getElementById("ex1");
var ex1Layer = document.getElementById("ex1-layer");

var mouseOverContainer2 = document.getElementById("ex1");
var ex2Layer = document.getElementById("ex2-layer");


function transforms(x, y, el) {
  var box = el.getBoundingClientRect();
  var calcX = (y - box.y - (box.height / 2)) / constrain;
  var calcY = -(x - box.x - (box.width / 2)) / constrain;

  return "perspective(100px) "
    + "   rotateX("+ calcX +"deg) "
    + "   rotateY("+ calcY +"deg) ";
};
function transforms2(x, y, el) {
  var box = el.getBoundingClientRect();
  var calcX = -(y - box.y - (box.height / 2)) / constrain;
  var calcY = (x - box.x - (box.width / 2)) / constrain;

  return "perspective(100px) "
    + "   rotateX("+ calcX +"deg) "
    + "   rotateY("+ calcY +"deg) ";
};
 function transformElement(el, xyEl) {
  el.style.transform  = transforms.apply(null, xyEl);
}
function transformElement2(el, xyEl) {
  el.style.transform  = transforms2.apply(null, xyEl);
}

mouseOverContainer.onmousemove = function(e) {
  var xy = [e.clientX, e.clientY];
  var xy2 = [e.clientX, e.clientY];
  var position = xy.concat([ex1Layer]);
  var position2 = xy2.concat([ex2Layer]);

  window.requestAnimationFrame(function(){
    transformElement(ex1Layer, position);
    transformElement2(ex2Layer, position2);
  });
};






