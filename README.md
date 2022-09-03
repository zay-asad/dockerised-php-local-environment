# Dockerised PHP Dev Setup

### Step 1 --- cd into project root directory dockerised-php-local-environment

### Step 2 --- build image using ```docker-compose up --build```
* docker-compose up -d (spin up container in the background)

### Step 3 --- add php code inside the `src` folder

### Step 4 --- create db called "employees", a "users" table with "name" & "job_title" (VARCHAR=25)
### Step 5 --- login using "root" as user & "example" as password. "MySQL" selected for the system and choose "db" as the server name.

### How it works

* containers setup:
* localhost:85/db_setup -> php app
* localhost:8080 -> adminer mysql

* to install phpunit, you'll need to use composer require --dev phpunit/phpunit and setup a new phpunit.xml config file so it can find the tests
* run tests: vendor/bin/phpunit
* run and filter ONLY one test: ./vendor/bin/phpunit --filter DemoAssertionsTest