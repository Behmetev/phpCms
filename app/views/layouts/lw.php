<!DOCTYPE html>
<html>

<head>
    <?= $this->getMeta(); ?>
    <link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--Custom-Theme-files-->
    <!--theme-style-->
    <link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--start-menu-->
    <link rel="stylesheet" href="/megamenu/css/style.css">
    <link rel="stylesheet" href="/megamenu/css/ionicons.min.css">
</head>

<body>
    <!--top-header-->
    <div class="top-header">
        <div class="container">
            <div class="top-header-main">
                <div class="col-md-6 top-header-left">
                    <div class="drop">
                        <div class="box">
                            <select id="currency" tabindex="4" class="dropdown drop">
                                <?php new app\widget\currency\Currency(); ?>
                            </select>
                        </div>
                        <div class="box1">
                            <select tabindex="4" class="dropdown">
                                <option value="" class="label">English :</option>
                                <option value="1">English</option>
                                <option value="2">French</option>
                                <option value="3">German</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-6 top-header-left">
                    <div class="cart box_1">
                        <a href="checkout.html">
                            <div class="total">
                                <span class="simpleCart_total"></span>
                            </div>
                            <img src="/images/cart-1.png" alt="" />
                        </a>
                        <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--top-header-->
    <!--start-logo-->
    <div class="logo">
        <a href="/">
            <h1>Luxury Watches</h1>
        </a>
    </div>
    <!--start-logo-->
    <!--bottom-header-->
    <div class="header-bottom">
        <div class="container">
            <div class="header">
                <div class="col-md-9 header-left">
                    <div class="menu-container">
                        <div class="menu">
                            <?php new \app\widget\menu\Menu([
                                'tpl' => WWW . '/menu/menu.php',
                                'attrs' => []
                            ]); ?>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-3 header-right">
                    <div class="search-bar">
                        <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--bottom-header-->

    <div class="content">
        <?= $content; ?>
    </div>

    <!--information-starts-->
    <div class="information">
        <div class="container">
            <div class="infor-top">
                <div class="col-md-3 infor-left">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#"><span class="fb"></span>
                                <h6>Facebook</h6>
                            </a></li>
                        <li><a href="#"><span class="twit"></span>
                                <h6>Twitter</h6>
                            </a></li>
                        <li><a href="#"><span class="google"></span>
                                <h6>Google+</h6>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Information</h3>
                    <ul>
                        <li><a href="#">
                                <p>Specials</p>
                            </a></li>
                        <li><a href="#">
                                <p>New Products</p>
                            </a></li>
                        <li><a href="#">
                                <p>Our Stores</p>
                            </a></li>
                        <li><a href="contact.html">
                                <p>Contact Us</p>
                            </a></li>
                        <li><a href="#">
                                <p>Top Sellers</p>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>My Account</h3>
                    <ul>
                        <li><a href="account.html">
                                <p>My Account</p>
                            </a></li>
                        <li><a href="#">
                                <p>My Credit slips</p>
                            </a></li>
                        <li><a href="#">
                                <p>My Merchandise returns</p>
                            </a></li>
                        <li><a href="#">
                                <p>My Personal info</p>
                            </a></li>
                        <li><a href="#">
                                <p>My Addresses</p>
                            </a></li>
                    </ul>
                </div>
                <div class="col-md-3 infor-left">
                    <h3>Store Information</h3>
                    <h4>The company name,
                        <span>Lorem ipsum dolor,</span>
                        Glasglow Dr 40 Fe 72.
                    </h4>
                    <h5>+955 123 4567</h5>
                    <p><a href="mailto:example@email.com">contact@example.com</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--information-end-->
    <!--footer-starts-->
    <div class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="col-md-6 footer-left">
                    <form>
                        <input type="text" value="Enter Your Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Email';}">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--footer-end-->
    <script src="/js/jquery-1.11.0.min.js"></script>
    <script src="/js/simpleCart.min.js"> </script>
    <script type="text/javascript" src="/js/memenu.js"></script>
    <script>
        $(document).ready(function() {
            $(".memenu").memenu();
        });
    </script>
    <!--dropdown-->
    <script src="/js/jquery.easydropdown.js"></script>
    <!--Slider-Starts-Here-->
    <script src="/js/responsiveslides.min.js"></script>

    <script>
        // You can also use "$(window).load(function() {"
        $(function() {
            // Slideshow 4
            $("#slider4").responsiveSlides({
                auto: true,
                pager: true,
                nav: true,
                speed: 500,
                namespace: "callbacks",
                before: function() {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function() {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!--End-slider-script-->
    <script src="/js/main.js"></script>
    <script src="/megamenu/js/megamenu.js"></script>
    <?php
    $logs = R::getDatabaseAdapter()
        ->getDatabase()
        ->getLogger();

    debug($logs->grep('SELECT'));
    ?>
</body>

</html>