$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    // $('#about_us').addClass('active');

    var id = null;
    console.log("loaded");

    $('.delete').on('click', function (event) {
        event.preventDefault();

        id = $(this).data("id");
        console.log(id);
        $.ajax({
            type: "POST",
            url: "resources/src/deleteBooking.php",
            data: {
                'id': id
            },
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                console.log(response);

            },
        });
        window.location.reload();
    });
});