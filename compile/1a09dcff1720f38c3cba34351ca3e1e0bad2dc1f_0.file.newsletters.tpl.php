<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 20:19:26
  from 'C:\xampp\htdocs\smarty\template\newsletters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5a1be3aaa35_30809714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a09dcff1720f38c3cba34351ca3e1e0bad2dc1f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\template\\newsletters.tpl',
      1 => 1604690362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa5a1be3aaa35_30809714 (Smarty_Internal_Template $_smarty_tpl) {
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
 src="/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <link type="text/css" rel="stylesheet" href="/css/bootstrap_rtl.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="/css/commonStyles.css"/>
    <link type="text/css" rel="stylesheet" href="/css/cssNewsletters.css"/>
    <title>عضویت در خبرنامه</title>
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
    <div class="row">
        <div class="col-sm-22 col-sm-offset-1 col-xs-36">
            <header class="row" style="border-bottom: 1px solid black">
                <p class="col-lg-7">عضویت در خبرنامه</p>
            </header>
            <div class="row">
                <p style="padding-top: 33px">كاربر محترم جهت عضويت در خبرنامه الكترونيكي سايت، تكميل تمامي فيلدهاي ستاره دار ضروري است.</p>
            </div>
            <div class="row">
                <div class="col-sm-7 col-xs-36">*ایمیل:</div>
                <input type="email" class="col-sm-20 col-xs-36"/>
            </div>
            <div class="row">
                <div class="col-sm-7 col-xs-36">*گروه:</div>
                <select class="col-sm-20 col-xs-36">
                    <option>انتخاب گروه</option>
                    <option>پیش فرض</option>
                </select>
            </div>
            <div class="row">
                <div class="col-sm-7 col-xs-36">*کد امنیتی:</div>
                <img src="/media/secImage.png" class="col-sm-5 col-xs-10 col-xs-offset-1" width="100%" height="24px"/>
                <input type="text" class="col-sm-6 col-xs-12"/>
            </div>
            <div class="row">
                <div class="col-md-20 col-sm-18 col-xs-30"></div>
                <button class="col-md-4 col-sm-5 col-sm-offset-12 col-xs-6">ثبت نام</button>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-5 col-sm-13 col-xs-36">
            <a href="#"><img src="/media/tablighat.gif" class="row" width="100%" height="118.45px"/></a>
            <div class="row text-center newsTabs">
                <div class="col-lg-10 col-md-12 col-sm-18 col-xs-9" id="maxchallenge" onclick="news('#maxchallenge')">پر بحث ها</div>
                <div class="col-lg-11 col-md-15 col-sm-18 col-xs-11" id="maxvisit" onclick="news('#maxvisit')">پربازدیدها</div>
            </div>
            <ul class="row ulnews" id="maxchallengenews"></ul>
            <ul class="row ulnews" id="maxvisitnews"></ul>
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
 type="text/javascript">
    $(".row:not(:first)").css("margin-top", "10px");
    function news(butID) {
        var $but = $(butID);
        if(butID=="#maxvisit"){
            $("#maxvisitnews").show();
            $("#maxchallengenews").hide();
            $but.css("color","black");
            $but.css("border-bottom","2px solid #c30207");
            $("#maxchallenge").css("color","gray");
            $("#maxchallenge").css("border-bottom","none");
        }
        else if(butID=="#maxchallenge"){
            $("#maxvisitnews").hide();
            $("#maxchallengenews").show();
            $but.css("color","black");
            $but.css("border-bottom","2px solid #c30207");
            $("#maxvisit").css("color","gray");
            $("#maxvisit").css("border-bottom","none");
        }
    }
    news('#maxchallenge');
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
