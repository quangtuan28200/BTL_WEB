<?php
    session_start();

    $sql = 'SELECT * FROM category';
    $query = mysqli_query($mysqli, $sql);

    if(isset($_GET['add-to-cart'])){
        $sql_cart = 'SELECT * FROM product WHERE id ='.$_GET['id'];
        $query_cart = mysqli_query($mysqli, $sql_cart);
    }
?>

<!-- header -->
<header>
    <div class="header__wrapper">
        <!-- headerMain -->
        <div class="header__main grid">
            <div class="header__mainWrapper wide">
                <!-- logo -->
                <div class="header__logo">
                    <a href="home" class="logo__Link">
                        <img src="./assets/imgs/Screenshot_1.png" alt="logo">
                    </a>
                </div>

                <!-- search -->
                <div class="header__search">
                    <div class="search__input">
                        <input type="search" >
                    </div>
                    <div class="search__buttom">
                        <button type="submit">
                            <i class="fas fa-search"></i>
                            Tìm kiếm
                        </button>
                    </div>
                </div>

                <!-- login/register -->
                <div class="header__acc logged">
                    <div class="header__register">
                        <a href="#" class="header__registerLink">Đăng ký</a>           
                    </div>
                    <span class="item__separate"></span>
                    <div class="header__login">
                        <a href="#" class="header__loginLink">Đăng nhập</a>                                      
                    </div>
                    <div class="header__user">
                        <i class="fas fa-user-circle"></i>
                        <a href="#" class="header__userLink">Tên người dùng</a>             
                        
                        <!-- userMenu -->
                        <ul class="header__userMenu">
                            <li class="header__userItem">
                                <a href="#" class="userItem__Link">
                                    Tài khoản của tôi
                                </a>
                            </li>
                            <li class="header__userItem">
                                <a href="#" class="userItem__Link">
                                    Địa chỉ của tôi
                                </a>
                            </li>
                            <li class="header__userItem">
                                <a href="#" class="userItem__Link">
                                    Đơn mua
                                </a>
                            </li>
                            <li class="header__userItem">
                                <a href="#" class="userItem__Link">
                                    Đăng xuất
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                

                <!-- shopping-cart -->
                <div class="header__cart">
                    <a href="#" class="cart__link">
                        <i class="fas fa-shopping-cart">
                            <!-- su dung class 'active__cartNotice' neu co thong bao -->
                            <span class="cart__notice ">3</span>
                        </i>
                    </a>

                    <!-- cartItemMenu -->
                    <div class="header__cartMenu">

                        <!-- su dung class 'active__cartList' neu co san pham -->
                        <div class="header__cartMenuWrapper ">

                            <!-- Khong co san pham -->
                            <div class="no__cart">
                                <img src="./assets/imgs/nocart.png" alt="no cart">
                                <span>Chưa có sản phẩm nào trong giỏ hàng</span>
                            </div>

                            <!-- Co san pham -->
                            <div class="have__product">
                                <div class="cartList__header">Sản phẩm đã thêm</div>
    
                                <ul class="header__cartList">
                                    <?php
                                        if(isset($_SESSION['cart'])){
                                            foreach ($_SESSION['cart'] as $cart_item) {            
                                    ?>
                                        <li class="header__cartItem">               
                                            <div class="cartItem__img">
                                                <a href="?product-detail=<?php echo $cart_item['cate_slug'] ?>&brand=<?php echo $cart_item['brand_slug'] ?>&id=<?php echo $cart_item['id'] ?>">
                                                    <img src="./assets/imgs/admin/upload_img_product/<?php echo $cart_item['thumbnail'] ?>" alt="img">
                                                </a>
                                            </div>
                                            <div class="cartItem__content">
                                                <div class="cartItem__Name">
                                                    <a href="?product-detail=<?php echo $cart_item['cate_slug'] ?>&brand=<?php echo $cart_item['brand_slug'] ?>&id=<?php echo $cart_item['id'] ?>"><?php echo $cart_item['name'] ?></a>       
                                                </div>
                                                <div class="cartItem__InfoPay">
                                                    <div class="cartItem__Price"><?php echo number_format($cart_item['price'],0,"","."); ?> đ</div>
                                                </div>
                                            </div>
                                            <div class="cartItem__Remove">
                                                <a href="pages/contents/handle/product_handle.php?delete-to-cart&id=<?php echo $cart_item['id'] ?>"><i class="far fa-times-circle"></i></a>          
                                            </div>                       
                                        </li>
                                    <?php
                                           }
                                        }
                                    ?>
                                </ul>
    
                                <!-- Xem gio hang -->
                                <div class="show__spCart">
                                    <a href="?pay">Xem giỏ hàng</a>
                                </div>                                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- headerNav -->
        <div class="header__nav grid">
            <div class="Nav__wrapper wide">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="?product=laptop" class="nav__link">
                            <i class="fas fa-laptop"></i>
                            <span>Laptop</span> 
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="?product=dien-thoai" class="nav__link">
                            <i class="fas fa-mobile-alt"></i>
                            <span>Điện thoại</span> 
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="?product=camera" class="nav__link">
                            <i class="fas fa-camera"></i>
                            <span>Camera</span> 
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="?product=tai-nghe" class="nav__link">
                            <i class="fas fa-headphones-alt"></i>
                            <span>Tai nghe</span> 
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="?product=chuot" class="nav__link">
                            <i class="fas fa-mouse"></i>
                            <span>Chuột</span> 
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="?product=ban-phim" class="nav__link">
                            <i class="fas fa-keyboard"></i>
                            <span>Bàn phím</span> 
                        </a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <i class="fas fa-map-marked-alt"></i>
                            <span>Showroom KMA</span> 
                        </a>
                    </li><li class="nav__item">
                        <a href="#" class="nav__link">
                            <i class="fas fa-phone-square-alt"></i>
                            <span>Liên hệ</span> 
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- back__to__top -->
        <div onclick="topFunction()" id="myBtn">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>
</header>