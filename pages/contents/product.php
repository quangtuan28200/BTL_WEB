<!-- san pham -->
<div class="content__wrapper wide" style="display: block">
    <!-- heading -->
    <div class="content__heading row">
        <div class="content__headingText col l-3">
            <a href="#">TRANG CHỦ</a>
            <span>/</span>
            <h4>MÁY TÍNH</h4>
        </div>

        <div class="headingFilter__container col l-9">
            <div class="content__headingFilter">
                <span>Lọc theo hãng sản xuất :</span>
                <form action="" class="oderBy__form">
                    <select name="" class="oderBy__select">
                        <option value="default" selected>Thứ tự mặc định</option>
                        <option value="new">Sản phẩm mới nhất</option>
                        <option value="price_asc">Giá: thấp đến cao</option>
                        <option value="price_desc">Giá: cao xuống thấp</option>
                    </select>
                </form>
            </div>
            <div class="content__headingFilter">
                <span>Lọc sản phẩm theo :</span>
                <form action="" class="oderBy__form">
                    <select name="" class="oderBy__select">
                        <option value="default" selected>Thứ tự mặc định</option>
                        <option value="new">Sản phẩm mới nhất</option>
                        <option value="price_asc">Giá: thấp đến cao</option>
                        <option value="price_desc">Giá: cao xuống thấp</option>
                    </select>
                </form>
            </div>
        </div>
    </div>

    <!-- content__product -->
    <div class="content__products row">
        <!-- navigation -->
        <div class="productsNav__Container col l-3">
            <!-- category -->
            <div class="products__Category">
                <h4 class="Category__header">DANH MỤC SẢN PHẨM</h4>
                <ul class="Category__list">
                    <li class="Category__item">
                        <a href="#" class="Category__link" onclick="active__cate(0)">Laptop</a>
                    </li>
                    <li class="Category__item">
                        <a href="#" class="Category__link" onclick="active__cate(1)">Điện thoại</a>
                    </li>
                    <li class="Category__item">
                        <a href="#" class="Category__link" onclick="active__cate(2)">Camera</a>
                    </li>
                    <li class="Category__item">
                        <a href="#" class="Category__link" onclick="active__cate(3)">Tai nghe</a>
                    </li>
                    <li class="Category__item">
                        <a href="#" class="Category__link" onclick="active__cate(4)">Chuột</a>
                    </li>
                    <li class="Category__item">
                        <a href="#" class="Category__link" onclick="active__cate(5)">Bàn phím</a>
                    </li>
                </ul>
            </div>

            <!-- filter__price -->
            <div class="products__FilterPrice">
                <h4 class="FilterPrice__header">LỌC THEO GIÁ</h4>
                <div class="price_slider_wrapper">
                    <input type="range" class="slide" min="1000000" max="15000000" value="5000000" id="myRange">
                    <div class="price_slider_amount">
                        <button type="submit" class="filter__btn btn">Lọc</button>
                        <div class="price_label">
                            <span class="gia">Giá:</span>
                            <span class="from">1.000.000 đ</span> 
                            <span class="gachngang">-</span> 
                            <span id="price_desc"></span> 
                            <span class="d"> đ</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- product -->
        <div class="products__Container col l-9">
            <div class="products__Area row">
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="products__Wrap col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="#">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="#">Ô dù trong suốt bền đẹp Remax</a>
                            </div>
                            <div class="product__textPrice">
                                150.000 
                                <span>đ</span>
                            </div>
                            
                            <div class="product__textButton">
                                <a href="#">Thêm vào giỏ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pagination__area">
                <ul class="pagination__list ul__format">
                    
                    <li class="pagination__item">
                        <a href="#" class="pagination__link a_format">
                            <i class="fas fa-chevron-left"></i>
                        </a>
                    </li>

                    
                    <li class="pagination__item">
                        <a href="#" class="pagination__link a_format">1</a>
                    </li>              
                    <li class="pagination__item">
                        <a href="#" class="pagination__link a_format">2</a>
                    </li>

                    
                    <li class="pagination__item">
                        <a href="#" class="pagination__link a_format">
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </li>                             
                </ul>
            </div>
        </div>
    </div>

</div>