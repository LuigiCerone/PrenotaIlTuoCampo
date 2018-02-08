$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#reviews').addClass('active');

    var id = null;
    console.log("loaded");

    $('.add').on('click', function (event) {
        event.stopPropagation();
        id = $(this).data("id");

        $('#saveReview').modal('toggle');
    });

    $('.delete').on('click', function (event) {
        event.stopPropagation();
        id = $(this).data("id");

        $('#deleteReview').modal('toggle');
    });

    $('#saveButton').click(function () {
        $.ajax({
            type: "POST",
            url: "resources/src/saveReview.php",
            data: {
                'id': id
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

    $('#deleteButton').click(function () {
        $.ajax({
            type: "POST",
            url: "resources/src/deleteReview.php",
            data: {
                'id': id
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