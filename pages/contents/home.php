<!-- trang chu -->
<div class="content__wrapper wide" style="display: block">
    <!-- slide -->
    <div class="content__slide row">
        <div class="col l-9">
            <div class="slideshow__container">
                <!-- Full-width images with number and caption text -->
                <div class="mySlides fadeIn">                           
                    <img src="./assets/imgs/banner.jpg" style="width:100%">                           
                </div>
                
                <div class="mySlides fadeIn">
                    <img src="./assets/imgs/banner1.jpg" style="width:100%">
                </div>
                
                <div class="mySlides fadeIn">
                    <img src="./assets/imgs/baner2.jpg" style="width:100%">
                </div>
                
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a class="next" onclick="plusSlides(1)">
                    <i class="fas fa-chevron-right"></i>
                </a>

                <!-- The dots/circles -->
                <div class="dot__component">
                    
                </div>
            </div>
        </div>
        <div class="col l-3">
            <div class="slide__news">
                <div class="slide__newsWrapper">
                    <!-- news__header -->
                    <div class="news__header">
                        <div class="news__headerWr news__product" 
                        onclick="activeNews__header(0)"
                        onmouseover="hoverNews__header()"
                        onmouseout="outNews__header()">
                            <a href="#">Sản phẩm</a> 
                        </div>
                        <div class="news__headerWr news_news" 
                        onclick="activeNews__header(1)"
                        onmouseover="hoverNews__header()"
                        onmouseout="outNews__header()">
                            <a href="#">Tin tức</a>  
                        </div>
                    </div>

                    <!-- news__contentArea -->
                    <div class="news__contentArea">
                        <div class="news__contentWr news__productArea">
                            <div class="news__contentWrap">
                                <div class="news__contentHeader">
                                    <a href="#">Cách chèn nhạc vào ảnh và video trên Facebook</a>           
                                </div>
                                <div class="news__contentDate">
                                    10 Tháng 5, 2021
                                </div>
                                <div class="news__content">
                                    Những bức ảnh và video trên Facebook của bạn sẽ thêm phần thú vị hơn ...					
                                </div>
                            </div>
                            <div class="news__contentWrap">
                                <div class="news__contentHeader">
                                    <a href="#">iPhone XI đã được bán ra ở Trung Quốc với 3 phiên bản màu</a>           
                                </div>
                                <div class="news__contentDate">
                                    10 Tháng 5, 2021
                                </div>
                                <div class="news__content">
                                    Thông tin về iPhone XI ra mắt khiến fan công nghệ chờ đợi và tò ...										
                                </div>
                            </div>
                        </div>
                        <div class="news__contentWr news__newsArea">
                            <div class="news__contentWrap">
                                <div class="news__contentHeader">
                                    <a href="#">Bạn có nên lo lắng về việc iPhone của bạn có thể phát nổ?</a>           
                                </div>
                                <div class="news__contentDate">
                                    10 Tháng 5, 2021
                                </div>
                                <div class="news__content">
                                    Có rất nhiều thông tin đề cập đến iPhone phát nổ gây ra nhiều nguy ...					
                                </div>
                            </div>
                            <div class="news__contentWrap">
                                <div class="news__contentHeader">
                                    <a href="#">Xiaomi ra mắt máy cạo râu Mi Beard Trimmer</a>           
                                </div>
                                <div class="news__contentDate">
                                    10 Tháng 5, 2021
                                </div>
                                <div class="news__content">
                                    Sau khi trở thành một công ty điện tử tiêu dùng lớn ở Ấn Độ, ...													
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- hot__products -->
    <div class="content__area">
        <div class="content__areaWrapper">
            <!-- content__header -->
            <div class="content__header">
                <h3>Sản phẩm nổi bật</h3>
                <i class="fas fa-chevron-right"></i> 
                <span>Những sản phẩm đang bán chạy nhất</span> 
            </div>

            <!-- content__product -->
            <div class="content__product row">
                <div class="product__area col l-3">
                    <div class="product__areaWrapper">
                        <div class="product__img">
                            <a href="?product-detail">
                                <img src="./assets/imgs/bao-da-deo-da-di-nang-remax-yd-03-21042018092610-300x300.jpg" alt="">
                            </a>
                        </div>
                        <div class="product__textArea">
                            <div class="product__textHeader">
                                <a href="?product-detail">Ô dù trong suốt bền đẹp Remax</a>
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
                <div class="product__area col l-3">
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
                <div class="product__area col l-3">
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
                <div class="product__area col l-3">
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

            <!-- Xem Them -->
            <div class="content__footer">
                <a href="#">Xem thêm</a>
                <i class="fas fa-chevron-right"></i> 
            </div>
        </div>
    </div>

    <!-- new__products -->
    <div class="content__area">
        <div class="content__areaWrapper">
            <!-- content__header -->
            <div class="content__header">
                <h3>Sản phẩm mới</h3> 
                <i class="fas fa-chevron-right"></i>
                <span>Những sản phẩm mới về</span> 
            </div>

            <!-- content__product -->
            <div class="content__product row">
                <div class="product__area col l-3">
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
                <div class="product__area col l-3">
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
                <div class="product__area col l-3">
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
                <div class="product__area col l-3">
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

            <!-- Xem Them -->
            <div class="content__footer">
                <a href="#">Xem thêm</a>
                <i class="fas fa-chevron-right"></i> 
            </div>
        </div>
    </div>

    <!-- may tinh -->
    <div class="content__area">
        <div class="content__areaWrapper">
            <!-- content__header -->
            <div class="content__header">
                <h3>Máy tính</h3> 
                <i class="fas fa-chevron-right"></i>
                <span></span> 
            </div>

            <!-- content__product -->
            <div class="content__product row">
                <div class="product__area col l-3">
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
                <div class="product__area col l-3">
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
                <div class="product__area col l-3">
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
                <div class="product__area col l-3">
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

            <!-- Xem Them -->
            <div class="content__footer">
                <a href="#">Xem thêm</a>
                <i class="fas fa-chevron-right"></i> 
            </div>
        </div>
    </div>
</div>