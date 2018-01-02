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
                location.reload();
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

    $("#rep_password").on('keypress', function () {
        console.log("Event - Keypress");
        password = $('#signup_password').val();
        rep_password = $('#rep_password').val();
        if (password !== rep_password) {
            $('#passoword_error').html("Le passwords non corrispondono!");
            $('#rep_password').addClass('error');
            $("#submit_button").prop('disabled', true);
        } else {
            $('#passoword_error').html("");
            $('#rep_password').removeClass('error');
            $("#submit_button").prop('disabled', true);
        }
    });

    $.datepicker.regional['it'] = {
        closeText: 'Chiudi', // set a close button text
        currentText: 'Oggi', // set today text
        monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'], // set month names
        monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'], // set short month names
        dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'], // set days names
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'], // set short day names
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gio', 'Ve', 'Sa'], // set more short days names
        dateFormat: 'dd/mm/yy' // set format date
    };

    $("#birthdate").datepicker($.datepicker.regional['it']);
    $("#birthdate").datepicker();

    // ----------------------------------------------------------------------------------------------------------------
    // ------------------------------------- SIGNUP
    $('#submit_button').click(function (event) {
        console.log("Submit button clicked");

        var email = $('#signup_email').val();
        var password = $('#signup_password').val();
        var firstName = $('#first_name').val();
        var lastName = $('#last_name').val();
        var birthDate = $('#birthdate').val();
        var gender = $('#gender').val();

        console.log(email + password);
        // ""
        $.ajax({
            type: "POST",
            url: "resources/src/signup.php",
            data: {
                'email': email,
                'password': password,
                'firstName': firstName,
                'lastName': lastName,
                'birthDate': birthDate,
                'gender': gender
            },
            success: function (response) {
                $("#signup_err").html("Sign up ok.");
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
            error: function (response) {
                $("#signup_err").html("Error in signup");
                console.log(response);
            },
            beforeSend: function () {
                // $("#add_err").css('display', 'inline', 'important');
                $("#signup_err").html("<img id='loading_img' src='public/images/loading.webp' /> Caricamento...");
                $("#signup_email").prop('disabled', true);
                $("#password").prop('disabled', true);
            },
            complete: function () {
                $("#signup_email").prop('disabled', false);
                $("#password").prop('disabled', false);
            }
        });
        return false;
    });

    $('#logout').on('click', function () {
        console.log("Log out clicked");
        $.ajax({
            type: "POST",
            url: "resources/src/logout.php",
            success: function (response) {
                console.log(response);
                location.reload();
            },
            error: function (response) {
                console.log(response);
            },
        });
    });
});

