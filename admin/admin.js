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
    document.querySelector('.infoGift__item:last-child').insertAdjacentHTML('beforebegin','<li class="infoGift__item text_edittor" contenteditable spellcheck="false"><span class="infoGift__icon" contenteditable="false"><i class="fas fa-check-circle" ></i></span><span class="infoGift__text" name="giftProduct">Nội dung quà tặng</span></li>');
};

document.querySelector('.addConfig_wr').onclick = function () {  
    document.querySelector('.productConfig__item:last-child').insertAdjacentHTML('beforebegin','<li class="productConfig__item text_edittor" contenteditable="true" spellcheck="false"><div name="titleConfig" class="li__left">Tên cấu hình</div><div name="contentConfig" class="li__right">Nội dung cấu hình</div></li>');
};


//! text focus_blur

function text_edit_Event(event,a,b) {
    switch (event) {
        case 'focus':
            document.querySelector(a).onfocus = function (){
                document.querySelector(b).style.display = 'block';
            };
            break;
        case 'blur':
            document.querySelector(a).onblur = function (){
                document.querySelector(b).style.display = 'none';
            };
            break;
        case 'click':
            document.querySelector(b).onclick = function (){
                document.querySelector(a).remove();
            };
            break;
        default:
            break;
    }
}

text_edit_Event('focus', '.infoGift__item', '.x_icon');
text_edit_Event('blur', '.infoGift__item', '.x_icon');
text_edit_Event('click', '.infoGift__item', '.x_icon');


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
  