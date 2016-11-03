# wordpress-common
WordPress development project common files

First setup:
* cd ~
* git clone git@github.com:andrealandonio/wordpress-common.git WordPress
* import SVN plugins

Import SVN plugins
* cd ~/Projects/WordPress/Plugins
* svn co https://plugins.svn.wordpress.org/cloud-search cloud-search
* svn co https://plugins.svn.wordpress.org/daily-logo daily-logo
* svn co https://plugins.svn.wordpress.org/picker picker
* svn co https://plugins.svn.wordpress.org/taxonomy-filter taxonomy-filter

Dumping and restoring databases
* cd ~/Projects/WordPress/Databases
* mysqldump -h localhost -u root -padmin db_name > db_name.sql (dump)
* mysql -h localhost -u root -padmin db_name < db_name.sql (restore)
