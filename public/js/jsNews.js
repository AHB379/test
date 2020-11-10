function news(butID){
    var $but = $(butID);
    if(butID=="#recent"){
        $("#topnews").show();
        $("#recentnews").hide();
        $but.css("color","black");
        $but.css("border-bottom","2px solid #c30207");
        $("#top").css("color","gray");
        $("#top").css("border-bottom","none");
    }
    else if(butID=="#top"){
        $("#topnews").hide();
        $("#recentnews").show();
        $but.css("color","black");
        $but.css("border-bottom","2px solid #c30207");
        $("#recent").css("color","gray");
        $("#recent").css("border-bottom","none");
    }
    else if(butID=="#maxvisit"){
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
function newstabs(tabnumber){
    // 'economytitle' is defined in news.tpl
    for(var i=0; i<economytitle.length; i++){
        if(i == tabnumber){
            $(economytitle[i]).css("color","black");
            $(economytitle[i]).css("border-bottom","2px solid #c30207");
        }
        else{
            $(economytitle[i]).css("color","gray");
            $(economytitle[i]).css("border-bottom","none");
        }
    }
}
