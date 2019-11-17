# wordpress-common
WordPress development project common files

### First setup:
* cd ~
* git clone git@github.com:andrealandonio/wordpress-common.git WordPress
* import custom plugins

### Import custom plugins
* cd ~/Projects/WordPress/Plugins
* git clone git@github.com:andrealandonio/cloud-search.git
* git clone git@github.com:andrealandonio/daily-logo.git
* git clone git@github.com:andrealandonio/picker.git
* git clone git@github.com:andrealandonio/taxonomy-filter.git

For every plugin run an `npm install` to install node dependencies, then with tasks `grunt` and `grunt deploy` you can autogenerate the readme markdown and deploy the code to the WordPress SVN repositories.

### Dumping and restoring databases
* cd ~/Projects/WordPress/Databases
* mysqldump -h localhost -u root -padmin db_name > db_name.sql (dump)
* mysql -h localhost -u root -padmin db_name < db_name.sql (restore)

### The default set of symlinks (used in every wp-content folder):
* ln -s ~/Projects/WordPress/Themes/twentytwelve twentytwelve
* ln -s ~/Projects/WordPress/Themes/twentythirteen twentythirteen
* ln -s ~/Projects/WordPress/Themes/twentyfourteen twentyfourteen
* ln -s ~/Projects/WordPress/Themes/twentyfifteen twentyfifteen
* ln -s ~/Projects/WordPress/Themes/twentysixteen twentysixteen
* ln -s ~/Projects/WordPress/Themes/twentyseventeen twentyseventeen
* ln -s ~/Projects/WordPress/Themes/twentynineteen twentynineteen
* ln -s ~/Projects/WordPress/Themes/twentytwenty twentytwenty
* ln -s ~/Projects/WordPress/Plugins/cloud-search cloud-search
* ln -s ~/Projects/WordPress/Plugins/daily-logo daily-logo
* ln -s ~/Projects/WordPress/Plugins/multiple-post-thumbnails multiple-post-thumbnails
* ln -s ~/Projects/WordPress/Plugins/picker picker
* ln -s ~/Projects/WordPress/Plugins/taxonomy-filter taxonomy-filter
* ln -s ~/Projects/WordPress/Plugins/wordpress-importer wordpress-importer
* ln -s ~/Projects/WordPress/Plugins/wordpress-setup wordpress-setup

### First configurations (after import):
* conf picker on sidebar
* conf a daily logo
* conf taxonomy filter on genre tax
* conf CloudSearch
* check same data
  - plugins (local e network)
  - users (same names and roles)
  - tags
  - custom terms (genre)
  - custom post types (book)
  - widgets on sidebar
  - post (title, text, excerpt, category, tags, custom fields, image and author)
  - pages
  - settings
