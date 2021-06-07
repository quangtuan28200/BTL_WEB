
<?php
    $sql_categories = 'SELECT * FROM category';
    $sql_category = 'SELECT name FROM category WHERE slug = "'.$_GET['product'].'"';
    $sql_brands = 'SELECT brand.name, brand.slug FROM category, brand 
    WHERE category.id = category_id AND category.slug = "'.$_GET['product'].'"';

    $query_categories = mysqli_query($mysqli, $sql_categories);
    $query_category = mysqli_query($mysqli, $sql_category);
    $category = mysqli_fetch_row($query_category);

    $query_brands = mysqli_query($mysqli, $sql_brands);
?>

<!-- san pham -->
<div class="content__wrapper wide" style="display: block">
    <!-- heading -->
    <div class="content__heading row">
        <div class="content__headingText col l-3">
            <a href="home">TRANG CHỦ</a>
            <span>/</span>
            <h4><?php echo mb_strtoupper($category[0], 'UTF-8') ;  ?></h4>
        </div>

        <div class="headingFilter__container col l-9">
            <div class="content__headingFilter">
                <span>Lọc theo hãng sản xuất :</span>
                <select name="" id="fllter_brand_select" class="oderBy__select">
                    <option value="#" selected="selected">Chọn hãng sản xuất</option>
                    <?php
                        while ($brands = mysqli_fetch_array($query_brands)) {
                    ?>
                        <option value="<?php echo $brands['slug'] ?>" ><?php echo $brands['name'] ?></option>                       
                    <?php
                        }
                    ?>
                </select>
                
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
                    <?php
                        while ($categories = mysqli_fetch_array($query_categories)) {
                    ?>
                        <li class="Category__item">
                            <a product="<?php echo $categories['slug']; ?>" href="?product=<?php echo $categories['slug']; ?>" class="Category__link"><?php echo $categories['name'] ?></a>
                        </li>
                    <?php
                        }
                    ?>
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