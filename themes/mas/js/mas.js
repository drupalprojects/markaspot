/**
 * @file
 * Javascript for Goole Map widget of Geolocation field.
 */

(function($) {
  $(document).ready(function() {

    $('.geolocation-address-geocode, .geolocation-client-location, .geolocation-remove').addClass('btn');
    // function scrollTabs (){
    //   $('html, body').animate({
    //       scrollTop: $(".nav-tabs").offset().top
    //   }, 1000);
    // }
    // $('.nav-tabs > li > a').click(function(e){
    //   scrollTabs();
    // });
    // Change hash for page-reload
    $('.nav-tabs > li > a').on('shown', function(e) {

      window.location.hash = e.target.hash;
      if (e.target.hash === '#3--foto')  {
        $('.node-report-form #edit-submit').html('Speichern');
      } else {
        $('.node-report-form #edit-submit').html('Weiter');
      }
    });

    var url = document.location.toString();
    if (url.match('#')) {
      $('.nav-tabs a[href=#' + url.split('#')[1] + ']').tab('show');
    }

    $('.node-report-form #edit-submit').html('Weiter');
    // Submit changes
    $('.node-report-form #edit-submit').click(function(e) {

      var url = document.URL.toString();

      e.preventDefault();
      if (!url.split('#')[1]) {
        $('a[href=#2--ihr-anliegen]').tab('show');
        scrollTabs();
      } else if (url.match('2.')) {
        $('a[href=#3--foto]').tab('show');
        scrollTabs();

        $('#edit-submit').html('Speichern');
      } else if (url.match('3.')) {
        $('form').unbind('submit').submit();
      }
    });
  });

  function hideURLbar() {
    if (window.location.hash.indexOf('#') == -1) {
      window.scrollTo(0, 1);
    }
  }

  if (navigator.userAgent.indexOf('iPhone') != -1 || navigator.userAgent.indexOf('Android') != -1) {
    addEventListener("load", function() {
      setTimeout(hideURLbar, 0);
    }, false);
  }
})(jQuery);
