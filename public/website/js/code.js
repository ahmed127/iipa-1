var sm = 500;
var md = 800;
var lg = 1100;
var xl = 1200;
var slidesView;
var slidesGroup;
var w = window.innerWidth;
console.log(w);
function view() {
    if (w <= sm) {
        slidesView = 1;
        slidesGroup = 1;
    } else if (w <= md) {
        slidesView = 2;
        slidesGroup = 2;
        console.log(md);
    } else if (w <= lg) {
        slidesView = 3;
        slidesGroup = 3;
    } else if (w >= xl) {
        slidesView = 4;
        slidesGroup = 4;
    }
}
view();
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
        delay: 2000,
    },
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".mySwiperslide", {
    slidesPerView: slidesView,
    autoplay: {
        delay: 2000,
    },
    spaceBetween: 30,
    slidesPerGroup: slidesGroup,
    loop: true,
    loopFillGroupWithBlank: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

$(".firstWordInfo").html(function () {
    var text = $(this).text().trim().split(" ");
    var first = text.shift();
    return (text.length > 0 ? "<span class='fw_info'>" + first + "</span> " : first) + text.join(" ");
});
