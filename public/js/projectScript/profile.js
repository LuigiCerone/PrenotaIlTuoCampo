$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');

    $('#logout').on('click', function () {
        $.ajax({
            type: "POST",
            url: "resources/src/logout.php",
            success: function (response) {
                // console.log(response);
                window.location.href = "index.php";
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
});