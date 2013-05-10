## Laravel 4 TODO Application
This is a sample todo application developed using Laravel 4 PHP framework.

### Install
[Laravel 4](http://four.laravel.com) PHP framework requires `PHP MyCrypt` extension to be installed.
Follow [these steps](http://php.net/manual/en/book.mcrypt.php) to install the extension.
And you will need to install [Composer](htt://getcomposer.org) for seemless package management. After all these dependencies are installed correctly, use the following commands:

* `git clone https://github.com/anjit6/Laravel-4-todo-app.git /your/webroot/path/laravel-todo`
* `cd /your/webroot/path/laravel-todo`
* Update the packages `composer update` (assuming `composer` is installed to `/usr/local/bin`)
* Change database credentails in `app/config/database.php` (I am using `MySQL` for database, if you are using any other database, please update corresponding configration key in this file)
* Run the command to install migration `php artisan migrate:install`
* Create all the required tables: `php artisan migrate`
* *(optional)* Use this command to popluate your database with some sample tasks `php artisan db:seed`

**That's it!** You are now ready to use / modify this sample todo application.

Browse the application: [http:localhost/laravel-todo/public](http:localhost/laravel-todo/public)

### Version 1.0
The following features are included in this version:

* Display list of Tasks
* Add a new task
* Select a task to view details

### Packages used
This application uses Larave-Guard package by *Jeffrey Way* for minifcation / concatination of assets files like Javascript and CSS. There are many assets managements packages like [Assetic](https://github.com/kriswallsmith/assetic), [Basset](https://github.com/jasonlewis/basset), etc., but this is my personal favourite.
For more information on Laravel Guard, please read [here](https://github.com/JeffreyWay/Laravel-Guard).
Feel free to experiment with any other packages from [packagist](https://packagist.org/)

*For any issues / suggestions / improvements please email anji.t6@gmail.com.*