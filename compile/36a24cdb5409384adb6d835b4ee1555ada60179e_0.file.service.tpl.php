<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-06 20:20:28
  from 'C:\xampp\htdocs\smarty\template\service.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa5a1fc608df8_98350184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36a24cdb5409384adb6d835b4ee1555ada60179e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\template\\service.tpl',
      1 => 1604690362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa5a1fc608df8_98350184 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link type="text/css" rel="stylesheet" href="/css/cssService.css"/>
    <title>صفحه سرویس</title>
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
                <p class="col-lg-6">عناوین کل اخبار</p>
            </header>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section3']->value, 'news');
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_0_saved = $_smarty_tpl->tpl_vars['news'];
?>
                <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                    <hr style="border-top: 1px dotted gray;"/>
                <?php }?>
                <a class="row" href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
" style="display: block">
                    <img src="/media/newsmenu1.jpg" width="fit-content" height="84px" class="col-lg-6"/>
                    <span class="col-xs-30" style="padding-right: 5px;">
                            <p><?php echo $_smarty_tpl->tpl_vars['news']->value['rutitr'];?>
</p>
                            <h4 style="font-weight: bold"><span class="fa fa-caret-left" style="color: #c20102"></span>
                                <?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</h4>
                            <span><?php echo $_smarty_tpl->tpl_vars['news']->value['subtitle'];?>
</span>
                        </span>
                </a>
            <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <div class="row text-center" dir="ltr">
                <a href="#" class="pagenumbers"><span class="fa fa-angle-double-left"></span></a>
                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 11+1 - (1) : 1-(11)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <a href="#" class="pagenumbers"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a>
                <?php }
}
?>
                <a href="#" class="pagenumbers"><span class="fa fa-angle-double-right"></span></a>
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
