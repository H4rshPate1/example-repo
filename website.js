$(document).ready(function () {
    $(".btn").click(function(){
        $(".popup").hide();
        $("#popup"+$(this).attr("target")).toggle();
    });
    $(".btn-close").click(function(){
        $(".popup").hide();
    });
    $(".tab-content:first").show();
    $(".tab-nav li:first").addClass("active");
    $(".tab-nav li").click(function(){
        index = $(this).index();
        $(".tab-nav li").removeClass("active");
        $(this).addClass("active");
        $(".tab-content").hide();
        $(".tab-content").eq(index).show();
    });
    $(".accordion-item > button").on("click", function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            $(this).siblings(".accordion-body").slideUp("slow");
        } else {
            $(".accordion-item > button").removeClass("active");
            $(this).addClass("active");
            $(".accordion-body").slideUp("slow");
            $(this).siblings(".accordion-body").slideDown("slow");
        }
    });
    $(".images:first-child").addClass("active");
     $(".right-arrow").on("click", function(){
        var currentimg = $(".images.active");
        var nextimg = currentimg.next();
        if (nextimg.length){
            currentimg.removeClass("active");
            nextimg.addClass("active");
        } else {
            $(".images:last-child").removeClass("active");
            $(".images:first-child").addClass("active");
        }
    });
    $(".left-arrow").on("click", function(){
        var currentimg = $(".images.active");
        var previmg = currentimg.prev();
        if (previmg.length){
            currentimg.removeClass("active");
            previmg.addClass("active");
        } else {
            $(".images:first-child").removeClass("active");
            $(".images:last-child").addClass("active");
        }
    });
});