; Drush Make (http://drupal.org/project/drush_make)
api = 2
core = 7.x

libraries[bootstrap][download][type] = get
;libraries[bootstrap][download][url] = "https://github.com/twbs/bootstrap/archive/v2.3.2.zip"

; Until switch to 3.0 we pull from here:

libraries[bootstrap][download][url] = "http://getbootstrap.com/2.3.2/assets/bootstrap.zip"
libraries[bootstrap][directory_name] = "bootstrap"
; Check for best practice some day. "sites/all" is maybe a better place for theme
libraries[bootstrap][destination] = "../../profiles/markaspot/themes/mas/"
libraries[bootstrap][overwrite] = TRUE





; libraries[bootstrap][download][type] = "get"
; libraries[bootstrap][download][url] = "https://github.com/twbs/bootstrap/archive/v3.0.2.zip"
; libraries[bootstrap][directory_name] = "bootstrap"
; libraries[bootstrap][destination] = "themes/bootstrap"
; libraries[bootstrap][overwrite] = TRUE
