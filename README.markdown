# Rokkan-Akkorn - git@192.168.1.104:Rokkan-Akkorn.git
Date Created: February 6, 2014, 6:45 pm

## Post Commit Hook

Location in repo that will be pushed to the webserver: '/'
Webserver username:rokkandev password:Haxathon14

## QA Notes

(to be filled in by the Tech Lead)

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
