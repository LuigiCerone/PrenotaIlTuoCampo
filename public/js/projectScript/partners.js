$(function () {
    // Change the active element in the nav bar.
    // var element = $('ul.nav.navbar-nav').find('li.active');
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#partners').addClass('active');

    $('#pagination').easyPaginate({
        paginateElement: 'div.card',
        elementsPerPage: 2,
        effect: 'slide',
        firstButton: false,
        lastButton: false
    });
});