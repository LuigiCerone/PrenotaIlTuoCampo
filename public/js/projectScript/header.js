$(function () {
    console.log("ok");

    $('#log_in').click(function (event) {
        console.log("Submit button clicked");

        var email = $('#email').val();
        var password = $('#password').val();

        console.log(email + password);
        // ""
        $.ajax({
            type: "POST",
            url: "resources/src/login.php",
            data: {
                'email': email,
                'password': password
            },
            success: function (response) {
                $("#add_err").html("Log in ok.");
                console.log(response);
                // if (html == 'true') {
                //     //$("#add_err").html("right username or password");
                //     window.location = "dashboard.php";
                // }
                // else {
                //     $("#add_err").css('display', 'inline', 'important');
                //     $("#add_err").html("<img src='images/alert.png' />Wrong username or password");
                // }
            },
            error: function () {
                $("#add_err").html("Error in login");
            },
            beforeSend: function () {
                // $("#add_err").css('display', 'inline', 'important');
                $("#add_err").html("<img id='loading_img' src='public/images/loading.webp' /> Loading...");
                $("#email").prop('disabled', true);
                $("#password").prop('disabled', true);
            },
            complete: function () {
                $("#email").prop('disabled', false);
                $("#password").prop('disabled', false);
            }
        });
        return false;
    });
});

