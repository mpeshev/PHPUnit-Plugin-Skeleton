PHPUnit-Plugin-Skeleton
=======================

A small skeleton for adding PHPUnit support to your WordPress plugins.

## Setup

1. Clone the [WordPress Core repository]((http://develop.svn.wordpress.org/trunk/)) with the tests somewhere on your drive.
2. Setup a new database and the tests and `wp-tests-config.php` as per [the handbook guidelines](http://make.wordpress.org/core/handbook/automated-testing/#installation)
3. Download the PHPUnit-Plugin-Skeleton files in a new directory inside of your plugin folder (sample name: *tests*)
4. Update the `$path` in your `bootstrap.php` to the path to your WordPress Tests folder (leading to bootstrap.php)
5. Update the `active_plugins` key leading to your plugin folder and main plugin file name.
6. Add some tests to the `phpunit/` folder
7. Run *phpunit* within the /tests folder (or the folder name created in step 3)

## Resources

Inspired by and based on:

* [WordPress Core tests suite](http://develop.svn.wordpress.org/trunk/)
* [Unit Testing WordPress Plugins: The Right Way](http://catn.com/2012/08/17/unit-testing-wordpress-plugins-the-right-way/)
* [wordpress-plugin-tests@github by jbrinley](https://github.com/jbrinley/wordpress-plugin-tests) 
* [WP-CLI's wp scaffold plugin-tests](http://wp-cli.org/blog/plugin-unit-tests.html)
