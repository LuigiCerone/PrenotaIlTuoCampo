$(function () {
    console.log("ok");

    $('#loginForm').submit(function (event) {
        console.log("Submit button clicked");

        event.preventDefault();
        event.stopPropagation();

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
            error: function (response) {
                $("#add_err").html("Error in login");
                console.log(response.data);
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
    });

    $("#rep_password").on('keyup', function () {
        password = $('#signup_password').val();
        rep_password = $('#rep_password').val();
        console.log(password, rep_password);
        if (password !== rep_password) {
            $('#passoword_error').html("Le passwords non corrispondono!");
            $('#rep_password').addClass('error');
            $("#submit_button").prop('disabled', true);
        } else {
            $('#passoword_error').html("");
            $('#rep_password').removeClass('error');
            $("#submit_button").prop('disabled', false);
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
        dateFormat: 'yy-mm-dd',
        minDate: 0
    };

    $("#birthdate").datepicker($.datepicker.regional['it']);
    $("#birthdate").datepicker();

    // ----------------------------------------------------------------------------------------------------------------
    // ------------------------------------- SIGNUP
    $('#signupForm').submit(function (event) {
        console.log("Submit button clicked");

        var email = $('#signup_email').val();
        var password = $('#signup_password').val();
        var firstName = $('#first_name').val();
        var lastName = $('#last_name').val();
        var birthDate = $('#birthdate').val();
        var gender = $('#gender').val();
        var telnumber = $('#telnumber').val();

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
                'gender': gender,
                'telnumber': telnumber
            },
            success: function (response) {
                $("#signup_err").html("Sign up ok.");
                console.log(response);
                // window.location = "activateAccount.php";
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
    });

    $('#logout').on('click', function () {
        console.log("Log out clicked");
        $.ajax({
            type: "POST",
            url: "resources/src/logout.php",
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
});

