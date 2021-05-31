<!-- thanh toan -->
<div class="cart__wrapper wide" style="display: block">
    <div class="cart__area row">
        <div class="cart__product col l-7">
            <div class="cart__productWrap">
                <div class="cart__productHeader">
                    <h4 class="productHeader">SẢN PHẨM</h4>
                    <h4 class="productHeader__price">GIÁ</h4>
                    <h4 class="productHeader__amount">SỐ LƯỢNG</h4>
                </div>

                <ul class="cart__productList ul__format">
                    <li class="cart__productItem">
                        <div class="cart__productImg">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="cart__productName">
                            <a href="#">Bao da đeo đa di năng Remax YD-03</a>    
                        </div>
                        <div class="cart__productPriceWr">
                            <span class="cart__productPrice">15.000.000</span>                  
                            <span>đ</span>
                        </div>
                        <div class="cart__productAmount">
                            <input type="button" value="-" class="minus_btn" onclick="minus_plus(-1)">
                            <input type="number" min="1" max="99" step="1" value="1" class="number_field">
                            <input type="button" value="+" class="plus_btn" onclick="minus_plus(1)">
                        </div>
                        <div class="cart__productRemove">
                            <a href="#">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div>
                    </li>
                    <li class="cart__productItem">
                        <div class="cart__productImg">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="cart__productName">
                            <a href="#">Bao da đeo đa di năng Remax YD-03</a>    
                        </div>
                        <div class="cart__productPriceWr">
                            <span class="cart__productPrice">15.000.000</span>   
                            <span>đ</span>
                        </div>
                        <div class="cart__productAmount">
                            <input type="button" value="-" class="minus_btn" onclick="minus_plus(-1)">
                            <input type="number" min="1" max="99" step="1" value="1" class="number_field">
                            <input type="button" value="+" class="plus_btn" onclick="minus_plus(1)">
                        </div>
                        <div class="cart__productRemove">
                            <a href="#">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div>
                    </li>
                    <li class="cart__productItem">
                        <div class="cart__productImg">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="cart__productName">
                            <a href="#">Bao da đeo đa di năng Remax YD-03</a>    
                        </div>
                        <div class="cart__productPriceWr">
                            <span class="cart__productPrice">15.000.000</span>   
                            <span>đ</span>
                        </div>
                        <div class="cart__productAmount">
                            <input type="button" value="-" class="minus_btn" onclick="minus_plus(-1)">
                            <input type="number" min="1" max="99" step="1" value="1" class="number_field">
                            <input type="button" value="+" class="plus_btn" onclick="minus_plus(1)">
                        </div>
                        <div class="cart__productRemove">
                            <a href="#">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div>
                    </li>    
                    <li class="cart__productItem">
                        <div class="cart__productImg">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="cart__productName">
                            <a href="#">Bao da đeo đa di năng Remax YD-03</a>    
                        </div>
                        <div class="cart__productPriceWr">
                            <span class="cart__productPrice">15.000.000</span>   
                            <span>đ</span>
                        </div>
                        <div class="cart__productAmount">
                            <input type="button" value="-" class="minus_btn" onclick="minus_plus(-1)">
                            <input type="number" min="1" max="99" step="1" value="1" class="number_field">
                            <input type="button" value="+" class="plus_btn" onclick="minus_plus(1)">
                        </div>
                        <div class="cart__productRemove">
                            <a href="#">
                                <i class="far fa-times-circle"></i>
                            </a>
                        </div>
                    </li>                        
                </ul>

                <div class="cart__productBtn">
                    <a href="#">
                        <i class="fas fa-arrow-left"></i>
                        <span>Xem sản phẩm khác</span> 
                    </a>
                </div>
            </div>
        </div>
        <div class="cart__pay col l-5">
            <div class="cart__payWrap">
                <form id="cart__payForm" method="POST" action="">
                    <h4 class="cart__payHeader">TẠO PHIẾU THANH TOÁN</h4>
                
                    <div class="area_total">
                        <div class="discountcode">                               
                            <div class="applycode__text_input">
                                <input class="input_format" maxlength="20" placeholder="Nhập mã giảm giá">
                            </div>
                            <div class="applycode__code" onclick="makeid(12)">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <div class="applycode__button">
                                <button class="input_format" type="button" onclick="money_discount()">Áp dụng</button>
                            </div>                                   
                        </div>
                        <div class="applycode_suc">
                            <i class="fas fa-check-circle"></i>
                            <span>Áp dụng thành công mã giảm giá </span> 
                        </div>
                        <div class="price_provisional">
                            <span class="price_provisional_label">
                                Tạm tính
                                <span>( 3 sản phẩm ):</span>
                            </span>
                            <span class="price_provisional_money"></span>
                        </div>
                        <div class="money_discount" style="display: none;">
                            <span>Mã giảm giá:</span>                                  
                            <span name="money_dis" class="money_dis" money_dis = "0" style="color: green"></span>
                        </div>
                        <div class="price_total">
                            <strong class="price_total_label">Tổng tiền:</strong>
                            <span class="price_total_money"></span>
                        </div>
                        
                    </div>

                    <div class="infor_customer">
                        <h4>THÔNG TIN KHÁCH HÀNG:</h4>
                        
                        <div class="sex_customer form_group">
                            <input name="gender" type="radio" value="male"> Anh
                            <input name="gender" type="radio" value="female"> Chị
                            <span class="form_message">vui long nhap</span>                                                     
                        </div>
                        
                        <div id="fill_informWrap">                                    
                            <div class="form_group"> 
                                <input id="fill_inforName" name="name" class="input_format form_control" placeholder="Họ và Tên" type="text" maxlength="50">  
                                <span class="form_message"></span>                                                     
                            </div>

                            <div class="form_group"> 
                                <input id="fill_inforSDT" name="phone"  class="input_format form_control" placeholder="Số điện thoại" type="text" maxlength="50">                                
                                <span class="form_message"></span>                                                     
                            </div>
                        </div>                            
                    </div>

                    <div class="choosegetgoods">
                        <h4>THÔNG TIN NHẬN HÀNG:</h4>
                        
                        <div class="choose_content">
                            <div class="form_group">    
                                <input id="address_input" name="address" class="input_format form_control" type="text" placeholder="Nhập địa chỉ nhận hàng">
                                <span class="form_message"></span>                                                                                               
                            </div>
                            <div class="form_group">
                                <input id="other_request" name="request" class="input_format form_control" type="text" placeholder="Yêu cầu khác (không bắt buộc)">                                                               
                            </div>
                        </div>

                        <div class="deli_unitWr">
                            <div class=" form_group">
                                <div class="deli_unit">
                                    <p>Đơn vị vận chuyển:</p>
                                    <select name="deli_unit" id="deli_unit_sl" onchange="fee_deli()">
                                        <option value="0">Chọn đơn vị vận chuyển</option>
                                        <option value="1">Giao hàng nhanh</option>
                                        <option value="2">Giao hàng tiết kiệm</option>
                                        <option value="3">J&T</option>
                                        <option value="4">Vietnam Post</option>
                                    </select>
                                </div>
                                <span class="form_message" style="text-align: end;"></span>                                                     
                            </div>
                            <div class="fee_deli" style="display: none">
                                <p>Phí giao hàng:</p>
                                <span fee_deli = "0">0 đ</span>
                            </div>
                        </div>

                        <div class="pay_with">
                            <p>Hình thức thanh toán: </p>
                            <input name="pay_format" type="radio" value="Khi nhận hàng" checked="checked"> Khi nhận hàng
                            <input type="radio" disabled> <span style="color: #ccc;">Bằng thẻ (update)</span>                        
                        </div>
                    </div>

                    <div class="cart_payBtn">
                        <div class="last_pay">
                            <p>Phải trả:</p>
                            <span></span>
                        </div>
                        <button class="input_format">ĐẶT HÀNG</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>