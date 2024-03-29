# Dockerised PHP Dev Setup

### Step 1 --- cd into project root directory dockerised-php-local-environment

### Step 2 --- build image using ```docker-compose up --build```
* docker-compose up -d (spin up container in the background)

### Step 3 --- add php code (if using 7.4) inside the `src` folder.
### Step 4 --- add php code (if using 8.0) inside the `php8` folder.

### Step 5 --- create db called "employees", a "users" table with "name" & "job_title" (VARCHAR=25)
### Step 6 --- login using "root" as user & "example" as password. "MySQL" selected for the system and choose "db" as the server name.

### How it works

* containers setup:
* localhost:85 -> php7.4 domain
* localhost:90 -> php8.0 domain
* localhost:85/db_setup -> php app
* localhost:8080 -> adminer mysql

* to install phpunit, you'll need to use ```composer require --dev phpunit/phpunit``` and setup a new ```phpunit.xml``` config file so it can find the tests
* run tests: ```vendor/bin/phpunit```
* run and filter ONLY one test: ```./vendor/bin/phpunit --filter DemoAssertionsTest```
* everytime you change anything in the composer.json e.g. adding autoload you need to run this command to update the changes:```composer dump-autoload```
* I have also installed symfony/var-dumper for testing errors/exceptions in PHPunit

### Todo-create another dockerfile for php 8.1 & php 8.2