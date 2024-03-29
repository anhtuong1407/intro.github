
<?php
    require_once '../config/db.php';
?>
<?php
    $sql = "SELECT *FROM products inner join brands on products.brand_id = brands.brand_id";
    $query = mysqli_query($connect,$sql);

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 , maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Grunt Template</title>
    <link rel="icon" href="favicon.ico">
    <meta name="title" content="Milano" />
    <meta name="description" content="" />
    <!-- meta facebook -->
    <meta property="og:locale" content="en" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Grunt Template" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="Grunt Template" />
    <meta property="og:image" content="" />

    <link rel="stylesheet" href="dest/style.min.css">
    <link rel="stylesheet" href="dest/fonts.css">
</head>

<body class="homepage">
    <div class="loading"></div>
    <header class="header">
        <div class="container">
            <p class="text-content">HOTLINE: 0981225771</p>
            <div class="header__logo">
                <img src="../img/logo.webp" alt="">
            </div>
            <ul class="header__menu">
                <li class="text-content"><a href="">Tài khoản</a></li>
                <li class="text-content"><a href="">Giỏ hàng</a></li>
            </ul>
        </div>
    </header>
    <main class="mainwrapper">
        <div class="banner">
            <img src="../img/slider_1.webp" alt="">
        </div>
        <div class="product">
            <div class="container"> 
                <h3 class="product__title">CHƯƠNG TRÌNH "KHÔNG GIAN TRỐNG"</h3>
                <div class="product__list">
                <?php
                   $i =1;
                        while($row = mysqli_fetch_assoc($query)){?>
                                 <a href="product-detail.php" class="product__list-item">
                        <img src="../img/<?php echo $row['image']; ?>" alt="">
                        <div class="info">
                            <div class="info-name text-content"><?php echo $row['prd_name']; ?></div>
                            <div class="info-price">
                                <span class ="new"><?php echo $row['price']; ?></span>
                                <span class="old"><?php echo $row['quantity']; ?></span>

                            </div>
                        </div>
                        <div class="discount"><span>-10%</span></div>
                        <div class="button">Mua liền yk</div>
                    </a>
                              
                        <?php } ?> 
                </div>
                <div class="product__control">
                    <div class="product__control-btn next">
                        <img src="../img/next.svg" alt="">
                    </div>
                    <div class="product__control-btn prev">
                        <img src="../img/prev.svg" alt="">
                    </div>
                </div>
                <button class="product__btn" ><span>Xem tất cả </span></button>
            </div>
        </div>
        <div class="detail">
            <div class="container">
                <div class="detail__title">
                    "KHÔNG GIAN TRỐNG" BẮT ĐẦU SAU
                </div>
            </div>
            <div class="detail__img">
                <img src="../img/slider_6.webp" alt="">
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="section1">
                <div class="footer__text">
                    <div class="text-content">CHÍNH SÁCH TỤI MÈO</div>
                    <div class="footer__text-list">
                        <div class="footer__text-list-item">Chính sách bảo mật</div>
                        <div class="footer__text-list-item">Chính sách vận chuyển</div>
                        <div class="footer__text-list-item">Chính sách đổi trả</div>
                        <div class="footer__text-list-item">Chính sách thanh toán</div>
                        <div class="footer__text-list-item">Chính sách bảo hành</div>
                    </div>
                </div>
                <div class="footer__text">
                    <div class="text-content">CÁC BST CỦA TỤI MÈO</div>
                    <div class="footer__text-list">
                        <div class="footer__text-list-item">BST HỆ MẶT MÈO</div>
                        <div class="footer__text-list-item">BST GEISHA-HOA</div>
                        <div class="footer__text-list-item">BST GEISHA-DOW</div>
                        <div class="footer__text-list-item">BST GEISHAR-RK DOO DOO</div>
                        <div class="footer__text-list-item">BST ĐẠI ĐOÁ</div>
                    </div>
                </div>
            </div>
            <div class="section2">
                <div class="section2__left">
                    <div class="logo">
                        <img src="../img/logo.webp" alt="">
                    </div>
                    <div>
                        <p class="company">Công ty TNHH DSC Group</p>
                        <p class="address">Địa chỉ: 110 Bà Hạt,phường 9 quận 10,T.P Hồ Chí Minh
</p>
                        <p class="acs">Giấy CN ĐKKD MST 0316635694 do sở KH và ĐT T.p Hồ Chí Minh Cấp: 11/12/2020
</p>
                    </div>
                </div>
                <div class="section2__right">
                    <div class="section2__right-icons">
                        <img src="../img/tiktok.webp" alt="">
                        <img src="../img/fb.webp" alt="">
                        <img src="../img/ins.webp" alt="">
                    </div>
                    <div class="section2__right-contact">
                        <div class="phone">
                            <img src="../img/phone.webp" alt="">
                            <p>0981225771</p>
                        </div>
                        <div class="email">
                            <img src="../img/mail.webp" alt="">
                            <p>fw.goodsvn@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bocongthuong">
                <img src="../img/bocongthuong.webp" alt="">
            </div>
        </div>
        <div class="section3">
            <p>Công ty TNHH DSC Group | Cung cấp bởi Sapo</p>
        </div>
    </footer>

    <!-- Global JS -->
    <script type="text/javascript" src="dest/jsmain.min.js"></script>
    <script type="text/javascript" src="dest/main.js"></script>

</body>

</html>