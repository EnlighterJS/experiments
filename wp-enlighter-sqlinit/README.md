Enlighter WordPress Plugin Initial Config - SQL Dump
======================================================

On some hosting environments the initial Enlighter config update (first time you click ''save settings**) is not possible (page not responding).
This can be caused by some limitations on your hosting environment (php memory limit, post_max_size, mysql/mariadb query limits).

It is possible to load the initial config directly into your database.

## Requirements ##

* phpmyadmin or mysql command line client
* WordPress table prefix `wp_` (otherwise you have to change it in the sql file)

## Usage ##

1. Open **phpmyadmin**
2. Select your WordPress Database
3. Import the `wp-options.sql` file

## Files ##

* [wp-options.sql](wp-options.sql)
