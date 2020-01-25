$(document).ready(function() {
  $('#header').load('/html/header.html', function() {
    var currentPath = window.location.pathname;
    if($('a.menu-btn[href="'+currentPath+'"]')[0].pathname == currentPath) {
      $('a.menu-btn[href="'+currentPath+'"]').addClass('selected');
    }
  });
  $('#footer').load('/html/footer.html');
});
