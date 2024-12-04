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

document.getElementById('btnNav').addEventListener('click', function () {
    const nav = document.getElementById('nav');
    nav.classList.toggle('hidden'); // Menyembunyikan atau menampilkan elemen navbar
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
        if (yScroll > 0) {
            navMenu.style.background = "#0C609E";
            fonts.forEach((font) => {
                font.style.color = "#FFFFFF"; // Ganti warna font jadi putih saat scroll
            });
        } else {
            navMenu.style.background = "#9CA3Af";
            fonts.forEach((font) => {
                font.style.color = "#000000"; // Kembali ke hitam jika tidak di-scroll
            });
        }
    }
});

document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.querySelector('.carousel');
    const cards = document.querySelectorAll('.card');
    const leftBtn = document.querySelector('.left-btn');
    const rightBtn = document.querySelector('.right-btn');
    const cardWidth = cards[0].offsetWidth + 16; // Including gap
    let currentIndex = 0;

    // Event Listener for Left Button
    leftBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }
    });

    // Event Listener for Right Button
    rightBtn.addEventListener('click', () => {
        if (currentIndex < cards.length - 1) {
            currentIndex++;
            carousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
        }
    });
});

 // Ambil semua tombol filter
 const filterButtons = document.querySelectorAll('.filter-btn');

    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            const status = button.getAttribute('data-status');
            fetchPerumahanByStatus(status);
        });
    });

    function fetchPerumahanByStatus(status) {
        fetch(`/perumahan/filter?status=${status}`)
            .then(response => response.json())
            .then(data => {
                renderPerumahanCards(data.perumahan);
            })
            .catch(error => console.error('Error fetching perumahan:', error));
    }

    function renderPerumahanCards(perumahan) {
        const carousel = document.getElementById('carousel');
        carousel.innerHTML = ''; // Clear previous content

        perumahan.forEach(p => {
            const imageUrl = p.images.length > 0 ? `/storage/${p.images[0].image_path}` : 'https://source.unsplash.com/1417x745/?house';
            const card = `
                <div class="card">
                    <img class="card-img" src="${imageUrl}" alt="House image" />
                    <div class="flex justify-between mt-4">
                        <div class="card-location">
                            <h3 class="kota">${p.kota}</h3>
                            <h3 class="perumahan">${p.perumahan}</h3>
                        </div>
                        <div class="card-price">
                            <p class="start-from">Start From</p>
                            <p class="price">Rp ${p.harga} ${p.satuan}-an</p>
                        </div>
                    </div>
                    <!-- Additional content like features and actions -->
                </div>
            `;
            carousel.innerHTML += card;
        });
    }

    // ==== show perumahan
    document.addEventListener("DOMContentLoaded", function () {
        const carousel = document.querySelector('.image');
        const leftBtn = document.querySelector('.left-btn');
        const rightBtn = document.querySelector('.right-btn');
        const cards = document.querySelectorAll('.card');
        let currentScroll = 0;

        // Calculate card width including margin
        const cardWidth = cards[0].offsetWidth + 16; // Replace 16 with your actual gap

        // Calculate max scroll
        const maxScroll = (cards.length * cardWidth) - carousel.offsetWidth;

        leftBtn.addEventListener('click', function () {
            currentScroll = Math.max(0, currentScroll - cardWidth);
            carousel.style.transform = `translateX(-${currentScroll}px)`;
        });

        rightBtn.addEventListener('click', function () {
            currentScroll = Math.min(maxScroll, currentScroll + cardWidth);
            carousel.style.transform = `translateX(-${currentScroll}px)`;
        });
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


document.querySelectorAll('.btn-delete-image').forEach(button => {
    button.addEventListener('click', function (e) {
        e.preventDefault();
        const formId = this.dataset.formId;
        document.getElementById(formId).submit();
    });
});
