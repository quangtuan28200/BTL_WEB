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
        // $("#myBtn").animate({ 
        //     opacity: '1',
        //     bottom: '40px'
        // }, 300); 
    } else {    
        $("#myBtn").fadeOut();
        // $("#myBtn").animate({ 
        //     opacity: '0',
        //     bottom: '20px',
        // }, 300); 
        // setTimeout(() => {
        //     $("#myBtn").hide();
        // }, 300);      
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    // document.body.scrollTop = 0;
    // document.documentElement.scrollTop = 0;
    $("html, body").animate({ scrollTop: 0 }, 400);  
}
