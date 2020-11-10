<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-07 13:52:56
  from 'C:\Users\Barzegari\Documents\PhpstormProjects\smarty\template\prayer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa698a869f9c5_14611817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0e6d1a6f395318e619ba7eac75d01622d6fd8d4' => 
    array (
      0 => 'C:\\Users\\Barzegari\\Documents\\PhpstormProjects\\smarty\\template\\prayer.tpl',
      1 => 1604753470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa698a869f9c5_14611817 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link type="text/css" rel="stylesheet" href="/css/cssPrayer.css"/>
    <title>اوقات شرعی</title>
</head>
<body>
<button id="backtoTop" onclick="topFunction()"><i class="fa fa-caret-up"></i></button>
<header class="container-fluid" style="background-color: #C20000;">
    <div class="container">
        <div class="row">
            <span class="col-lg-6 col-sm-4"></span>
            <nav class="navbar container col-lg-29 col-sm-32">
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
        </div>
    </div>
</header>
<section class="container">
    <div class="row">
        <div class="col-sm-22 col-sm-offset-1 col-xs-36">
            <header class="row" style="border-bottom: 1px solid black">
                <p class="col-lg-5">اوقات شرعی</p>
            </header>
            <div class="row" style="margin-top: 40px">
                <span class="col-lg-8 col-md-6 col-sm-2"></span>
                <div class="col-lg-20 col-lg-offset-8 col-md-24 col-md-offset-6 col-sm-32 col-sm-offset-2 col-xs-36">
                    <div class="row">
                        <div class="col-ms-17 col-ms-offset-1 col-xs-36">
                            <div class="row">
                                <div class="col-ms-7 col-xs-5">استان:</div>
                                <div class="col-ms-29 col-xs-16">
                                    <select id="stateSelection" style="width: 100%">
                                        <option>استان مورد نظر را انتخاب کنید</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['states']->value, 'state');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['state']->value) {
?>
                                            <option><?php echo $_smarty_tpl->tpl_vars['state']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-ms-7 col-xs-5">شهر:</div>
                                <div class="col-ms-29 col-xs-16">
                                    <select id="townSelection" style="width: 100%">
                                        <option>شهر مورد نظر را انتخاب کنید</option>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tehran']->value, 'town');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['town']->value) {
?>
                                            <option><?php echo $_smarty_tpl->tpl_vars['town']->value;?>
</option>
                                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-ms-7 col-xs-5">تاریخ:</div>
                                <div class="col-ms-29 col-xs-16 text-center">
                                    <input type="text" value="1399/08/16" size="10" style="width: 80px" readonly/>
                                    <img src="/media/calendar.png" width="16px" height="16px"/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-ms-7 col-xs-5"></div>
                                <div class="col-ms-29 col-xs-16 text-center">
                                    <button>نمایش</button>
                                </div>
                            </div>
                        </div>
                        <table class="col-ms-18 col-xs-36">
                            <tr><th colspan="2">اوقات شرعی به افق: تهران</th></tr>
                            <tr>
                                <td>اذان صبح</td>
                                <td>۰۵:۰۵:۰۱</td>
                            </tr>
                            <tr>
                                <td>طلوع آفتاب</td>
                                <td>۰۶:۳۲:۰۲</td>
                            </tr>
                            <tr>
                                <td>اذان ظهر</td>
                                <td>۱۱:۴۸:۵۷</td>
                            </tr>
                            <tr>
                                <td>غروب آفتاب</td>
                                <td>۱۷:۰۴:۱۶</td>
                            </tr>
                            <tr>
                                <td>اذان مغرب</td>
                                <td>۱۷:۲۲:۱۳</td>
                            </tr>
                        </table>
                    </div>
                </div>
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
 type="text/javascript" src="/js/commonJS.js"><?php echo '</script'; ?>
>
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
