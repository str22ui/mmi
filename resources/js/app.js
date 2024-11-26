import "./bootstrap";
import "flowbite";
AOS.init();
import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

function navOpen() {
    // const nav = document.querySelector("#nav");
    // nav.classList.remove = "hidden";
    // nav.classList.add = "block";
}

document.getElementById("btnNav").addEventListener("click", () => {
    const nav = document.querySelector("#nav");
    // nav.classList.remove("hidden");
    nav.classList.toggle("nav");
});

let navBot = document.getElementById("nav-bottom");
const path = location.pathname;

// if (path === "/") {
//     navBot.style.background = "#B1813A";
// }
let navMenu = document.getElementById("navMenu");
let navContact = document.getElementById("navContact");
let a = document.getElementById("a");
const fonts = document.querySelectorAll(".font");
let lg = window.matchMedia("(min-width: 1024px)").matches;

window.addEventListener("scroll", () => {
    let yScroll = window.scrollY;

    if (lg) {
        if (yScroll > 70) {
            navMenu.style.background = "#0C609E";
            fonts.forEach((font) => {
                font.style.color = "#FFFFFF"; // Ganti warna font jadi putih saat scroll
            });
        } else {
            navMenu.style.background = "#D9D9D9";
            fonts.forEach((font) => {
                font.style.color = "#000000"; // Kembali ke hitam jika tidak di-scroll
            });
        }
    }
});

document.querySelectorAll(".nav-dropdown-btn-sm").forEach((link) => {
    link.addEventListener("click", function (e) {
        e.preventDefault();
        if (link.id === "btnProfile") {
            document.getElementById("profileMenu").classList.toggle("flex-nav");
        } else if (link.id === "btnAkademik") {
            document
                .getElementById("akademikMenu")
                .classList.toggle("flex-nav");
        } else if (link.id === "btnProgram") {
            document.getElementById("programMenu").classList.toggle("flex-nav");
        } else if (link.id === "btnKesiswaan") {
            document
                .getElementById("kesiswaanMenu")
                .classList.toggle("flex-nav");
        } else if (link.id === "btnMore") {
            document.getElementById("moreMenu").classList.toggle("flex-nav");
        } else if (link.id === "btnKonsen") {
            document.getElementById("konsenMenu").classList.toggle("flex-nav");
        }
    });
});

// Slider

const productContainers = [...document.querySelectorAll(".product-container")];
const nxtBtn = [...document.querySelectorAll(".nxt-btn")];
const preBtn = [...document.querySelectorAll(".pre-btn")];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener("click", () => {
        console.log(containerWidth);
        item.scrollLeft += containerWidth;
    });

    preBtn[i].addEventListener("click", () => {
        item.scrollLeft -= containerWidth;
    });
});

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

const emp = document.getElementById("emp").value;
const std = document.getElementById("std").value;

const obj = document.getElementById("v");
animateValue(obj, 0, emp, 2500);
const obj2 = document.getElementById("vv");
animateValue(obj2, 0, std, 2500);
