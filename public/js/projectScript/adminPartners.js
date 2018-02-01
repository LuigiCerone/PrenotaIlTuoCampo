$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#partners').addClass('active');

    $('#savePartners').on('click', function (event) {
        event.preventDefault();

        var name = $('#partenersText').val();
        var info = $('#descriptionText').val();
        var region = $('#regionText').val();
        var area = $('#areaText').val();
        var addr = $('#addressText').val();
        var email = $('#emailText').val();
        var number = $('#numberText').val();

        $.ajax({
            type: "POST",
            url: "resources/src/insertPartners.php",
            data: {
                'name': name,
                'description' : info,
                'region' : region,
                'area' : area,
                'address' : addr,
                'email' : email,
                'telnumber': number
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