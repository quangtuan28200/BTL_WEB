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
    $("html, body").animate({ scrollTop: 0 }, 300);  
}

//! typing effect placehoder

// your custome placeholder goes here!
var ph = "Nhập sản phẩm cần tìm",
	searchBar = $('.search__input input'),
	// placeholder loop counter
	phCount = 0;

// function to return random number between
// with min/max range
function randDelay(min, max) {
	return Math.floor(Math.random() * (max-min+1)+min);
}

// function to print placeholder text in a 
// 'typing' effect
function printLetter(string, el) {
	// split string into character seperated array
	var arr = string.split(''),
		input = el,
		// store full placeholder
		origString = string,
		// get current placeholder value
		curPlace = $(input).attr("placeholder"),
		// append next letter to current placeholder
		placeholder = curPlace + arr[phCount];
		
	setTimeout(function(){
		// print placeholder text
		$(input).attr("placeholder", placeholder);
		// increase loop count
		phCount++;
		// run loop until placeholder is fully printed
		if (phCount < arr.length) {
			printLetter(origString, input);
		}
	// use random speed to simulate
	// 'human' typing
	}, 40);
}  

// function to init animation
function placeholder() {
	$(searchBar).attr("placeholder", "");
	printLetter(ph, searchBar);
}

placeholder();