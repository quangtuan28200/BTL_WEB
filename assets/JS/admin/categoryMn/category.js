
//! validate

var input_nameCategory = document.querySelector('#input_nameCategory');
var form_add_category = document.querySelector('#add_category');
var category_name = document.querySelectorAll('.category_name');

form_add_category.onsubmit = (e) => {
    if(input_nameCategory.value == '' || isExist()){
        e.preventDefault();
        input_nameCategory.classList.add('validate');
    }else{
        input_nameCategory.classList.remove('validate');
    }
};

input_nameCategory.oninput = () => {
    if(input_nameCategory.value == ''){
        input_nameCategory.classList.add('validate');
    }else{
        input_nameCategory.classList.remove('validate');
    }
};

function isExist() {
    for (let i = 0; i < category_name.length; i++) {
        if(category_name[i].innerText.toLowerCase() == input_nameCategory.value.toLowerCase()){
            return true;
        }
    }
    return false;
}

//! confirm delete

var deletes =  document.querySelectorAll('.delete');
var modal_delete = document.querySelector('.modal_delete');

Array.from(deletes).forEach(element => {
    element.onclick = (e)=>{
        e.preventDefault();
        modal_delete.setAttribute('href', element.getAttribute('href'));
        document.querySelector('.modal').style.display = 'block';
    };
});


document.querySelector('.modal_close').onclick = ()=>{
    document.querySelector('.modal').style.display = 'none';
};