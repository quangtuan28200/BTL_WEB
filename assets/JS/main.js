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

//! convert_money

function convert_money(n) {
    let money;
    switch (typeof(n)) {
        case 'string':
            money = parseInt(n.split('.').join(''));
            break;
        case 'number':
            money = n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            break;
        default:
            break;
    }
    return money;
}

//! total_money

var cart_product_quantity = document.querySelectorAll('.cart__productItem').length;

document.querySelector('.price_provisional_label span').innerText = '( ' + cart_product_quantity + ' sản phẩm ):';

var asd = document.querySelectorAll('.cart__productPrice');
// var qwe = document.querySelectorAll('.number_field');
// console.log(qwe);

var dsa = Array.from(asd).reduce(function (value, input) {  
    return value + convert_money(input.innerText);
}, 0);

var provisional_money = document.querySelector('.price_provisional_money');
var total_money = document.querySelector('.price_total_money');

// tao attribute gan tong tam vao
provisional_money.setAttribute("provisional_money", dsa);
//Lay value cua attribute tong tam
var prov_money = parseInt(provisional_money.getAttribute("provisional_money")) ;

// tao attribute gan tong tien vao
total_money.setAttribute('total_money', prov_money);
//Lay value cua attribute tong tien
var to_money = parseInt(total_money.getAttribute("total_money")) ;

//In money ra ngoai dang string
provisional_money.innerText = convert_money(prov_money) + ' đ';
total_money.innerText = convert_money(to_money) + ' đ';

//last_money
var last_pay_selector = document.querySelector('.last_pay span');
last_pay_selector.setAttribute('last_money', to_money);
last_pay_selector.innerText = convert_money(to_money) + ' đ';

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
    }
    else{
        money = 200000 + Math.floor(Math.random() * 100000);

        // input.removeAttribute("style");
        document.querySelector('.discountcode').style.display = 'none';
        document.querySelector('.money_discount').style.display = 'flex';
        document.querySelector('.applycode_suc').style.display = 'block';

        var money_dis = document.querySelector('.money_dis');
        //gan gia tri cua money_discount vao attribute
        money_dis.setAttribute("money_dis", money);
        //In money ra ngoai
        money_dis.innerText = '- ' + convert_money(money) + ' đ';

        //gan lai gia tri cho attribute tong tien sau khi tru money-discount
        total_money.setAttribute('total_money', prov_money - money);
        //Get tra tri sau khi da tru
        to_money = parseInt(total_money.getAttribute("total_money"));
        //In so tien sau khi da tru ra ngoai
        total_money.innerHTML = convert_money(to_money) + ' đ';

        //last_money
        last_pay_selector.innerText = convert_money(to_money) + 'đ';
    }
}


//! deli_unit

function fee_deli() {
    var money_deli = (30000 + Math.floor(Math.random() * 10000));
    var fee_deli_selector = document.querySelector('.fee_deli span');

    if(document.querySelector('.fee_deli').style.display == 'none'){
        fee_deli_selector.setAttribute('fee_deli', money_deli);
        fee_deli_selector.innerText = convert_money(money_deli) + ' đ';

        //last_money
        Last_money();

        document.querySelector('.fee_deli').style.display = 'flex';
    }else{
        if(document.querySelector('#deli_unit_sl').value == 0){
            document.querySelector('.fee_deli').style.display = 'none';
            fee_deli_selector.setAttribute('fee_deli', 0);

            //last_money
            Last_money();
        }else{
            fee_deli_selector.setAttribute('fee_deli', money_deli);
            fee_deli_selector.innerText = convert_money(money_deli) + ' đ';

            //last_money
            Last_money();
        }
    }
}

function Last_money(){
    let m_provisional = prov_money;
    let m_discount = parseInt(document.querySelector('.money_dis').getAttribute('money_dis'));
    let m_fee_deli = parseInt(document.querySelector('.fee_deli span').getAttribute('fee_deli'));
    m_last = m_provisional - m_discount + m_fee_deli;

    //last_money
    last_pay_selector.setAttribute('last_money', m_last);
    last_pay_selector.innerText = convert_money(m_last) + ' đ';
}


