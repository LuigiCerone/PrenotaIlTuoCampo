$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    // $('#news').addClass('active');
    var id = null;
    console.log("loaded");

    $('#form').submit(function (event) {
        event.preventDefault();
        console.log("Form");
    });

    $('.delete').on('click', function (event) {
        event.stopPropagation();

        id = $(this).data("id");
        console.log(id);

        $('#removeAvailability').modal('toggle');
    });

    $('#saveChange').click(function () {
        $.ajax({
            type: "POST",
            url: "resources/src/modifyAvailability.php",
            data: {
                'availability': id
            },
            success: function (response) {
                $("#error").html("OK");
                console.log(response);
                // window.location = "activateAccount.php";
            },
            error: function (response) {
                $("#error").html("Error in signup");
                console.log(response);
            },
            beforeSend: function () {
                $("#saveChange").prop('disabled', true);
            },
            complete: function () {
                $("#saveChange").prop('disabled', false);
                window.location.reload();
            }
        });
    });

    $('#cancel').on('click', function () {
        id = null;
    });
});