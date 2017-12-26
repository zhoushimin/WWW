$(function(){
	$(window).scroll(function(){
        var k1 = $(window).scrollTop()/4;
        $(".n-banner").css("background-position-y",-k1);

        // if($(window).scrollTop()>0){
        //     $(".header1").addClass("on");
        // }else if ($(window).scrollTop()==0){
        //     $(".header1").removeClass("on");
        // }
        // if($(window).scrollTop()>$('.n-banner').height()){
        //     $(".sub-nav-fix").addClass("fix");
        // }else{
        //     $(".sub-nav-fix").removeClass("fix");
        // }
        // $(".header1").removeClass("active");
    })
});
function btnhover(obj){
  var ink, d, x, y;
  var ulbox = obj;
    ulbox.find("a").bind("click touchstart",
    function(e) {
        $(".ink").remove();
        if ($(this).children(".ink").length === 0) {
            $(this).prepend("<span class='ink'></span>")
        }
        ink = $(this).find(".ink");
        ink.removeClass("animate-ink");
        if (!ink.height() && !ink.width()) {
            d = Math.max($(this).outerWidth(), $(this).outerHeight());
            ink.css({
                height: d,
                width: d
            })
        }
        x = e.pageX - $(this).offset().left - ink.width() / 2;
        y = e.pageY - $(this).offset().top - ink.height() / 2;
        ink.css({
            top: y + 'px',
            left: x + 'px'
        }).addClass("animate-ink")
    })
}
/*
var _id = getUrlParam("id");
if (_id == 6) {
   alert(0);
}
*/
function getUrlParam(name){
    var reg = new RegExp("(^|&)"+ name +"=([^&]*)(&|$)"); 
    var r = window.location.search.substr(1).match(reg);  
    if (r!=null) return unescape(r[2]); return null; 
} 