
//! product_slider

document.addEventListener( 'DOMContentLoaded', function () {
    // new Splide( '.splide' ).mount();
    new Splide( '.splide', {
        type   : 'loop',
        perPage: 4,
        perMove: 2,
        gap: 20,
    } ).mount();
} );

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
