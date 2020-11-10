$.ajax({
        method: "POST",
        url: "http://www.mednews.ir/fa/weather/countries/1",
        data: { continentid: 1 }
    }
).done(function (result) {
    $(result).insertAfter("div header");
}).fail(function () {
    alert("not access!!!");
});
$.ajax({
        method: "POST",
        url: "http://www.mednews.ir/fa/weather/2251945",
        data: { wcode: 2251945 }
    }
).done(function (result) {
    $("#weathertable").html(result);
}).fail(function () {
    alert("not access weather!!!");
});
function countriesOfContinent(continent){
    $.ajax({
            method: "POST",
            url: "http://www.mednews.ir/fa/weather/countries/4",
            data: { continentid: continent.value }
        }
    ).done(function (result) {
        $(".weather_city_ajax").remove();
        $(result).insertAfter("div header");
        $(".weather_continent option:selected").removeAttr('selected');
        $(".weather_continent option[value="+continent.value+"]").attr('selected',true);
        console.log(result);
    }).fail(function () {
        alert("not access!!!");
    });
}
function citiesOfCountry(country){
    var $continent = $(".weather_continent option:selected");
    $.ajax({
            method: "POST",
            url: "http://www.mednews.ir/fa/weather/cities/1/1",
            data: {
                counrtyid: country.value,
                continentid: $continent.attr('value')
            }
        }
    ).done(function (result) {
        $(".weather_city_ajax").remove();
        $(result).insertAfter("div header");
        $(".weather_continent option:selected").removeAttr('selected');
        $(".weather_continent option[value="+$continent.attr('value')+"]").attr('selected',true);
        $(".weather_countries option[value="+country.value+"]").attr('selected',true);
        console.log(result);
    }).fail(function () {
        alert("not access!!!");
    });
}
function showWeather(towncode) {
    $.ajax({
            method: "POST",
            url: "http://www.mednews.ir/fa/weather/" + towncode,
            data: { wcode: towncode }
        }
    ).done(function (result) {
        $(".weather_container").remove();
        $(".weather_l_sec").css("background","url('/media/weather.png') no-repeat center top");
        $("#weathertable").html(result);
        console.log(result);
    }).fail(function () {
        alert("not access!!!");
    });
}