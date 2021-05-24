//! Get value text_editor

document.querySelector('.btn_save button').onclick = function () { 
    let text_selc = document.querySelectorAll('[name]:not(meta)');
    let vl = '';
    let vl1 = '';
    let vl2 = '';

    let form1Values = Array.from(text_selc).reduce(function (values, input) {
        if(input.type == 'number'){
            values.quantityProduct = input.value;
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
    document.querySelector('.infoGift__item:last-child').insertAdjacentHTML('beforebegin','<li class="infoGift__item text_edittor" contenteditable spellcheck="false"><span class="infoGift__icon" contenteditable="false"><i class="fas fa-check-circle" ></i></span><span class="infoGift__text" name="giftProduct">Thêm quà tặng</span></li>');
};

document.querySelector('.addConfig_wr').onclick = function () {  
    document.querySelector('.productConfig__item:last-child').insertAdjacentHTML('beforebegin','< class="productConfig__item text_edittor" contenteditable="true" spellcheck="false"><div name="titleConfig" class="li__left">Tên cấu hình</div><div name="contentConfig" class="li__right">Nội dung cấu hình</div></>');
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


