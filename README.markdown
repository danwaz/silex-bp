## Setting Up Project

### Install Composer
	curl -sS https://getcomposer.org/installer | php

### Install Dependencies
	php composer.phar install

### Install Grunt

	npm install -g grunt-cli

** Note: You will need to install [NODE.js](http://nodejs.org/) before you can install Grunt

With Grunt is installed, run `npm install` from the root of the project directory.  This will pull in the dependencies for the project.  Dependencies are defined the 'package.json' file.

### Using Grunt to Run Compass

	grunt watch

or simply

	grunt

### Common Silex Errors
* Make sure /logs is writable

	chmod -R 777 logs

* Make sure /cache is writable (if exists)

	chmod -R 777 logs

### Fix Propel

Replace line 652 of Propel.php with:

	$adapter = isset($conparams['adapter']) ? DBAdapter::factory($conparams['adapter']) : self::getDB($name);
