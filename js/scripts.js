jQuery(document).ready(function($) {

  var location = window.location.href; // returns the full URL
  if(/im/.test(location)) {
    $('.page-content').addClass('has-schedule');
  }

  // Find Schedule Links and modify them
  $('a[href*=".pdf"]').addClass('schedule-link third-section').attr("target","_blank");

});
