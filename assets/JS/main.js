var script = document.createElement('script');
script.src = 'https://code.jquery.com/jquery-3.4.1.min.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

//! shopping-cart

//get element cartItem
var cartItem__Element = document.querySelectorAll('.header__cartItem'); 

//get element cartNotice
var cartNotice__Element = document.querySelector('.cart__notice');


if(cartItem__Element.length > 0){
    //active when have product in cart
    document.querySelector('.header__cartMenuWrapper').classList.add('active__cartList');
    cartNotice__Element.classList.add('active__cartNotice');

    //set amount cartItem notice
    cartNotice__Element.innerText = cartItem__Element.length;
}

//! back_to_top

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function(){
    scrollFunction();
};

function scrollFunction() {
    if (document.documentElement.scrollTop > 100) {
        $("#myBtn").fadeIn();
        document.getElementById("myBtn").style.bottom = "60px";
    } else {    
        document.getElementById("myBtn").style.bottom = "40px";
        $("#myBtn").fadeOut(); 
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    // document.body.scrollTop = 0;
    // document.documentElement.scrollTop = 0;
    $("html, body").animate({ scrollTop: 0 }, 300);  
}

//! slide_show
// var dot__Container = document.getElementsByClassName("dot__component");
// console.log(dot__Container);
showDots();
var slideIndex = 1;
//hien slide dau tien len
showSlides(slideIndex);

setInterval(() => {
    plusSlides(1);
}, 3500);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length){
        slideIndex = 1;
    }
    if (n < 1){
        slideIndex = slides.length;
    }
    for (var i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (var j = 0; j < dots.length; j++) {
        dots[j].classList.remove('dot_active');
    }
    //slides
    slides[slideIndex-1].style.display = "block";

    //dots
    dots[slideIndex-1].classList.add('dot_active');
}

function showDots() {
    var dot__Container = document.querySelector(".dot__component");
    var slides = document.getElementsByClassName("mySlides");

    for (var i = 1; i <= slides.length; i++) {
        dot__Container.insertAdjacentHTML('beforeend','<span class="dot" onclick="currentSlide('+ i +')"></span>');
    }
}

//! active new_product
activeNews__header(0);

function activeNews__header(n) {  
    var newsHeader__Selector = document.querySelectorAll('.news__headerWr');
    var newsContent__Selector = document.querySelectorAll('.news__contentWr');

    for (let index = 0; index < newsHeader__Selector.length; index++) {
        newsHeader__Selector[index].classList.remove('product__active');
    }
    for (let index = 0; index < newsContent__Selector.length; index++) {
        newsContent__Selector[index].classList.remove('show');
    }
    
    newsHeader__Selector[n].classList.add('product__active');
    newsContent__Selector[n].classList.add('show');
}



function hoverNews__header() {
    document.querySelector('.product__active').classList.remove('product__active');
}


function outNews__header() {
    if(document.querySelector('.news__productArea').matches('.show')){
        document.querySelector('.news__product').classList.add('product__active');
    }

    if(document.querySelector('.news__newsArea').matches('.show')){
        document.querySelector('.news_news').classList.add('product__active');
    }
}

function date() {
    d = new Date();
    return d.getDate() + ' Tháng ' + d.getMonth() + ', ' + d.getFullYear() ;
}

//!itemNav--active

function active__cate(n) {
    var x = document.querySelectorAll('.Category__link');
    var y = document.querySelector('.itemCate__active');
    if(y != null){
        y.classList.remove('itemCate__active');
    }
    x[n].classList.add('itemCate__active');
    var z = document.querySelector('.content__headingText h4');
    z.innerText = x[n].textContent.toUpperCase();
}

//! range slider

var slider = document.getElementById("myRange");
var output = document.getElementById("price_desc");
output.innerText = slider.value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");


slider.oninput = function() {
    output.innerText = this.value.replace(/\B(?=(\d{3})+(?!\d))/g, ".");
};

//! minus, plus btn
function minus_plus(n) {
    number_field = document.querySelector('.number_field');
    value = parseInt(number_field.value);
    min = parseInt(number_field.min);
    max = parseInt(number_field.max);
    
    value += n;

    if(min <= value && value <= max){
        number_field.value = value;
    }else{
        number_field.value = 1;
    }
}

//! product__slider
ul = document.querySelector('.productSame__list');
ul_width = ul.offsetWidth;


function next() {
    ul.style.transform = 'translateX(' + -ul_width + 'px)';
}

function prev() {
    ul.style.transform = 'translateX(' + 0 + 'px)';
}

// productScroll();

// function productScroll() {
//     let slider = document.getElementById("productSame__area ");
//     let next = document.getElementsByClassName("pro-next");
//     let prev = document.getElementsByClassName("pro-prev");
//     console.log(next);
//     console.log(prev);
//     let slide = document.getElementById("productSame__list");
//     let item = document.getElementById("productSame__list");

//     for (let i = 0; i < next.length; i++) {
//         //refer elements by class name

//         let position = 0; //slider postion

//         prev[i].addEventListener("click", function() {
//         //click previos button
//             if (position > 0) {
//                 //avoid slide left beyond the first item
//                 position -= 3;
//                 translateX(position); //translate items
//             }
//         });

//         next[i].addEventListener("click", function() {
//             if (position >= 0 && position < hiddenItems()) {
//                 //avoid slide right beyond the last item
//                 position += 3;
//                 translateX(position); //translate items
//             }
//         });
//     }

//     function hiddenItems() {
//         //get hidden items
//         let items = getCount(item, false);
//         let visibleItems = slider.offsetWidth / 210;
//         return items - Math.ceil(visibleItems);
//     }
// }

// function translateX(position) {
//     //translate items
//     slide.style.left = position * -210 + "px";
// }

// function getCount(parent, getChildrensChildren) {
//     //count no of items
//     let relevantChildren = 0;
//     let children = parent.childNodes.length;
//     for (let i = 0; i < children; i++) {
//         if (parent.childNodes[i].nodeType != 3) {
//         if (getChildrensChildren)
//             relevantChildren += getCount(parent.childNodes[i], true);
//         relevantChildren++;
//         }
//     }
//     return relevantChildren;
// }



