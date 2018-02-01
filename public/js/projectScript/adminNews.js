$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#news').addClass('active');

    $('#saveNews').on('click', function (event) {
        event.preventDefault();

        var title = $('#titleNews').val();
        var date = $('#titleDate').val();
        var text = $('#textNews').val();

        $.ajax({
            type: "POST",
            url: "resources/src/insertNews.php",
            data: {
                'title': title,
                'date' : date,
                'text': text
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