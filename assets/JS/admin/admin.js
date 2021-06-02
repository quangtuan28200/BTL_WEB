
//! validate product brand
var select_category = document.querySelector('#select_category');
var input_nameBrand = document.querySelector('#input_nameBrand');
var form_add_brand = document.querySelector('#add_brand');
var category_name = document.querySelectorAll('.category_name');
var brand_name = document.querySelectorAll('.brand_name');

function isExist() {
    var result = select_category.options[select_category.selectedIndex].text;
    for (let index = 0; index < category_name.length; index++) {
        if(category_name[index].innerText == result){
            for (let i = 0; i < brand_name.length; i++) {
                if(brand_name[i].innerText.toLowerCase() == input_nameBrand.value.toLowerCase()){
                    return true;
                }
            }
        }   
    }
    return false;
}

form_add_brand.onsubmit = (e) => {
    validatePr(select_category, e);
    validatePr(input_nameBrand, e);
    if(isExist()){
        e.preventDefault();
        input_nameBrand.classList.add('validate');
    }
};

select_category.oninput = () =>{
    if(select_category.value == ''){
        select_category.classList.add('validate');
    }else{
        select_category.classList.remove('validate');
    }
};

input_nameBrand.oninput = () =>{
    if(input_nameBrand.value == ''){
        input_nameBrand.classList.add('validate');
    }else{
        input_nameBrand.classList.remove('validate');
    }
};

function validatePr(input, e) {
    if(input.value == ''){
        e.preventDefault();
        input.classList.add('validate');
    }else{
        input.classList.remove('validate');
    }
}



//! format price_product

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

var price_slt = document.querySelector('.product__infoPrice span');
price_slt.onblur = function () {  
    let mn = convert_money(this.innerHTML);
    this.innerHTML = convert_money(mn) + '<span contenteditable="false"> đ</span>' ;
};

//! Get value text_editor

document.querySelector('.btn_save button').onclick = function () { 
    let text_selc = document.querySelectorAll('[name]:not(meta)');
    let vl = '';
    let vl1 = '';
    let vl2 = '';

    let form1Values = Array.from(text_selc).reduce(function (values, input) {
        if(input.type == 'number'){
            values.quantityProduct = input.value;
        }else if(input.type == 'file'){
            values.imgProduct = input.files;
        }
        else if(input.getAttribute("name") == 'giftProduct'){
            vl += input.innerText + '$';
            values.giftProduct = vl;
        }
        else if(input.getAttribute("name") == 'titleConfig'){
            vl1 += input.innerText + '$';
            values.titleConfig = vl1;
        }else if(input.getAttribute("name") == 'contentConfig'){
            vl2 += input.innerText + '$';
            values.contentConfig = vl2;
        }else if(input.getAttribute("name") == 'priceProduct'){
            let x = input.innerText.split(' đ').join('');
            values.priceProduct = x.split('.').join('');
        }
        else{
            values[input.getAttribute("name")] = input.innerText;
        }
        return values;
    }, {});
    console.log(form1Values);
};

//! add li
    
document.querySelector('.addGift_wr').onclick = function () {  
    document.querySelector('.infoGift__item:last-child').insertAdjacentHTML('beforebegin','<li class="infoGift__item text_edittor" contenteditable spellcheck="false"><span class="infoGift__icon" contenteditable="false"><i class="fas fa-check-circle" ></i></span><span class="infoGift__text" name="giftProduct">Nội dung quà tặng</span><span class="x_icon" contenteditable="false" ><i class="fas fa-times-circle"></i></span></li>');
    let li = document.querySelectorAll('li[contenteditable]');
    let x_icon = document.querySelectorAll('.x_icon');
    qwe(li, x_icon);
};

document.querySelector('.addConfig_wr').onclick = function () {  
    document.querySelector('.productConfig__item:last-child').insertAdjacentHTML('beforebegin','<li class="productConfig__item text_edittor" contenteditable="true" spellcheck="false"><div name="titleConfig" class="li__left">Tên cấu hình</div><div name="contentConfig" class="li__right">Nội dung cấu hình</div><span class="x_icon" contenteditable="false" ><i class="fas fa-times-circle"></i></span></li>');
    let li = document.querySelectorAll('li[contenteditable]');
    let x_icon = document.querySelectorAll('.x_icon');
    qwe(li, x_icon);
};


//! text focus_blur

let li = document.querySelectorAll('li[contenteditable]');
let x_icon = document.querySelectorAll('.x_icon');

function qwe(li, x_icon) {
    for (let index = 0; index < li.length; index++) {
        li[index].onfocus = function () {  
            if(li[index] === document.activeElement){          
                x_icon[index].style.display = 'block';
                x_icon[index].onclick = function (){
                    li[index].remove();
                };
            }
        };
    
        li[index].onblur = function () {  
            for (let index1 = 0; index1 < li.length; index1++) {
                x_icon[index1].style.display = 'none';
            }
        };
    }
}

qwe(li, x_icon);

//! upload IMG
function readURL(input) {
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('.image-upload-wrap').hide();
  
        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();
  
        $('.image-title').html(input.files[0].name);
      };
  
      reader.readAsDataURL(input.files[0]);
  
    } else {
      removeUpload();
    }
}
  
function removeUpload() {
    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
    $('.file-upload-content').hide();
    $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
    $('.image-upload-wrap').addClass('image-dropping');
});

$('.image-upload-wrap').bind('dragleave', function () {
    $('.image-upload-wrap').removeClass('image-dropping');
});