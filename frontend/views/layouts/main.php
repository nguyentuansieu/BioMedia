<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\web\View;
use common\onecms\NavWidget;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="cms-index-index cms-home-page">
<?php $this->beginBody() ?>

<header>
    <div class="header-container">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-xs-7">
                        <!-- Header Language -->
                        <div class="dropdown block-language-wrapper">
                            <?=Html::a(Html::img('/images/vietnam.png') .' Tiếng Việt <span class="caret"></span>', '#', [
                                'class' => 'block-language dropdown-toggle',
                                'data-toggle' => 'dropdown',
                                'data-target' => '#',
                                'role' => 'button',
                            ]); ?>
                            <ul class="dropdown-menu" role="menu">
                                <li role="presentation">
                                    <?=Html::a(Html::img('/images/vietnam.png') .' Tiếng Việt', '#', [
                                        'tabindex' => '-1',
                                        'role' => 'menuitem',
                                    ]); ?>
                                </li>
                                <li role="presentation">
                                    <?=Html::a(Html::img('/images/english.png') .' English', '#', [
                                        'tabindex' => '-1',
                                        'role' => 'menuitem',
                                    ]); ?>
                                </li>
                                <li role="presentation">
                                    <?=Html::a(Html::img('/images/francais.png') .' French', '#', [
                                        'tabindex' => '-1',
                                        'role' => 'menuitem',
                                    ]); ?>
                                </li>
                                <li role="presentation">
                                    <?=Html::a(Html::img('/images/german.png') .' German', '#', [
                                        'tabindex' => '-1',
                                        'role' => 'menuitem',
                                    ]); ?>
                                </li>
                                <li role="presentation">
                                    <?=Html::a(Html::img('/images/spanish.png') .' Spanish', '#', [
                                        'tabindex' => '-1',
                                        'role' => 'menuitem',
                                    ]); ?>
                                </li>
                                <li role="presentation">
                                    <?=Html::a(Html::img('/images/menuitem.png') .' Swedish', '#', [
                                        'tabindex' => '-1',
                                        'role' => 'menuitem',
                                    ]); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="welcome-msg hidden-xs">Welcome to Bio Media</div>
                    </div>
                    <div class="col-sm-8 col-xs-5">
                        <div class="toplinks">
                            <div class="links">
                                <div class="myaccount"><a title="My Account" href="#"><span
                                            class="hidden-xs">Giới thiệu</span></a></div>
                                <div class="check"><a title="Checkout" href="#"><span
                                            class="hidden-xs">Liên hệ</span></a></div>
                                <div class="wishlist"><a title="My Wishlist" href="#"><span
                                            class="hidden-xs">Đánh giá</span></a></div>
                                <div class="wishlist"><a title="My Wishlist" href="#"><span
                                            class="hidden-xs">Tạp chí</span></a></div>
                                <div class="login"><a href="#"><span class="hidden-xs">Đăng ký / Đăng nhập</span></a>
                                </div>
                            </div>
                            <!-- links -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="logo">
                        <?= HTML::a(HTML::img('/images/logo.png', ['class' => 'img-responsive']), '/'); ?>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <div class="phone"><em class="icon-phone">&nbsp;</em>

                                <div class="phone-box"><strong>Hotline 247</strong><br/><span>+844 6662 6362</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <div class="phone"><em class="icon-phone">&nbsp;</em>

                                <div class="phone-box"><strong>Hà Nội</strong><br/><span>+844 6686 7486</span></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <div class="phone"><em class="icon-phone">&nbsp;</em>

                                <div class="phone-box"><strong>Hồ Chí Minh</strong><br/><span>+84 1289 777 888</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-xs-12">
                            <div class="phone"><em class="icon-phone">&nbsp;</em>

                                <div class="phone-box"><strong>Đà Nẵng</strong><br/><span>+84 905 053 395</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-xs-12">
                            <!-- Search-col -->
                            <div class="search-box pull-right">
                                <form action="cat" method="POST" id="search_mini_form" name="Categories">
                                    <input type="text" placeholder="Tìm kiếm hãng, công ty, sản phẩm, bài viết"
                                           maxlength="70"
                                           name="search" id="search">
                                    <button type="button" class="btn btn-default  search-btn-bg"><span
                                            class="glyphicon glyphicon-search"></span>&nbsp;</button>
                                </form>
                            </div>
                            <!-- End Search-col -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="header-menu">
                                <a href="#" class="label label-success">
                                    Sự kiện
                                </a>
                                <a href="#" class="label label-info">
                                    Video
                                </a>
                                <a href="#" class="label label-warning">
                                    Tuyển dụng
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?=NavWidget::widget(); ?>

<?= $content ?>

<!-- Footer -->
<footer>
    <div class="brand-logo">
        <div class="container">
            <div class="slider-items-products">
                <div id="brand-logo-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col6">
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/1.gif'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/1.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/2.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/3.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/4.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/5.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/6.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/7.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/8.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/9.png'), '#'); ?></div>
                        <div class="item"><?= HTML::a(HTML::img('/uploads/logo-partner/10.png'), '#'); ?></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="newsletter-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8">
                    <div class="newsletter">
                        <form>
                            <div>
                                <h4><span>newsletter</span></h4>
                                <input type="text" name="email" id="newsletter1" title="Sign up for our newsletter"
                                       class="input-text" placeholder="Nhập email đăng ký nhận tin từ Bio Meida">
                                <button type="submit" title="Subscribe" class="subscribe"><span>Đăng ký</span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--newsletter-->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="inner">
                        <div class="social pull-right">
                            <ul class="link">
                                <li class="fb pull-left"><a href="#"></a></li>
                                <li class="tw pull-left"><a href="#"></a></li>
                                <li class="googleplus pull-left"><a href="#"></a></li>
                                <li class="rss pull-left"><a href="#"></a></li>
                                <li class="pintrest pull-left"><a href="#"></a></li>
                                <li class="linkedin pull-left"><a href="#"></a></li>
                                <li class="youtube pull-left"><a href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3">
                    <div class="footer-column-1 pull-left">
                        <div class="footer-logo">
                            <?= HTML::a(HTML::img('/images/footer-logo.png', ['class' => 'img-responsive']), '/'); ?>
                        </div>
                        <p>Công ty truyền thông uy tín trong lĩnh vực Công nghệ sinh học - Xét nghiệm y tế - Thực phẩm -
                            Dược phẩm - Hóa học - Môi trường…</p>

                        <div class="payment-accept">
                            <div>
                                <?=Html::img('/images/payment-1.png', ['class' => 'first']); ?>
                                <?=Html::img('/images/payment-2.png'); ?>
                                <?=Html::img('/images/payment-3.png'); ?>
                                <?=Html::img('/images/payment-4.png', ['class' => 'last']); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
                    <div class="footer-column pull-left">
                        <h4>Giới thiệu về BioMedia</h4>
                        <ul class="links">
                            <li class="first"><a href="#" title="How to buy">Tầm nhìn, sứ mệnh</a></li>
                            <li><a href="#" title="FAQs">Đội ngũ nhân sự</a></li>
                            <li><a href="#" title="Payment">Đánh giá của chuyên gia</a></li>
                            <li><a href="#" title="Shipment&lt;/a&gt;">Thiện nguyện</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2">
                    <div class="footer-column pull-left">
                        <h4>Tuyển dụng</h4>
                        <ul class="links">
                            <li class="first"><a title="Your Account" href="#">Quản lý cao cấp</a></li>
                            <li><a title="Information" href="#">Nhân viên kinh doanh</a></li>
                            <li><a title="Addresses" href="#">Nhân viên PTN</a></li>
                            <li><a title="Addresses" href="#">Hành chính - Kế toán</a></li>
                            <li><a title="Orders History" href="#">Vị trí khác</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-2  col-lg-2">
                    <div class="footer-column pull-left">
                        <h4>Danh mục</h4>
                        <ul class="links">
                            <li class="first"><a href="#" title="Site Map">Công nghệ sinh học</a></li>
                            <li><a href="#" title="Search Terms">Xét nghiệm y tế</a></li>
                            <li><a href="#" title="Advanced Search">Dược phẩm & thực phẩm</a></li>
                            <li><a href="contact-us.html" title="Contact Us">Thiết bị cơ bản</a></li>
                            <li><a href="#" title="Suppliers">Hóa chất - Vật tư</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="footer-column-last pull-left">
                        <h4>Liên hệ</h4>
                        <address>
                            <i class="add-icon">&nbsp;</i>Tòa nhà 200 Nguyễn Xiển<br/>&nbsp;Thanh Xuân, Hà Nội
                        </address>
                        <div class="phone-footer"><i class="phone-icon">&nbsp;</i>+844 6686 7486</div>
                        <div class="email-footer"><i class="email-icon">&nbsp;</i><a
                                href="#">info@biomedia.vn</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-xs-12 coppyright"> &copy; 2015. Bản quyền thuộc về <a href="#">
                        BioMedia.vn</a>.
                </div>
                <div class="col-sm-7 col-xs-12 company-links">
                    <ul class="links">
                        <li><a title="Magento Themes" href="#">Chát với BioMedia</a></li>
                        <li><a title="Premium Themes" href="#">Tạp chí BioMedia</a></li>
                        <li><a title="Responsive Themes" href="#">Video</a></li>
                        <li class="last"><a title="Magento Extensions" href="#">Sự kiện</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<?php
$js = '
jQuery(document).ready(function () {
        jQuery(\'#rev_slider_4\').show().revolution({
            dottedOverlay: \'none\',
            delay: 5000,
            startwidth: 1170,
            startheight: 320,

            hideThumbs: 200,
            thumbWidth: 200,
            thumbHeight: 50,
            thumbAmount: 2,

            navigationType: \'thumb\',
            navigationArrows: \'solo\',
            navigationStyle: \'round\',

            touchenabled: \'on\',
            onHoverStop: \'on\',

            swipe_velocity: 0.7,
            swipe_min_touches: 1,
            swipe_max_touches: 1,
            drag_block_vertical: false,

            spinner: \'spinner0\',
            keyboardNavigation: \'off\',

            navigationHAlign: \'center\',
            navigationVAlign: \'bottom\',
            navigationHOffset: 0,
            navigationVOffset: 20,

            soloArrowLeftHalign: \'left\',
            soloArrowLeftValign: \'center\',
            soloArrowLeftHOffset: 20,
            soloArrowLeftVOffset: 0,

            soloArrowRightHalign: \'right\',
            soloArrowRightValign: \'center\',
            soloArrowRightHOffset: 20,
            soloArrowRightVOffset: 0,

            shadow: 0,
            fullWidth: \'on\',
            fullScreen: \'off\',

            stopLoop: \'off\',
            stopAfterLoops: -1,
            stopAtSlide: -1,

            shuffle: \'off\',

            autoHeight: \'off\',
            forceFullWidth: \'on\',
            fullScreenAlignForce: \'off\',
            minFullScreenHeight: 0,
            hideNavDelayOnMobile: 1500,

            hideThumbsOnMobile: \'off\',
            hideBulletsOnMobile: \'off\',
            hideArrowsOnMobile: \'off\',
            hideThumbsUnderResolution: 0,

            hideSliderAtLimit: 0,
            hideCaptionAtLimit: 0,
            hideAllCaptionAtLilmit: 0,
            startWithSlide: 0,
            fullScreenOffsetContainer: \'\'
        });
    });
    ';
$this->registerJs($js, 3);
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
