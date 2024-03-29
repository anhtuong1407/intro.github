
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

<body class="productDetail">
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
        <div class="breadcrumb">
            <div class="container">
                <a href="./" class="link-homepage">Trang chủ</a>
                <span>></span><a href="./all-product.html" class="link-promotion">CHƯƠNG TRÌNH KHUYẾN MÃI "KHÔNG GIAN TRỐNG" | BLANK SPACE PROMOTION</a>
                <span>></span><a class="link-product active">ÁO KHOÁC GEISHA-DOW MÀU VÀNG | FWG210303</a>
            </div>

        </div>
        <div class="productDetail-content">
            <div class="container">
                <div class="right">
                    <div class="slider">
                        <div class="slider-item">
                            <img src="../img/product-1.webp" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="../img/product-2.webp" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="../img/product-3.webp" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="../img/product-4.webp" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="../img/product-5.webp" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="../img/product-6.webp" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="../img/product-7.webp" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="../img/product-8.webp" alt="">
                        </div>
                        <div class="slider-item">
                            <img src="../img/product-9.webp" alt="">
                        </div>
                    </div>
                    <div class="thumb">
                        <div class="thumb__list">
                            <div class="thumb__list-item">
                                <img src="../img/product-1.webp" alt="">
                            </div>
                            <div class="thumb__list-item">
                                <img src="../img/product-2.webp" alt="">
                            </div>
                            <div class="thumb__list-item">
                                <img src="../img/product-3.webp" alt="">
                            </div>
                            <div class="thumb__list-item">
                                <img src="../img/product-4.webp" alt="">
                            </div>
                            <div class="thumb__list-item">
                                <img src="../img/product-5.webp" alt="">
                            </div>
                            <div class="thumb__list-item">
                                <img src="../img/product-6.webp" alt="">
                            </div>
                            <div class="thumb__list-item">
                                <img src="../img/product-7.webp" alt="">
                            </div>
                            <div class="thumb__list-item">
                                <img src="../img/product-8.webp" alt="">
                            </div>
                            <div class="thumb__list-item">
                                <img src="../img/product-9.webp" alt="">
                            </div>
                        </div>
                        <div class="thumb__control">
                            <button class="thumb__control-btn next">
                                <img src="../img/next.svg" alt="">
                            </button>
                            <button class="thumb__control-btn prev">
                                <img src="../img/prev.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <h3 class="name">
                        ÁO KHOÁC GEISHA-DOW MÀU VÀNG | FWG210303
                    </h3>
                    <div class="price">
                        <span class="new">652.500<span>₫</span></span>
                        <span class="old">725.000₫<span>₫</span></span>
                    </div>
                    <div class="size">
                        <div class="size-text">SIZE:</div>
                        <span class="active">S</span>
                        <span>M</span>
                        <span>L</span>
                        <span>XL</span>
                    </div>
                    <div class="amount">
                        <div class="amount-text">Số lượng:</div>
                        <div class="amount-click">
                            <p class="increase">-</p>
                            <input type="number" name="" id="" value="1">
                            <p class="decrease">+</p>
                        </div>
                    </div>
                    <button class="btn-submit">Mua liền yk</button>
                    <div class="service">
                        <p class="call">Gọi <span class="number">0981225771</span> nếu cậu cần tụi Mèo tư vấn.</p>
                        <div class="service__wrapText">
                            <div class="service__wrapText-img">
                                <img src="../img/sicon-1.webp" alt="">
                            </div>
                            <p>CHÚNG TỚ CÓ NHẬN VẬN CHUYỂN THU HỘ TOÀN VŨ TRỤ</p>
                        </div>
                        <div class="service__wrapText">
                            <div class="service__wrapText-img">
                                <img src="../img/sicon-2.webp" alt="">
                            </div>
                            <p>LIÊN HỆ INSTAGRAM | FACEBOOK ĐỂ GẶP MÈO TƯ VẤN NHANH NHẤT
                            </p>
                        </div>
                        <div class="service__wrapText">
                            <div class="service__wrapText-img">
                                <img src="../img/sicon-3.webp" alt="">
                            </div>
                            <p>TẤT CẢ SẢN PHẨM ĐỀU CÓ SỐ LƯỢNG GIỚI HẠN
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="productDetail-someInfo">
            <div class="container">
                <h4>Mô tả</h4>
                <div class="img someInfo-1">
                    <img src="../img/mota-1.webp" alt="">
                </div>
                <div class="img someInfo-2">
                    <img src="../img/mota-2.webp" alt="">
                </div>
            </div>
        </div>
        <div class="productDetail-related">
            <h4>CÁC SẢN PHẨM <span>LIÊN QUAN</span></h4>
            <div class="product">
                <div class="container">
                    <div class="product__list">
                        <a href="./product-detail.html" class="product__list-item">
                            <img src="../img/product-1.webp" alt="">
                            <div class="info">
                                <div class="info-name text-content">ÁO KHOÁC GEISHA-DOW MÀU VÀNG | FWG210303</div>
                                <div class="info-price">
                                    <span class="new">652.500đ</span>
                                    <span class="old">725.500đ</span>
                                </div>
                            </div>
                            <div class="discount"><span>-10%</span></div>
                            <div class="button">Mua liền yk</div>
                        </a>
                        <a href="./product-detail.html" class="product__list-item">
                            <img src="../img/product-1.webp" alt="">
                            <div class="info">
                                <div class="info-name text-content">ÁO KHOÁC GEISHA-DOW MÀU VÀNG | FWG210303</div>
                                <div class="info-price">
                                    <span class="new">652.500đ</span>
                                    <span class="old">725.500đ</span>
                                </div>
                            </div>
                            <div class="discount"><span>-10%</span></div>
                            <div class="button">Mua liền yk</div>
                        </a>
                        <a href="../product-detail.html" class="product__list-item">
                            <img src="../img/product-1.webp" alt="">
                            <div class="info">
                                <div class="info-name text-content">ÁO KHOÁC GEISHA-DOW MÀU VÀNG | FWG210303</div>
                                <div class="info-price">
                                    <span class="new">652.500đ</span>
                                    <span class="old">725.500đ</span>
                                </div>
                            </div>
                            <div class="discount"><span>-10%</span></div>
                            <div class="button">Mua liền yk</div>
                        </a>
                        <a href="../product-detail.html" class="product__list-item">
                            <img src="../img/product-1.webp" alt="">
                            <div class="info">
                                <div class="info-name text-content">ÁO KHOÁC GEISHA-DOW MÀU VÀNG | FWG210303</div>
                                <div class="info-price">
                                    <span class="new">652.500đ</span>
                                    <span class="old">725.500đ</span>
                                </div>
                            </div>
                            <div class="discount"><span>-10%</span></div>
                            <div class="button">Mua liền yk</div>
                        </a>
                    </div>
                    <div class="product__control">
                        <div class="product__control-btn next">
                            <img src="../img/next.svg" alt="">
                        </div>
                        <div class="product__control-btn prev">
                            <img src="../img/prev.svg" alt="">
                        </div>
                    </div>
                </div>
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