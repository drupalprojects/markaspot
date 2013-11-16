api = 2
core = 7.x

; Modules
projects[ctools][subdir] = "contrib"
projects[features][subdir] = "contrib"
projects[entity][subdir] = "contrib"
projects[geolocation][subdir] = "contrib"
projects[field_group][subdir] = "contrib"
projects[field_permissions][subdir] = "contrib"
projects[jquery_update][subdir] = "contrib"
projects[libraries][subdir] = "contrib"
projects[panels][subdir] = "contrib"
projects[services][subdir] = "contrib"
projects[strongarm][subdir] = "contrib"
projects[views][subdir] = "contrib"
projects[views_datasource][subdir] = "contrib"
projects[better_exposed_filters][subdir] = "contrib"
projects[bootstrap_fieldgroup][subdir] = "contrib"
projects[admin_menu][subdir] = "contrib"
projects[field_formatter_settings][subdir] = "contrib"
projects[field_formatter_class][subdir] = "contrib"
projects[field_formatter_css_class][subdir] = "contrib"
projects[uuid][subdir] = "contrib"
projects[uuid_features][subdir] = "contrib"
projects[twitter][subdir] = "contrib"
projects[twitter][patch][2132231] = "https://drupal.org/files/issues/Twitter-add_geo_and_entities_Twitter_object_2132231-1_0.patch"
projects[oauth][subdir] = "contrib"
projects[workbench][subdir] = "contrib"
projects[chosen][subdir] = "contrib"
projects[chosen][version] = 7.x-2.x-dev



libraries[chosen][type] = libraries
libraries[chosen][download][type] = get
libraries[chosen][download][url] = "https://github.com/harvesthq/chosen/releases/download/1.0.0/chosen_v1.0.0.zip"
libraries[chosen][directory_name] = chosen

libraries[chosen][type] = libraries
libraries[chosen][download][type] = git
libraries[chosen][download][url] = "https://github.com/lvoogdt/Leaflet.awesome-markers.git"
libraries[chosen][directory_name] = Leaflet.awesome-markers

libraries[chosen][type] = libraries
libraries[chosen][download][type] = git
libraries[chosen][download][url] = "https://github.com/Leaflet/Leaflet.markercluster.git"
libraries[chosen][directory_name] = Leaflet.markercluster

libraries[chosen][type] = libraries
libraries[chosen][download][type] = git
libraries[chosen][download][url] = "https://github.com/Leaflet/Leaflet.git"
libraries[chosen][directory_name] = Leaflet

libraries[chosen][type] = libraries
libraries[chosen][download][type] = git
libraries[chosen][download][url] = "https://github.com/fgnass/spin.js.git"
libraries[chosen][directory_name] = spin.js


; Themes
projects[bootstrap][type] = "theme"
projects[rubik][type] = "theme"
projects[tao][type] = "theme"
