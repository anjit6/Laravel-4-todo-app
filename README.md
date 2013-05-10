## Laravel 4 TODO Application
This is a sample todo application developed using Laravel 4 PHP framework.

### Install
[Laravel 4](http://four.laravel.com) PHP framework requires `PHP MyCrypt` extension to be installed. Install [Composer](htt://getcomposer.org) for seemless package managemet.

* `git clone https://github.com/anjit6/Laravel-4-todo-app.git /your/webroot/path/laravel-todo`
* `cd /your/webroot/path/laravel-todo`
* Change database credentails in `app/config/database.php`
* Update the packages `composer update` (assuming `composer` is installed to `/usr/local/bin`)
* `php artisan migrate`
* `php artisan seed`

Check the application at: [http:localhost/laravel-todo/public](http:localhost/laravel-todo/public)

### Version 1.0
The following features are included in this version:

* Display list of Tasks
* Add a new task with a title
* Select a task to view details

### Packages used

*For any issues / suggestions / improvements please email anji.t6@gmail.com.*