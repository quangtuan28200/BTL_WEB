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
//lay do dai 1 li
// li = document.querySelector('.productSame__item');
// var positionInfo = li.getBoundingClientRect();
// width__1li = positionInfo.width.toFixed(1);

function product__slider(n, m ,product_Fistitem, product_lastitem) {
    if( n > 0){
        $(product_Fistitem).css("margin-left", -n*m);
        setTimeout(() => {
            $(product_Fistitem).appendTo($(product_Fistitem).parent()).css("margin-left", "0"); 
            for (let index = 1; index <= n-1; index++) {
                $(product_Fistitem).appendTo($(product_Fistitem).parent()); 
            }
        }, 500);
    }else{
        for (let index = 1; index <= -n; index++) {
            ($(product_lastitem).parent()).prepend($(product_lastitem));
        }
        $(product_Fistitem).css("margin-left", n*m);
        setTimeout(() => {
            $(product_Fistitem).css("margin-left", 0);
        }, 0.0001);
    }
}

var cart_product_quantity = document.querySelectorAll('.cart__productItem').length;

document.querySelector('.price_provisional_label span').innerText = '( ' + cart_product_quantity + ' sản phẩm ):';

var asd = document.querySelectorAll('.cart__productPrice');
// var qwe = document.querySelectorAll('.number_field');
// console.log(qwe);

var dsa = Array.from(asd).reduce(function (value, input) {  
    return value + parseInt(input.innerText.split('.').join(''));
}, 0);

document.querySelector('.price_provisional_money').innerHTML = dsa.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' đ';
document.querySelector('.price_total_money').innerHTML = dsa.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' đ';

//! random_discountCode
function makeid(length) {
var result           = [];
var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
    }

    document.querySelector('.applycode__text_input input').value = result.join('');
}

function money_discount() {
    input = document.querySelector('.applycode__text_input input');
    if(input.value == ''){
        input.style.boxShadow = '0 0 5px red';
    }else{
        // 1-1.000.000
        var money = Math.floor(200000 + Math.random() * 500000);

        // input.removeAttribute("style");
        input.style.boxShadow = '0 0 5px green';
        // document.querySelector('.applycode').style.display = 'none';
        document.querySelector('.money_discount').style.display = 'flex';
        document.querySelector('.money_dis').innerText = '- ' + money.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' đ';
    }
}