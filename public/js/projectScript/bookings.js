$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    // $('#about_us').addClass('active');

    var id = null;
    console.log("loaded");

    $('.delete').on('click', function (event) {
        event.stopPropagation();

        id = $(this).data("id");
        console.log(id);

        $('#removeBooking').modal('toggle');
    });

    $('#saveBooking').click(function () {
        console.log("qui");

        $.ajax({
            type: "POST",
            url: "resources/src/modifyBooking.php",
            data: {
                'booking': id
            },
            success: function (response) {
                $("#error").html("Sign up ok.");
                console.log(response);
                // window.location = "activateAccount.php";
            },
            error: function (response) {
                $("#error").html("Error in signup");
                console.log(response);
            },
            beforeSend: function () {
                $("#saveBooking").prop('disabled', true);
            },
            complete: function () {
                $("#saveBooking").prop('disabled', false);
                window.location.reload();
            }
        });
    });

    $('#cancel').on('click', function () {
        id = null;
    });
});