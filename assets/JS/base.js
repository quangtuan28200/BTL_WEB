
//! GET URL

var url = window.location.search;

//! LOADER CONTROLLER

$(document).ready(function() {
    $('.loader_container').css("display", "none");
    $('.content_loaded').css("display", "block");
});

//!Notify
var notify_container = document.querySelector('.notify_container');
var x_buton = document.querySelector('.notify_wr i:last-child');
var icon = document.querySelector('.notify_wr i:first-child');
var textNotify = document.querySelector('.notify_wr span');

x_buton.onclick = () =>{
    notify_container.style.right = "-50%";
};

function readCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

var cookie_cart_success = readCookie('add-success');
var cookie_cart_out_range = readCookie('out-quan-range');

if(cookie_cart_success){
    document.addEventListener('DOMContentLoaded', () => {
        textNotify.innerText = 'Thêm thành công';
        setTimeout(() => {
            notify_container.style.right = "0";
            setTimeout(() => {
                notify_container.style.right = "";     
            }, 1500);
        }, 300);
    });
}

if(cookie_cart_out_range){
    document.addEventListener('DOMContentLoaded', () => {
        notify_container.classList.add("error");
        icon.style.color="red";
        icon.setAttribute("class", "fas fa-exclamation-circle");
        textNotify.innerText = 'Sản phẩm đã hết';
        setTimeout(() => {
            notify_container.style.right = "0";
            setTimeout(() => {
                notify_container.style.right = "";     
            }, 1500);
        }, 300);
    });
}

//! random_number

function random_number(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}