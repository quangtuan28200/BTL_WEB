//! convert_money

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

//! total_money

var cart_product_quantity = document.querySelectorAll('.cart__productItem').length;

document.querySelector('.price_provisional_label span').innerText = '( ' + cart_product_quantity + ' sản phẩm ):';

var asd = document.querySelectorAll('.cart__productPrice');
// var qwe = document.querySelectorAll('.number_field');
// console.log(qwe);

var dsa = Array.from(asd).reduce(function (value, input) {  
    return value + convert_money(input.innerText);
}, 0);

var provisional_money = document.querySelector('.price_provisional_money');
var total_money = document.querySelector('.price_total_money');

// tao attribute gan tong tam vao
provisional_money.setAttribute("provisional_money", dsa);
//Lay value cua attribute tong tam
var prov_money = parseInt(provisional_money.getAttribute("provisional_money")) ;

// tao attribute gan tong tien vao
total_money.setAttribute('total_money', prov_money);
//Lay value cua attribute tong tien
var to_money = parseInt(total_money.getAttribute("total_money")) ;

//In money ra ngoai dang string
provisional_money.innerText = convert_money(prov_money) + ' đ';
total_money.innerText = convert_money(to_money) + ' đ';

//last_money
var last_pay_selector = document.querySelector('.last_pay span');
last_pay_selector.setAttribute('last_money', to_money);
last_pay_selector.innerText = convert_money(to_money) + ' đ';

//! random_discountCode
function makeid(length) {
var result           = [];
var characters       = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
var charactersLength = characters.length;
    for ( var i = 0; i < length; i++ ) {
        result.push(characters.charAt(Math.floor(Math.random() * charactersLength)));
    }

    document.querySelector('.applycode__text_input input').value = result.join('');
}

function money_discount() {
    input = document.querySelector('.applycode__text_input input');

    if(input.value == ''){
        input.style.boxShadow = '0 0 5px red';
    }
    else{
        money = 200000 + Math.floor(Math.random() * 100000);

        // input.removeAttribute("style");
        document.querySelector('.discountcode').style.display = 'none';
        document.querySelector('.money_discount').style.display = 'flex';
        document.querySelector('.applycode_suc').style.display = 'block';

        var money_dis = document.querySelector('.money_dis');
        //gan gia tri cua money_discount vao attribute
        money_dis.setAttribute("money_dis", money);
        //In money ra ngoai
        money_dis.innerText = '- ' + convert_money(money) + ' đ';

        //gan lai gia tri cho attribute tong tien sau khi tru money-discount
        total_money.setAttribute('total_money', prov_money - money);
        //Get tra tri sau khi da tru
        to_money = parseInt(total_money.getAttribute("total_money"));
        //In so tien sau khi da tru ra ngoai
        total_money.innerHTML = convert_money(to_money) + ' đ';

        //last_money
        last_pay_selector.innerText = convert_money(to_money) + 'đ';
    }
}


//! deli_unit

function fee_deli() {
    var money_deli = (30000 + Math.floor(Math.random() * 10000));
    var fee_deli_selector = document.querySelector('.fee_deli span');

    if(document.querySelector('.fee_deli').style.display == 'none'){
        fee_deli_selector.setAttribute('fee_deli', money_deli);
        fee_deli_selector.innerText = convert_money(money_deli) + ' đ';

        //last_money
        Last_money();

        document.querySelector('.fee_deli').style.display = 'flex';
    }else{
        if(document.querySelector('#deli_unit_sl').value == 0){
            document.querySelector('.fee_deli').style.display = 'none';
            fee_deli_selector.setAttribute('fee_deli', 0);

            //last_money
            Last_money();
        }else{
            fee_deli_selector.setAttribute('fee_deli', money_deli);
            fee_deli_selector.innerText = convert_money(money_deli) + ' đ';

            //last_money
            Last_money();
        }
    }
}

function Last_money(){
    let m_provisional = prov_money;
    let m_discount = parseInt(document.querySelector('.money_dis').getAttribute('money_dis'));
    let m_fee_deli = parseInt(document.querySelector('.fee_deli span').getAttribute('fee_deli'));
    m_last = m_provisional - m_discount + m_fee_deli;

    //last_money
    last_pay_selector.setAttribute('last_money', m_last);
    last_pay_selector.innerText = convert_money(m_last) + ' đ';
}

