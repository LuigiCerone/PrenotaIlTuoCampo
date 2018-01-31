$(function () {
    // Change the active element in the nav bar.
    // var element = $('ul.nav.navbar-nav').find('li.active');
    var element = $('ul.nav.navbar-nav').find('li.active');
    var selectedTournament = null, teams = [];
    $(element).removeClass('active');
    // console.log(element);
    $('#tournaments').addClass('active');
});