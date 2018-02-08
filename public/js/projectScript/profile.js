$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    // $('#about_us').addClass('active');

    console.log("loaded");
    $('#changePassFrom').submit(function (event) {

        var old_password = $('#old_password').val();
        var new_password = $('#new_password').val();

        $.ajax({
            type: "POST",
            url: "resources/src/signup.php",
            data: {
                'old_pass': old_password,
                'new_pass': new_password
            },
            success: function (response) {
                $("#error").html("Password cambia con successo!");
                console.log(response);
                // window.location = "activateAccount.php";
            },
            error: function (response) {
                $("#error").html("Errore durante la modifica");
                console.log(response);
            },
            beforeSend: function () {
                // $("#add_err").css('display', 'inline', 'important');
                $("#error").html("<img id='loading_img' src='public/images/loading.webp' /> Caricamento...");
                $("#old_password").prop('disabled', true);
                $("#new_password").prop('disabled', true);
            },
            complete: function () {
                $("#old_password").prop('disabled', false);
                $("#new_password").prop('disabled', false);
            }
        });
        // return false;
    });
});