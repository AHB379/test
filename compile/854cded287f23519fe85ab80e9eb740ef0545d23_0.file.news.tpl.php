<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 21:03:01
  from 'C:\xampp\htdocs\smarty\template\news.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5abf5de0625_96143555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '854cded287f23519fe85ab80e9eb740ef0545d23' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\template\\news.tpl',
      1 => 1604692937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa5abf5de0625_96143555 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo '<script'; ?>
 src="/js/jquery-3.5.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link type="text/css" rel="stylesheet" href="/css/bootstrap_rtl.css"/>
    <link type="text/css" rel="stylesheet" href="/css/owl.carousel.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/owl.theme.default.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/commonStyles.css"/>
    <link type="text/css" rel="stylesheet" href="/css/cssNews.css"/>
    <title>صفحه خبر</title>
</head>
<body>
<header class="container row" style="background-color: #C20000;">
    <span class="col-lg-7 col-sm-4"></span>
    <nav class="navbar container col-lg-26 col-md-28 col-sm-28">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <ul class="nav navbar-nav collapse navbar-collapse" id="myNavbar" style="padding-right: 0;">
            <li><a href="#" style="border-left: 1px solid #8e090a;">اقتصاد</a></li>
            <li><a href="#">علمی</a></li>
            <li><a href="#">اجتماعی</a></li>
            <li><a href="#">سلامت</a></li>
            <li class="active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/home">صفحه نخست</a>
                <ul class="dropdown-menu">
                    <li><a href="/service">عناوین کل اخبار</a></li>
                    <li><a href="#">پیشخوان</a></li>
                </ul>
            </li>
            <li class="hidden-lg hidden-md hidden-sm"><a href="#"><img src="/media/iconfinder_Hamburger_657904.png" width="25px" height="25px"/></a></li>
            <li class="hidden-lg hidden-md hidden-sm"><a href="#"><img src="/media/RSS.png" width="25px" height="25px"/></a></li>
            <li class="hidden-lg hidden-md hidden-sm"><a href="#"><img src="/media/iconfinder_Search_984754.png" width="25px" height="25px"/></a></li>
        </ul>
        <ul class="nav navbar-nav hidden-ms hidden-xs" style="padding-right: 0;">
            <li><a href="#"><img src="/media/iconfinder_Hamburger_657904.png" width="25px" height="25px"/></a></li>
            <li><a href="#"><img src="/media/RSS.png" width="25px" height="25px"/></a></li>
            <li><a href="#"><img src="/media/iconfinder_Search_984754.png" width="25px" height="25px"/></a></li>
        </ul>
    </nav>
</header>
<section class="container">
    <div class="owl-carousel owl-theme row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section1']->value, 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_0_saved = $_smarty_tpl->tpl_vars['news'];
?>
            <div class="item row"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                <img src="/media/slide1.jpg" alt="firstslide" class="col-xs-13" style="max-width:140px;"/>
                <h4 class="text-center"><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</h4>
            </a></div>
        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <div class="row">
        <div class="col-md-19 col-md-offset-1 col-md-pull-8 col-xs-36">
            <div class="row" id="topOFnewsbox">
                <div class="col-md-9 col-md-offset-9">
                    <a href="#">علمی</a><span style="padding: 0 10px;">/</span>
                    <a href="#" style="color: #058801">تازه های پزشکی</a>
                </div>
                <div class="col-md-8">۱۸:۱۹ - ۲۷ آبان ۱۳۹۸</div>
                <div class="col-lg-10 text-left">
                    <a href="#" class="newsIcon"><span class="fa fa-plus-square"></span></a>
                    <a href="#" class="newsIcon"><span>پ</span></a>
                    <a href="#" class="newsIcon"><span class="fa fa-minus-square"></span></a>
                    <a href="#" class="newsIcon"><span class="fa fa-save"></span></a>
                    <a href="#" class="newsIcon"><span class="fa fa-envelope-o"></span></a>
                    <a href="#" class="newsIcon"><span class="fa fa-print"></span></a>
                </div>
            </div>
            <div class="row text-center"><h4 style="font-weight: bold">در گفتگو با خبرنگاران مطرح شد؛</h4></div>
            <div class="row text-center"><h1 style="font-weight: bold">ساخت دستگاه برش لیزری پنج محور در کشور</h1></div>
            <div class="row" style="background-color: #EEEEEE; font-size: large; padding: 10px 15px; border-radius: 5px;">
                مدیرعامل یک شرکت دانش بنیان لیزری گفت: برای اولین بار در کشور موفق به ساخت یک دستگاه برش لیزری پنج محور شدیم.
            </div>
            <div class="row" style="padding: 20px 10px 0; font-size: 19px; text-align: justify">
                <img src="/media/underslide1.jpg" class="pull-left" style="margin: 0 10px 10px" width="300px" height="204.8px"/>
                <p>
                    امیرحسین بابایی، مدیرعامل یک شرکت دانش بنیان لیزری در گفت‌وگو با خبرنگار
                    <a href="#" style="color: red;">حوزه فناوری گروه علمی پزشکی باشگاه خبرنگاران جوان،</a> اظهار کرد:
                    برای اولین بار در کشور موفق به ساخت یک دستگاه برش لیزری پنج محور  شدیم
                    که تمام قطعات آن از لحاظ نرم افزاری و سخت افزاری، ایرانی است.
                </p>
                <p>
                    او افزود: باوجود برخی مشکلات، ورود این دستگاه ممنوع بود بنابراین ما تمام تجهیزات آن را بومی سازی کردیم.
                </p>
                <br/>
                <p>
                    بابایی ادامه داد: این دستگاه در صنایع خودروسازی با جایگزینی در قالب‌ها، برش‌های سه بعدی را انجام می‌دهد
                    مانند برش‌های قطعات بدنه خودرو و همین طور صنایع دیگر مانند لوازم خانگی.
                </p>
                <br/>
                <p>
                    مدیر عامل یک شرکت دانش بنیان لیزری گفت: برای صادرات این دستگاه طرح‌ها و برنامه‌هایی داریم.
                    اکنون با چند تولیدکننده داخلی قرارداد بستیم تا این دستگاه را در اختیار آنها قرار دهیم.
                </p>
                <br/>
                <p>
                    او افزود: با توجه به اینکه ما یک شرکت دانش بنیان هستیم و باید متکی به خود باشیم، اما نیازمند حمایت‌ هستیم .
                </p>
                <hr/>
                <p style="color: red">
                    بیشتر بخوانید: <a href="#" style="color: #1809A6">بومی سازی دستگاه حیاتی در آزمایشگاه اپتیک</a>
                </p>
                <hr/>
                <p>
                    بابایی تصریح کرد: ما تمام لیزر‌ها را خودمان تولید کردیم و با توجه به مقایسه مشتری‌هایمان این دستگاه
                    از نظر کیفیت با نمونه خارجی خود تفاوتی نداشته و از لحاظ قیمت یک سوم نمونه خارجی است.
                </p>
                <br/>
                <p>انتهای پیام/</p>
            </div>
            <div class="row" style="font-size: 17px">
                <span class="fa fa-tag"></span> برچسب ها:
                <button class="labels">فناوری</button>
                <button class="labels">تولید داخلی</button>
                <button class="labels">دستگاه لیزری</button>
            </div>
            <br/>
            <div class="row" style="font-size: 17px">
                <a href="/home" style="padding-left: 26px">
                    <span class="fa fa-home" style="margin-left: 9px"></span>بازدید از صفحه اول
                </a>
                <a href="#" style="padding-left: 26px">
                    <span class="fa fa-envelope-open" style="margin-left: 9px"></span>ارسال به دوستان
                </a>
                <a href="#" style="padding-left: 26px">
                    <span class="fa fa-print" style="margin-left: 9px"></span>نسخه چاپی
                </a>
                <a href="#" style="padding-left: 26px">
                    <span class="fa fa-envelope" style="margin-left: 9px"></span>خبرنامه
                </a>
                <a href="#" style="padding-left: 26px">
                    <span class="fa fa-exclamation-triangle" style="margin-left: 9px"></span>گزارش خطا
                </a>
            </div>
            <div class="row" style="margin: 20px 0; font-size: 19px">
                <div class="col-sm-17 col-sm-offset-1" style="background-color: #EEEEEE; border-radius: 9px">
                    <div class="row text-center">
                        <a class="col-xs-9 fa fa-paper-plane mediaIcons" href="#"></a>
                        <a class="col-xs-9 fa fa-google-plus mediaIcons" href="#"></a>
                        <a class="col-xs-9 fa fa-twitter mediaIcons" href="#"></a>
                        <a class="col-xs-9 fa fa-facebook mediaIcons" href="#"></a>
                    </div>
                </div>
                <div class="col-sm-18" style="background-color: #EEEEEE; border-radius: 9px">
                    <div class="row text-center" style="color: #c20000; padding: 10px 0;">
                        <label class="col-xs-15 col-xs-offset-6">لینک کوتاه :</label>
                        <a href="#" class="col-xs-15" style="font-size: 14px; color: #c20000;">mednews.ir/0000J7</a>
                    </div>
                </div>
            </div>
            <form class="row">
                <div class="col-xs-36"><label style="color: #C20000; font-size: 19px">ارسال نظرات</label></div>
                <div class="col-xs-36">
                    <div class="row">
                        <div class="col-md-18 col-md-offset-1 col-xs-36">
                            <div class="row">
                                <div class="col-ms-6 col-xs-36"><label>نام:</label></div>
                                <div class="col-ms-30 col-xs-36"><input type="text"/></div>
                            </div>
                            <div class="row">
                                <div class="col-ms-6 col-xs-36"><label>ایمیل:</label></div>
                                <div class="col-ms-30 col-xs-36"><input type="email"/></div>
                            </div>
                            <div class="row hidden-sm hidden-ms hidden-xs">
                                <div class="col-md-6"></div>
                                <div class="col-md-30">
                                    <input type="submit" value="ارسال"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-17 col-xs-36">
                            <div class="row">
                                <div class="col-ms-6 col-xs-36"><label>*نظر:</label></div>
                                <div class="col-ms-30 col-xs-36"><textarea></textarea></div>
                            </div>
                            <div class="row hidden-lg hidden-md">
                                <div class="col-xs-6"></div>
                                <div class="col-ms-30 col-xs-36">
                                    <input type="submit" value="ارسال"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-7 col-md-offset-1 col-md-push-20 col-sm-18 col-xs-36">
            <div class="row">
                <header class="row" style="border-bottom: 1px solid black">
                    <p class="col-lg-19"><?php echo $_smarty_tpl->tpl_vars['section10']->value['header'];?>
</p>
                </header>
                <div class="carousel slide" id="myCarousel1" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators text-left" id="minislide">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                        <li data-target="#myCarousel1" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->first) {?>
                        <div class="item active">
                        <?php } else { ?>
                        <div class="item">
                        <?php }?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section10']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_1_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                <span style="color: #BF0106;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                            </a></p>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <?php }
}
?>
                    </div>
                </div>
            </div>
            <div class="row">
                <header class="row" style="border-bottom: 1px solid black">
                    <p class="col-lg-11"><?php echo $_smarty_tpl->tpl_vars['section11']->value['header'];?>
</p>
                </header>
                <div class="carousel slide" id="myCarousel1" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators text-left" id="minislide">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                        <li data-target="#myCarousel1" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->first) {?>
                        <div class="item active">
                        <?php } else { ?>
                        <div class="item">
                        <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section11']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_2_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <span style="color: #BF0106;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                            </a></p>
                            <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <?php }
}
?>
                    </div>
                </div>
            </div>
            <div class="row">
                <header class="row" style="border-bottom: 1px solid black">
                    <p class="col-lg-19">آموزش و پرورش</p>
                </header>
                <div class="carousel slide" id="myCarousel1" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators text-left" id="minislide">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                        <li data-target="#myCarousel1" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->first) {?>
                        <div class="item active">
                        <?php } else { ?>
                        <div class="item">
                        <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section12']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_3_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['news']->iteration == 9) {?>
                                <?php break 1;?>
                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                <span style="color: #BF0106;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                            </a></p>
                            <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <?php }
}
?>
                    </div>
                </div>
            </div>
            <div class="row">
                <header class="row" style="border-bottom: 1px solid black">
                    <p class="col-lg-11">دانشگاه</p>
                </header>
                <div class="carousel slide" id="myCarousel1" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators text-left" id="minislide">
                        <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel1" data-slide-to="1"></li>
                        <li data-target="#myCarousel1" data-slide-to="2"></li>
                        <li data-target="#myCarousel1" data-slide-to="3"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 4+1 - (1) : 1-(4)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->first) {?>
                        <div class="item active">
                        <?php } else { ?>
                        <div class="item">
                        <?php }?>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section12']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_4_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['news']->iteration < 9) {?>
                                <?php continue 1;?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['news']->iteration != 9) {?>
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                <span style="color: #BF0106;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                            </a></p>
                            <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <?php }
}
?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-sm-18 col-xs-36">
            <a href="#"><img src="/media/tablighat.gif" class="row" width="100%" height="118.45px"/></a>

            <div class="row text-center newsTabs">
                <?php echo '<script'; ?>
 type="text/javascript">
                    var economytitle = ['#gold','#currency','#burse', '#car','#coin']
                <?php echo '</script'; ?>
>
                <div class="col-xs-6" id="gold" onclick="newstabs(0)">طلا</div>
                <div class="col-xs-6" id="currency" onclick="newstabs(1)">ارز</div>
                <div class="col-xs-6" id="burse" onclick="newstabs(2)">بورس</div>
                <div class="col-xs-6" id="car" onclick="newstabs(3)">خودرو</div>
                <div class="col-xs-6" id="coin" onclick="newstabs(4)">سکه</div>
            </div>
            <ul class="row ulnews" id="goldnews"></ul>
            <ul class="row ulnews" id="currencynews"></ul>
            <ul class="row ulnews" id="bursenews"></ul>
            <ul class="row ulnews" id="carnews"></ul>
            <ul class="row ulnews" id="coinnews"></ul>

            <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                <a href="#"><div class="col-xs-17" style="border-bottom: 2px solid #c30207; padding-right: 10px;">برچسب های منتخب</div></a>
            </div>
            <div class="row" style="font-size: larger;">
                <button class="col-xs-12 col-xs-offset-1 labels">اقتصاد معیشتی</button>
                <button class="col-xs-9 col-xs-offset-1 labels">سکته قلبی</button>
                <button class="col-xs-13 labels">جراحی پلاستیک</button>
            </div>

            <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">مطبوعات</div></a>
            </div>
            <div class="row">
                <a href="<?php echo $_smarty_tpl->tpl_vars['section15']->value['link'];?>
"><img src="/media/matbooat.jpg" style="width: fit-content;" class="col-xs-36"/>
                    <p class="col-xs-36 text-center"><?php echo $_smarty_tpl->tpl_vars['section15']->value['titr'];?>
</p></a>
            </div>

            <div class="row text-center newsTabs">
                <?php echo '<script'; ?>
 type="text/javascript">var TopRecenttitle = ['#top'=>'#topnews','#recent'=>'recentnews']<?php echo '</script'; ?>
>
                <div class="col-lg-11 col-md-12 col-sm-16 col-xs-9" id="top" onclick="news('#top')">برگزیده ها</div>
                <div class="col-lg-13 col-md-15 col-sm-18 col-xs-11" id="recent" onclick="news('#recent')">آخرین اخبار</div>
            </div>
            <ul class="row ulnews" id="topnews">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section14']->value, 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_5_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <span><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</span>
                        </a></li>
                <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_5_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <ul class="row ulnews" id="recentnews">
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['news']->total+1 - (1) : 1-($_smarty_tpl->tpl_vars['news']->total)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <li><a href="#">
                            <span>خبر <?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</span>
                        </a></li>
                <?php }
}
?>
            </ul>

            <div class="row text-center newsTabs">
                <div class="col-lg-10 col-md-12 col-sm-18 col-xs-9" id="maxvisit" onclick="news('#maxvisit')">پربازدیدها</div>
                <div class="col-lg-11 col-md-15 col-sm-18 col-xs-11" id="maxchallenge" onclick="news('#maxchallenge')">پر بحث ها</div>
            </div>
            <ul class="row ulnews" id="maxvisitnews"></ul>
            <ul class="row ulnews" id="maxchallengenews"></ul>
        </div>
    </div>
</section>
<footer class="container-fluid">
    <div class="row linky bordery">
        <a class="col-lg-3 col-sm-4 col-xs-8 footermenu" href="/home">صفحه نخست</a>
        <a class="col-sm-2 col-xs-5 footermenu text-center" href="#">سلامت</a>
        <a class="col-lg-2 col-sm-3 col-xs-5 footermenu text-center" href="#">اجتماعی</a>
        <a class="col-sm-2 col-xs-5 footermenu text-center" href="#">علمی</a>
        <a class="col-sm-2 col-xs-5 footermenu text-center" href="#" style="border-left: none;">اقتصاد</a>
    </div>
    <div class="row linky bordery">
        <a class="col-lg-2 col-sm-3 col-xs-6 footermenu" href="#">درباره ما</a>
        <a class="col-lg-2 col-sm-3 col-xs-6 footermenu text-center" href="#">تماس با ما</a>
        <a class="col-sm-2 col-xs-5 footermenu text-center" href="/archive">آرشیو</a>
        <a class="col-sm-2 col-xs-5 footermenu text-center" href="#">پیوند ها</a>
        <a class="col-sm-2 col-xs-5 footermenu text-center" href="#">جستجو</a>
        <a class="col-lg-2 col-sm-3 col-xs-6 footermenu text-center" href="#">نظرسنجی</a>
        <a class="col-sm-2 col-xs-5 footermenu text-sm-center" href="/newsletters">خبرنامه</a>
        <a class="col-lg-2 col-sm-3 col-xs-6 footermenu text-center" href="/weather">آب و هوا</a>
        <a class="col-lg-3 col-sm-4 col-xs-8 footermenu text-center" href="/prayer">اوقات شرعی</a>
        <a class="col-sm-2 col-xs-5 footermenu text-center" href="#" style="border-left: none;">RSS</a>
    </div>
    <div class="row bordery">
        <div class="col-sm-28 footermenu">تمام حقوق مادی و معنوی این سایت متعلق به ایران سامانه است و استفاده از مطالب با ذکر منبع بلامانع است.</div>
    </div>
    <div class="row">
        <a class="col-sm-8 footermenu" href="https://iransamaneh.com/">طراحی و تولید "ایران سامانه"</a>
    </div>
    <div class="row">
        <a class="col-sm-1 col-xs-3" href="#"><img src="/media/social network icon (20).png" width="15px" height="15px"/></a>
        <a class="col-sm-1 col-xs-3 text-center" href="#"><img src="/media/iconfinder_335_Telegram_logo_4375490.png" width="15px" height="15px"/></a>
        <a class="col-sm-1 col-xs-3 text-center" href="#"><img src="/media/iconfinder_instagram_1608743.png" width="15px" height="15px"/></a>
        <a class="col-sm-1 col-xs-3 text-center" href="#"><img src="/media/darkRSS.png" width="15px" height="15px"/></a>
    </div>
</footer>

<?php echo '<script'; ?>
 type="text/javascript" src="/js/jsNews.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    $(".row:not(:first)").css("margin-top", "10px");
    $('.owl-carousel').owlCarousel({
        rtl:true,
        loop:true,
        margin:10,
        nav:false,
        autoplay:true,
        autoplayHoverPause:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    newstabs(0);
    news("#recent");
    news("#maxvisit");
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
