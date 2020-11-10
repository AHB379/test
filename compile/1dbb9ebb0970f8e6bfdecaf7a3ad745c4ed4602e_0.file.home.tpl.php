<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-08 13:37:40
  from 'C:\Users\Barzegari\Documents\PhpstormProjects\smarty\template\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fa7e694ca0100_67042328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dbb9ebb0970f8e6bfdecaf7a3ad745c4ed4602e' => 
    array (
      0 => 'C:\\Users\\Barzegari\\Documents\\PhpstormProjects\\smarty\\template\\home.tpl',
      1 => 1604838917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fa7e694ca0100_67042328 (Smarty_Internal_Template $_smarty_tpl) {
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
    <link type="text/css" rel="stylesheet" href="/css/cssHome.css"/>
    <title>صفحه نخست</title>
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
                    <li class="active dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="/home">صفحه نخست <span class="caret"></span></a>
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
        <div class="col-sm-2"></div>
        <div class="col-sm-20 col-xs-36">
            <div class="row carousel slide" id="myCarousel" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
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
                    <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                    <a class="item active" href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                    <?php } else { ?>
                    <a class="item" href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                    <?php }?>
                        <img src="/media/slide1.jpg" alt="firstslide" style="width:fit-content;" class="col-md-21 col-xs-36"/>
                        <div style="width:fit-content; padding-right: 5px;" class="col-md-15 col-xs-36 captionSlide">
                            <p><?php echo $_smarty_tpl->tpl_vars['news']->value['rutitr'];?>
</p>
                            <p><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</p>
                            <p style="overflow: hidden; text-overflow: ellipsis;"><?php echo $_smarty_tpl->tpl_vars['news']->value['subtitle'];?>
</p>
                        </div>
                    </a>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators" id="bigSlideIndicators">
                    <li id="playpauseButton"><i class="fa fa-pause" id="playpause"></i></li>
                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['news']->total-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['news']->total-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                    <?php if ($_smarty_tpl->tpl_vars['i']->first) {?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="active"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</li>
                    <?php } else { ?>
                    <li data-target="#myCarousel" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value+1;?>
</li>
                    <?php }?>
                    <?php }
}
?>
                </ol>
                <!-- Left and right controls -->
                <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a> -->
            </div>
            <div class="row text-center" id="underslide">
                <div class="col-xs-2"></div>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section2']->value, 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_1_saved = $_smarty_tpl->tpl_vars['news'];
?>
                <a class="col-xs-7 col-xs-offset-1" href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                    <div class="row">
                        <img src="/media/underslide1.jpg" height="108px" class="col-xs-36"/>
                        <p class="col-xs-36 text-center"><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</p>
                    </div>
                </a>
                <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-36 col-sm-offset-1">
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-18"><?php echo $_smarty_tpl->tpl_vars['section4']->value['header'];?>
</p>
                        </header>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section4']->value['links'], 'news', true);
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
                            <span style="color: #BF0106;">&blacksquare; </span> <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                        </a></p>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-19"><?php echo $_smarty_tpl->tpl_vars['section5']->value['header'];?>
</p>
                        </header>
                        <div class="carousel slide" id="myCarousel2" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators text-left" id="minislide">
                                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel2" data-slide-to="1"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section5']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_3_saved = $_smarty_tpl->tpl_vars['news'];
?>
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
                                <div class="item">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section5']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_4_saved = $_smarty_tpl->tpl_vars['news'];
?>
                                        <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
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
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-7"><?php echo $_smarty_tpl->tpl_vars['section6']->value['header'];?>
</p>
                        </header>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section6']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_5_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                <span style="color: #BF0106;">&blacksquare; </span> <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                            </a></p>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_5_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-23"><?php echo $_smarty_tpl->tpl_vars['section7']->value['header'];?>
</p>
                        </header>
                        <div class="carousel slide" id="myCarousel3" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators text-left" id="minislide">
                                <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel3" data-slide-to="1"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section7']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_6_saved = $_smarty_tpl->tpl_vars['news'];
?>
                                        <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        <?php }?>
                                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                                <span style="color: #BF0106;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                                            </a></p>
                                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="item">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section7']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_7_saved = $_smarty_tpl->tpl_vars['news'];
?>
                                        <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        <?php }?>
                                        <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                                <span style="color: #BF0106;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                                            </a></p>
                                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_7_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-15"><?php echo $_smarty_tpl->tpl_vars['section8']->value['header'];?>
</p>
                        </header>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section8']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_8_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <span style="color: #BF0106;">&blacksquare; </span> <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                                </a></p>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_8_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-7"><?php echo $_smarty_tpl->tpl_vars['section9']->value['header'];?>
</p>
                        </header>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section9']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_9_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <span style="color: #BF0106;">&blacksquare; </span> <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                                </a></p>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_9_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-19"><?php echo $_smarty_tpl->tpl_vars['section10']->value['header'];?>
</p>
                        </header>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section10']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_10_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <span style="color: #BF0106;">&blacksquare; </span> <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                                </a></p>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_10_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-11"><?php echo $_smarty_tpl->tpl_vars['section11']->value['header'];?>
</p>
                        </header>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section11']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_11_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <?php }?>
                            <p><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <span style="color: #BF0106;">&blacksquare; </span> <?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>

                                </a></p>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_11_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-30"><?php echo $_smarty_tpl->tpl_vars['section12']->value['header'];?>
</p>
                        </header>
                        <div class="carousel slide" id="myCarousel4" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators text-left" id="minislide">
                                <li data-target="#myCarousel4" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel4" data-slide-to="1"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section12']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_12_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_12_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="item">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section12']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_13_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_13_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <a href="#"><img src="/media/tablighat.gif" class="row" width="100%"/></a>
                    <hr/>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-9"><?php echo $_smarty_tpl->tpl_vars['section13']->value['header'];?>
</p>
                        </header>
                        <div class="carousel slide" id="myCarousel5" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators text-left" id="minislide">
                                <li data-target="#myCarousel5" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel5" data-slide-to="1"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section13']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_14_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_14_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                                <div class="item">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section13']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_15_saved = $_smarty_tpl->tpl_vars['news'];
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_15_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-23 col-xs-36" id="newsmenu">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section3']->value, 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_16_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <?php if (!$_smarty_tpl->tpl_vars['news']->first) {?>
                        <hr style="border-top: 1px dotted gray; width: 95%"/>
                    <?php }?>
                    <a class="row" href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                        <span class="col-xs-1"></span>
                        <img src="/media/newsmenu1.jpg" width="fit-content" height="84px" class="col-xs-11"/>
                        <span class="col-xs-24" style="padding-right: 5px;">
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
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_16_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-xs-36 col-sm-offset-2">
            <div class="row">
                <div class="col-sm-1"></div>
                <a href="#"><img src="/media/tablighat.gif" class="col-xs-26 col-xs-offset-1" height="142px"/></a>
                <div class="col-sm-8 col-xs-9">
                    <a href="#"><img src="/media/tablighat.gif" height="55px" style="margin-bottom: 5px"/></a>
                    <a href="#"><img src="/media/tablighat.gif" height="55px"/></a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-26 col-sm-offset-9">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <div class="col-xs-1"></div>
                        <div class="col-lg-11 col-md-12 col-sm-16 col-xs-9" style="border-left: 1px solid gray;" id="topnews" onclick="news('#topnews')">برگزیده ها</div>
                        <div class="col-lg-13 col-md-15 col-sm-18 col-xs-11" style="padding-right: 11px;" id="recentnews" onclick="news('#recentnews')">آخرین اخبار</div>
                    </div>
                    <ul class="row ulnews" id="titrnews1">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section14']->value, 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_17_saved = $_smarty_tpl->tpl_vars['news'];
?>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                <span><?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</span>
                            </a></li>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_17_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <ul class="row ulnews" id="titrnews2">
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
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-26 col-sm-offset-9">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-17" style="border-bottom: 2px solid #c30207; padding-right: 10px;">برچسب های منتخب</div></a>
                    </div>
                    <div class="row">
                        <button class="col-xs-12 col-xs-offset-1 labels">اقتصاد معیشتی</button>
                        <button class="col-xs-9 col-xs-offset-1 labels">سکته قلبی</button>
                        <button class="col-xs-12 labels">جراحی پلاستیک</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-26 col-sm-offset-9">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">مطبوعات</div></a>
                    </div>
                    <div class="row">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['section15']->value['link'];?>
"><img src="/media/matbooat.jpg" style="width: fit-content;" class="col-xs-36"/>
                            <p class="col-xs-36 text-center"><?php echo $_smarty_tpl->tpl_vars['section15']->value['titr'];?>
</p></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-26 col-sm-offset-9">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <div class="col-lg-9 col-md-12 col-sm-18 col-xs-9" style="border-left: 1px solid gray;" id="maxvisit" onclick="news('#maxvisit')">پربازدیدها</div>
                        <div class="col-lg-11 col-md-15 col-sm-18 col-xs-11" style="padding-right: 11px;" id="maxchallenge" onclick="news('#maxchallenge')">پر بحث ها</div>
                    </div>
                    <ul class="row ulnews" id="undermatbooat1">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section16']->value, 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_18_saved = $_smarty_tpl->tpl_vars['news'];
?>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                <span> <?php echo $_smarty_tpl->tpl_vars['news']->value['titr'];?>
</span>
                            </a></li>
                        <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_18_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                    <ul class="row ulnews" id="undermatbooat2">
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
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-30">
            <div class="row">
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section17']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section17']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_19_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <img src="/media/yaddasht1.jpg" height="67px" class="col-xs-14"/>
                            <p class="col-xs-22" style="padding-right: 5px;">title این سکشن، خالی است!</p>
                        </a></div>
                    <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                        <hr style="border-top: 1px dotted gray;"/>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_19_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section18']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section18']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_20_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <img src="/media/goftogo1.jpg" height="67px" class="col-xs-14"/>
                            <p class="col-xs-22" style="padding-right: 5px;">title این سکشن، خالی است!</p>
                        </a></div>
                        <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                            <hr style="border-top: 1px dotted gray;"/>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_20_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section19']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section19']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_21_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <img src="/media/gozaresh1.jpg" height="67px" class="col-xs-14"/>
                            <p class="col-xs-22" style="padding-right: 5px;">title این سکشن، خالی است!</p>
                        </a></div>
                        <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                            <hr style="border-top: 1px dotted gray;"/>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_21_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section20']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section20']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_22_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <img src="/media/tahlil1.jpg" height="67px" class="col-xs-14"/>
                            <p class="col-xs-22" style="padding-right: 5px;">title این سکشن، خالی است!</p>
                        </a></div>
                        <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                            <hr style="border-top: 1px dotted gray;"/>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_22_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-30">
            <div class="row">
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section21']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section21']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_23_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                    <div class="row"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <img src="/media/siasi.jpg" height="168px" class="col-xs-36"/>
                            <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                        </a></div>
                    <?php } else { ?>
                    <hr style="border-top: 1px dotted gray; margin: 0"/>
                    <div class="row liNews"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                        </a></div>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_23_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section22']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section22']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_24_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                    <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <img src="/media/varzeshi.jpg" height="168px" class="col-xs-36"/>
                            <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                        </a></div>
                    <?php } else { ?>
                    <hr style="border-top: 1px dotted gray; margin: 0"/>
                    <div class="row liNews"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                        </a></div>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_24_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-lg-10 col-md-13 col-xs-10" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section23']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section23']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_25_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                    <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <img src="/media/beinolmelal.jpg" height="168px" class="col-xs-36"/>
                            <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                        </a></div>
                    <?php } else { ?>
                    <hr style="border-top: 1px dotted gray; margin: 0"/>
                    <div class="row liNews"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                        </a></div>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_25_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section24']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section24']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_26_saved = $_smarty_tpl->tpl_vars['news'];
?>
                    <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                    <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <img src="/media/havades.jpg" height="168px" class="col-xs-36"/>
                            <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                        </a></div>
                    <?php } else { ?>
                    <hr style="border-top: 1px dotted gray; margin: 0"/>
                    <div class="row liNews"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                            <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                        </a></div>
                    <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_26_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-30">
            <div class="row">
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section25']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section25']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_27_saved = $_smarty_tpl->tpl_vars['news'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                            <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <img src="/media/ejtemaee.jpg" height="168px" class="col-xs-36"/>
                                    <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                </a></div>
                        <?php } else { ?>
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <div class="row liNews"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                </a></div>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_27_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section26']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section26']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_28_saved = $_smarty_tpl->tpl_vars['news'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                            <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['news']->value['img'])) {?>
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['news']->value['img'];?>
" height="168px" class="col-xs-36"/>
                                    <?php }?>
                                    <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                </a></div>
                        <?php } else { ?>
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <div class="row liNews"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                </a></div>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_28_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section27']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section27']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_29_saved = $_smarty_tpl->tpl_vars['news'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                            <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <img src="/media/ostanha.jpg" height="168px" class="col-xs-36"/>
                                    <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                </a></div>
                        <?php } else { ?>
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <div class="row liNews"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                </a></div>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_29_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
                <div class="col-md-8 col-sm-17">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-12" style="border-bottom: 2px solid #c30207; padding-right: 10px;"><?php echo $_smarty_tpl->tpl_vars['section28']->value['header'];?>
</div></a>
                    </div>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['section28']->value['links'], 'news', true);
$_smarty_tpl->tpl_vars['news']->iteration = 0;
$_smarty_tpl->tpl_vars['news']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->iteration++;
$_smarty_tpl->tpl_vars['news']->index++;
$_smarty_tpl->tpl_vars['news']->first = !$_smarty_tpl->tpl_vars['news']->index;
$__foreach_news_30_saved = $_smarty_tpl->tpl_vars['news'];
?>
                        <?php if ($_smarty_tpl->tpl_vars['news']->first) {?>
                            <div class="row" style="margin-bottom: 10px;"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <img src="/media/resaneha.jpg" height="168px" class="col-xs-36"/>
                                    <p class="col-xs-36"><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                </a></div>
                        <?php } else { ?>
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <div class="row liNews"><a href="<?php echo $_smarty_tpl->tpl_vars['news']->value['link'];?>
">
                                    <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span><?php echo $_smarty_tpl->tpl_vars['news']->value['title'];?>
</p>
                                </a></div>
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['news'] = $__foreach_news_30_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
        <div class="col-sm-4"></div>
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
 type="text/javascript" src="/js/jsHome.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(".row:not(:first)").css("margin-top", "10px");
    news("#recentnews");
    news("#maxvisit");
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
