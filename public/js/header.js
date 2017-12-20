$(document).ready(function () {
    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
    });
});
$(document).ready(function () {
    /*
        var defaults = {
        containerID: 'toTop', / fading element id
        containerHoverID: 'toTopHover', / fading element hover id
        scrollSpeed: 1200,
        easingType: 'linear'
        };
    */
    $().UItoTop({easingType: 'easeOutQuart'});
});


jQuery(function () {
    $(".swipebox").swipebox();
});


<!-- /Baneer-include/assets/js/ -->
<!-- Calendar -->


$(function () {
    $("#datepicker").datepicker();
});

<!-- /Calendar -->