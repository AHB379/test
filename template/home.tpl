<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
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
                    {foreach $section1 as $news}
                    {if $news@first}
                    <a class="item active" href="{$news.link}">
                    {else}
                    <a class="item" href="{$news.link}">
                    {/if}
                        <img src="/media/slide1.jpg" alt="firstslide" style="width:fit-content;" class="col-md-21 col-xs-36"/>
                        <div style="width:fit-content; padding-right: 5px;" class="col-md-15 col-xs-36 captionSlide">
                            <p>{$news.rutitr}</p>
                            <p>{$news.titr}</p>
                            <p style="overflow: hidden; text-overflow: ellipsis;">{$news.subtitle}</p>
                        </div>
                    </a>
                    {/foreach}
                </div>

                <!-- Indicators -->
                <ol class="carousel-indicators" id="bigSlideIndicators">
                    <li id="playpauseButton"><i class="fa fa-pause" id="playpause"></i></li>
                    {for $i=0 to $news@total-1}
                    {if $i@first}
                    <li data-target="#myCarousel" data-slide-to="{$i}" class="active">{$i+1}</li>
                    {else}
                    <li data-target="#myCarousel" data-slide-to="{$i}">{$i+1}</li>
                    {/if}
                    {/for}
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
                {foreach $section2 as $news}
                <a class="col-xs-7 col-xs-offset-1" href="{$news.link}">
                    <div class="row">
                        <img src="/media/underslide1.jpg" height="108px" class="col-xs-36"/>
                        <p class="col-xs-36 text-center">{$news.titr}</p>
                    </div>
                </a>
                {/foreach}
            </div>
            <div class="row">
                <div class="col-sm-12 col-xs-36 col-sm-offset-1">
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-18">{$section4.header}</p>
                        </header>
                        {foreach $section4.links as $news}
                            {if !$news@first}
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            {/if}
                        <p><a href="{$news.link}">
                            <span style="color: #BF0106;">&blacksquare; </span> {$news.title}
                        </a></p>
                        {/foreach}
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-19">{$section5.header}</p>
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
                                    {foreach $section5.links as $news}
                                        {if !$news@first}
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        {/if}
                                    <p><a href="{$news.link}">
                                        <span style="color: #BF0106;">&blacksquare; </span>{$news.title}
                                    </a></p>
                                    {/foreach}
                                </div>
                                <div class="item">
                                    {foreach $section5.links as $news}
                                        {if !$news@first}
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        {/if}
                                        <p><a href="{$news.link}">
                                            <span style="color: #BF0106;">&blacksquare; </span>{$news.title}
                                        </a></p>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-7">{$section6.header}</p>
                        </header>
                        {foreach $section6.links as $news}
                            {if !$news@first}
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            {/if}
                            <p><a href="{$news.link}">
                                <span style="color: #BF0106;">&blacksquare; </span> {$news.title}
                            </a></p>
                        {/foreach}
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-23">{$section7.header}</p>
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
                                    {foreach $section7.links as $news}
                                        {if !$news@first}
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        {/if}
                                        <p><a href="{$news.link}">
                                                <span style="color: #BF0106;">&blacksquare; </span>{$news.title}
                                            </a></p>
                                    {/foreach}
                                </div>
                                <div class="item">
                                    {foreach $section7.links as $news}
                                        {if !$news@first}
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        {/if}
                                        <p><a href="{$news.link}">
                                                <span style="color: #BF0106;">&blacksquare; </span>{$news.title}
                                            </a></p>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-15">{$section8.header}</p>
                        </header>
                        {foreach $section8.links as $news}
                            {if !$news@first}
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            {/if}
                            <p><a href="{$news.link}">
                                    <span style="color: #BF0106;">&blacksquare; </span> {$news.title}
                                </a></p>
                        {/foreach}
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-7">{$section9.header}</p>
                        </header>
                        {foreach $section9.links as $news}
                            {if !$news@first}
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            {/if}
                            <p><a href="{$news.link}">
                                    <span style="color: #BF0106;">&blacksquare; </span> {$news.title}
                                </a></p>
                        {/foreach}
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-19">{$section10.header}</p>
                        </header>
                        {foreach $section10.links as $news}
                            {if !$news@first}
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            {/if}
                            <p><a href="{$news.link}">
                                    <span style="color: #BF0106;">&blacksquare; </span> {$news.title}
                                </a></p>
                        {/foreach}
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-11">{$section11.header}</p>
                        </header>
                        {foreach $section11.links as $news}
                            {if !$news@first}
                                <hr style="border-top: 1px dotted gray; margin: 0"/>
                            {/if}
                            <p><a href="{$news.link}">
                                    <span style="color: #BF0106;">&blacksquare; </span> {$news.title}
                                </a></p>
                        {/foreach}
                    </div>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-30">{$section12.header}</p>
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
                                    {foreach $section12.links as $news}
                                        {if $news@iteration == 9}
                                            {break}
                                        {/if}
                                        {if !$news@first}
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        {/if}
                                        <p><a href="{$news.link}">
                                                <span style="color: #BF0106;">&blacksquare; </span>{$news.title}
                                            </a></p>
                                    {/foreach}
                                </div>
                                <div class="item">
                                    {foreach $section12.links as $news}
                                        {if $news@iteration < 9}
                                            {continue}
                                        {/if}
                                        {if $news@iteration != 9}
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        {/if}
                                        <p><a href="{$news.link}">
                                                <span style="color: #BF0106;">&blacksquare; </span>{$news.title}
                                            </a></p>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <a href="#"><img src="/media/tablighat.gif" class="row" width="100%"/></a>
                    <hr/>
                    <div class="row">
                        <header class="row" style="border-bottom: 1px solid black">
                            <p class="col-lg-9">{$section13.header}</p>
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
                                    {foreach $section13.links as $news}
                                        {if $news@iteration == 9}
                                            {break}
                                        {/if}
                                        {if !$news@first}
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        {/if}
                                        <p><a href="{$news.link}">
                                                <span style="color: #BF0106;">&blacksquare; </span>{$news.title}
                                            </a></p>
                                    {/foreach}
                                </div>
                                <div class="item">
                                    {foreach $section13.links as $news}
                                        {if $news@iteration < 9}
                                            {continue}
                                        {/if}
                                        {if $news@iteration != 9}
                                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                                        {/if}
                                        <p><a href="{$news.link}">
                                                <span style="color: #BF0106;">&blacksquare; </span>{$news.title}
                                            </a></p>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-23 col-xs-36" id="newsmenu">
                    {foreach $section3 as $news}
                    {if !$news@first}
                        <hr style="border-top: 1px dotted gray; width: 95%"/>
                    {/if}
                    <a class="row" href="{$news.link}">
                        <span class="col-xs-1"></span>
                        <img src="/media/newsmenu1.jpg" width="fit-content" height="84px" class="col-xs-11"/>
                        <span class="col-xs-24" style="padding-right: 5px;">
                            <p>{$news.rutitr}</p>
                            <h4 style="font-weight: bold"><span class="fa fa-caret-left" style="color: #c20102"></span>
                                {$news.titr}</h4>
                            <span>{$news.subtitle}</span>
                        </span>
                    </a>
                    {/foreach}
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
                        {foreach $section14 as $news}
                        <li><a href="{$news.link}">
                                <span>{$news.titr}</span>
                            </a></li>
                        {/foreach}
                    </ul>
                    <ul class="row ulnews" id="titrnews2">
                        {for $i=1 to $news@total}
                        <li><a href="#">
                                <span>خبر {$i}</span>
                            </a></li>
                        {/for}
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
                        <a href="{$section15.link}"><img src="/media/matbooat.jpg" style="width: fit-content;" class="col-xs-36"/>
                            <p class="col-xs-36 text-center">{$section15.titr}</p></a>
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
                        {foreach $section16 as $news}
                            <li><a href="{$news.link}">
                                <span> {$news.titr}</span>
                            </a></li>
                        {/foreach}
                    </ul>
                    <ul class="row ulnews" id="undermatbooat2">
                        {for $i=1 to $news@total}
                            <li><a href="#">
                                <span>خبر {$i}</span>
                            </a></li>
                        {/for}
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
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section17.header}</div></a>
                    </div>
                    {foreach $section17.links as $news}
                    <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                            <img src="/media/yaddasht1.jpg" height="67px" class="col-xs-14"/>
                            <p class="col-xs-22" style="padding-right: 5px;">{*$news.title*}title این سکشن، خالی است!</p>
                        </a></div>
                    {if $news@first}
                        <hr style="border-top: 1px dotted gray;"/>
                    {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section18.header}</div></a>
                    </div>
                    {foreach $section18.links as $news}
                    <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                            <img src="/media/goftogo1.jpg" height="67px" class="col-xs-14"/>
                            <p class="col-xs-22" style="padding-right: 5px;">{*$news.title*}title این سکشن، خالی است!</p>
                        </a></div>
                        {if $news@first}
                            <hr style="border-top: 1px dotted gray;"/>
                        {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section19.header}</div></a>
                    </div>
                    {foreach $section19.links as $news}
                    <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                            <img src="/media/gozaresh1.jpg" height="67px" class="col-xs-14"/>
                            <p class="col-xs-22" style="padding-right: 5px;">{*$news.title*}title این سکشن، خالی است!</p>
                        </a></div>
                        {if $news@first}
                            <hr style="border-top: 1px dotted gray;"/>
                        {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section20.header}</div></a>
                    </div>
                    {foreach $section20.links as $news}
                    <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                            <img src="/media/tahlil1.jpg" height="67px" class="col-xs-14"/>
                            <p class="col-xs-22" style="padding-right: 5px;">{*$news.title*}title این سکشن، خالی است!</p>
                        </a></div>
                        {if $news@first}
                            <hr style="border-top: 1px dotted gray;"/>
                        {/if}
                    {/foreach}
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
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section21.header}</div></a>
                    </div>
                    {foreach $section21.links as $news}
                    {if $news@first}
                    <div class="row"><a href="{$news.link}">
                            <img src="/media/siasi.jpg" height="168px" class="col-xs-36"/>
                            <p class="col-xs-36">{$news.title}</p>
                        </a></div>
                    {else}
                    <hr style="border-top: 1px dotted gray; margin: 0"/>
                    <div class="row liNews"><a href="{$news.link}">
                            <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span>{$news.title}</p>
                        </a></div>
                    {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section22.header}</div></a>
                    </div>
                    {foreach $section22.links as $news}
                    {if $news@first}
                    <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                            <img src="/media/varzeshi.jpg" height="168px" class="col-xs-36"/>
                            <p class="col-xs-36">{$news.title}</p>
                        </a></div>
                    {else}
                    <hr style="border-top: 1px dotted gray; margin: 0"/>
                    <div class="row liNews"><a href="{$news.link}">
                            <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span>{$news.title}</p>
                        </a></div>
                    {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-lg-10 col-md-13 col-xs-10" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section23.header}</div></a>
                    </div>
                    {foreach $section23.links as $news}
                    {if $news@first}
                    <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                            <img src="/media/beinolmelal.jpg" height="168px" class="col-xs-36"/>
                            <p class="col-xs-36">{$news.title}</p>
                        </a></div>
                    {else}
                    <hr style="border-top: 1px dotted gray; margin: 0"/>
                    <div class="row liNews"><a href="{$news.link}">
                            <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span>{$news.title}</p>
                        </a></div>
                    {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section24.header}</div></a>
                    </div>
                    {foreach $section24.links as $news}
                    {if $news@first}
                    <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                            <img src="/media/havades.jpg" height="168px" class="col-xs-36"/>
                            <p class="col-xs-36">{$news.title}</p>
                        </a></div>
                    {else}
                    <hr style="border-top: 1px dotted gray; margin: 0"/>
                    <div class="row liNews"><a href="{$news.link}">
                            <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span>{$news.title}</p>
                        </a></div>
                    {/if}
                    {/foreach}
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
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section25.header}</div></a>
                    </div>
                    {foreach $section25.links as $news}
                        {if $news@first}
                            <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                                    <img src="/media/ejtemaee.jpg" height="168px" class="col-xs-36"/>
                                    <p class="col-xs-36">{$news.title}</p>
                                </a></div>
                        {else}
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <div class="row liNews"><a href="{$news.link}">
                                    <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span>{$news.title}</p>
                                </a></div>
                        {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section26.header}</div></a>
                    </div>
                    {foreach $section26.links as $news}
                        {if $news@first}
                            <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                                    {if !empty($news.img)}
                                    <img src="{$news.img}" height="168px" class="col-xs-36"/>
                                    {/if}
                                    <p class="col-xs-36">{$news.title}</p>
                                </a></div>
                        {else}
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <div class="row liNews"><a href="{$news.link}">
                                    <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span>{$news.title}</p>
                                </a></div>
                        {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17 col-md-offset-1 col-sm-offset-2">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-9" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section27.header}</div></a>
                    </div>
                    {foreach $section27.links as $news}
                        {if $news@first}
                            <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                                    <img src="/media/ostanha.jpg" height="168px" class="col-xs-36"/>
                                    <p class="col-xs-36">{$news.title}</p>
                                </a></div>
                        {else}
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <div class="row liNews"><a href="{$news.link}">
                                    <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span>{$news.title}</p>
                                </a></div>
                        {/if}
                    {/foreach}
                </div>
                <div class="col-md-8 col-sm-17">
                    <div class="row" style="font-size: large; border-bottom: 1px solid black;">
                        <a href="#"><div class="col-xs-12" style="border-bottom: 2px solid #c30207; padding-right: 10px;">{$section28.header}</div></a>
                    </div>
                    {foreach $section28.links as $news}
                        {if $news@first}
                            <div class="row" style="margin-bottom: 10px;"><a href="{$news.link}">
                                    <img src="/media/resaneha.jpg" height="168px" class="col-xs-36"/>
                                    <p class="col-xs-36">{$news.title}</p>
                                </a></div>
                        {else}
                            <hr style="border-top: 1px dotted gray; margin: 0"/>
                            <div class="row liNews"><a href="{$news.link}">
                                    <p class="col-xs-36" style="font-size: small"><span style="color: #058801;">&blacksquare; </span>{$news.title}</p>
                                </a></div>
                        {/if}
                    {/foreach}
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

<script type="text/javascript" src="/js/commonJS.js"></script>
<script type="text/javascript" src="/js/jsHome.js"></script>
<script>
    $(".row:not(:first)").css("margin-top", "10px");
    news("#recentnews");
    news("#maxvisit");
</script>
</body>
</html>