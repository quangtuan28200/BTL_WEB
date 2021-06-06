//! confirm delete

var deletes =  document.querySelectorAll('.delete');
var modal_delete = document.querySelector('.modal_delete');
var modal_close = document.querySelector('.modal_close');
if(deletes){
    Array.from(deletes).forEach(element => {
        element.onclick = (e)=>{
            e.preventDefault();
            modal_delete.setAttribute('href', element.getAttribute('href'));
            document.querySelector('.modal').style.display = 'block';
        };
    });
}

if(modal_close){
    modal_close.onclick = ()=>{
        document.querySelector('.modal').style.display = 'none';
    };
}

//! notify

// var x_buton = document.querySelector('.notify_wr i:last-child');
// var notify_container = document.querySelector('.notify_container');

// x_buton.onclick = () =>{
//     notify_container.style.left = "";
// };

// console.log(getCookie('checkSuccess'));

// if(getCookie('checkSuccess') == 1){
//     $( document ).ready(function() {
//         setTimeout(() => {
//             notify_container.style.left = "80%";      
//         }, 200);
//     });
// }

//! get cookie
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}