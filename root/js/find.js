$(document).ready(function () {
    $("#hide1, #hide2, #hide3, #hide4, #specifications").slideUp(0);

    $("#btn-1").click(function () {
        $('#hide1').slideToggle(400);
    });

    $("#btn-2").click(function () {
        $('#hide2').slideToggle(400);
    });

    $("#btn-3").click(function () {
        $('#hide3').slideToggle(400);
    });

    $("#btn-4").click(function () {
        $('#hide4').slideToggle(400);
    });

    let count = 0;

    $("#btn-hide").click(function (e) {
        e.preventDefault();
        if (count === 0) {
            $("#text-hide").text("Hide");
            $("#form-btn").css('visibility', "hidden");
            count++;
        } else {
            $("#text-hide").text("Show");
            $("#form-btn").css('visibility', "visible");
            count = 0;
        }

        $('#specifications').slideToggle(400);
    });

    ///////////////////////////////////////////////////////////////////////////SLIDER
    $(function slider() {
        $("#carouselFind .item-slider:first-child").addClass("active").animate({ 'width': '650px' }, 0);

        function currentSlide(target) {
            $("#carouselFind .item-slider").animate({ 'width': '470px', 'right': 500 * target + 'px' }, 400);
            $("#carouselFind .item-slider").removeClass("active").eq(target).addClass("active").animate({ 'width': '650px' }, 400);
        }

        $("#prev").click(function (e) {
            e.preventDefault();
            let target = $("#carouselFind .active").index();
            if (target === 0) {
                target = $("#carouselFind .item-slider").length - 2;
            }
            else {
                target = target - 1;
            }
            currentSlide(target);
        });

        $("#next").click(function (e) {
            e.preventDefault();
            let target = $("#carouselFind .active").index();
            if (target === $("#carouselFind .item-slider").length - 2) {
                target = 0;
            }
            else {
                target = target + 1;
            }
            currentSlide(target);
        });
    });
});
