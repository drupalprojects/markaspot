api = 2
core = 7.x

projects[drupal][type] = core
projects[drupal][version] = "7.22"

; Mark-a-Spot Profile
projects[markaspot][type] = profile
projects[markaspot][download][type] = "git"
projects[markaspot][download][url] = "https://github.com/markaspot/mark-a-spot.git"
projects[markaspot][download][branch] = "profile"

; Modules
projects[] = "ctools"
projects[] = "features"
projects[] = "field_group"
projects[] = "field_permissions"
projects[] = "jquery_update"
projects[] = "libraries"
projects[] = "panels"
projects[] = "services"
projects[] = "strongarm"
projects[] = "views"
projects[] = "views_datasource"

; Themes
projects[] = "bootstrap"
projects[] = "rubik"
projects[] = "tao"
