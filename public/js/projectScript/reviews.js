$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#reviews').addClass('active');

    $('#saveReview').on('click', function (event) {
        event.preventDefault();

        var id = $('#id').text();
        var text = $('#reviewText').val();
        var stars = $('#reviewStars').val();

        $.ajax({
            type: "POST",
            url: "resources/src/insertNewReview.php",
            data: {
                'user': id,
                'text': text,
                'stars': stars
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