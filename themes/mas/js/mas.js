
(function($) {
  $(document).ready(function() {

    $('.geolocation-address-geocode, .geolocation-client-location, .geolocation-remove').addClass('btn');

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

    $('.node-report-form #edit-submit').html(Drupal.t('Add data'));
    // Submit changes
    $('.node-report-form #edit-submit').click(function(e) {

      var url = document.URL.toString();

      e.preventDefault();
      if (!url.split('#')[1]) {
        $('a[href=#2--ihr-anliegen]').tab('show');
      } else if (url.match('2.')) {
        $('a[href=#3--foto]').tab('show');

        $('#edit-submit').html('Speichern');
      } else if (url.match('3.')) {
        $('form').unbind('submit').submit();
      }
    });
  });

})(jQuery);
