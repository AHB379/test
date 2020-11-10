function news(butID){
    var $but = $(butID);
    if(butID=="#recentnews"){
        $("#titrnews1").show();
        $("#titrnews2").hide();
        $but.css("color","black");
        $but.css("border-bottom","2px solid #c30207");
        $("#topnews").css("color","gray");
        $("#topnews").css("border-bottom","none");
    }
    else if(butID=="#topnews"){
        $("#titrnews1").hide();
        $("#titrnews2").show();
        $but.css("color","black");
        $but.css("border-bottom","2px solid #c30207");
        $("#recentnews").css("color","gray");
        $("#recentnews").css("border-bottom","none");
    }
    else if(butID=="#maxvisit"){
        $("#undermatbooat1").show();
        $("#undermatbooat2").hide();
        $but.css("color","black");
        $but.css("border-bottom","2px solid #c30207");
        $("#maxchallenge").css("color","gray");
        $("#maxchallenge").css("border-bottom","none");
    }
    else if(butID=="#maxchallenge"){
        $("#undermatbooat1").hide();
        $("#undermatbooat2").show();
        $but.css("color","black");
        $but.css("border-bottom","2px solid #c30207");
        $("#maxvisit").css("color","gray");
        $("#maxvisit").css("border-bottom","none");
    }
}

$("#myCarousel").on("mouseenter",function() {
    $(this).carousel('cycle')});
$("#playpauseButton").click(function() {
    if($('#playpauseButton').hasClass('fa-pause')){
        $('#myCarousel').carousel('pause');
        $("#playpauseButton").attr("class","fa fa-play");
    }
    else{
        $('#myCarousel').carousel('cycle');
        $("#playpauseButton").attr("class","fa fa-pause");
        }
});