var url = window.location.search;

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

//! ../admin/index.php/management/product  

//! Xu ly select cayegory, brand product

var category_select = document.querySelector('#category_select');
var brand_select = document.querySelector('#brand_select');
var array = Array.from(brand_select.querySelectorAll('option[categoryid]'));

if(!url.includes("create")){
    if(!url.includes("category_id")){
        category_select.options[0].selected = true;
    }else{
        if (localStorage.getItem('category')) {
            category_select.options[localStorage.getItem('category')].selected = true;
        }
    }

    if(!url.includes("brand_id")){
        brand_select.options[0].selected = true;
    }else{
        if (localStorage.getItem('brand')) {
            brand_select.options[localStorage.getItem('brand')].selected = true;
        }
    }

    $( document ).ready(function() {
        array.forEach(element => {
            if(element.getAttribute('categoryid') == category_select.value){
                element.style.display = 'block';
            }else{
                element.style.display = 'none';
            }
        });

    });
    category_select.onchange = () =>{
        if(category_select.value == '#'){
            window.location.href = `?management&product`;
        }else{
            window.location.href = `?management&product&category_id=${category_select.value}`;
            localStorage.setItem('category', category_select.selectedIndex);
            console.log(localStorage.getItem('category'));
        }
    };

    brand_select.onchange = () =>{
        if(brand_select.value == '#'){
            window.location.href = `?management&product&category_id=${category_select.value}`;
        }else{
            window.location.href = `?management&product&category_id=${category_select.value}&brand_id=${brand_select.value}`;
            localStorage.setItem('brand', brand_select.selectedIndex);
        }
    };
}

//! pagination
var pageCurrent;


function currentPage() {
    if(!url.includes("page")){
        return 1;
    }else{
        return /page=([^&]+)/.exec(url)[1];
    }
}

var pagination_link = document.querySelector(`.pagination_link[pageCurrent="${currentPage()}"]`);
pagination_link.classList.add('currentPage');