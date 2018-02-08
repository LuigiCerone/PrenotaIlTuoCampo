$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#news').addClass('active');

    $('#pagination').easyPaginate({
        paginateElement: 'div.row',
        elementsPerPage: 1,
        effect: 'slide',
        firstButton: false,
        lastButton: false,
        prevButtonText: '&laquo;',
        nextButtonText: '&raquo;'
    });

});