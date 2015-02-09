# laravel5-twilio
laravel5-twilio

## Installation

Begin by installing this package through Composer. Run this command from the Terminal:

```bash
    composer require parfumix/laravel5-twilio
```

## Laravel integration

To wire this up in your Laravel project, you need to add the service provider. Open `app/config/app.php`, and add a new item to the providers array.

```php
 'Twilio\Laravel5TwilioServiceProvider',
```

Then, add a Facade for more convenient usage. In `app/config/app.php` add the following line to the `aliases` array:

```php
'Twilio'    => 'Twilio\Facades\Twilio',
```


To add new connections just publish your config file using command and go to your config folder.

```php
php artisan vendor:publish
```



Sending a SMS Message

```php
<?php

Use Twilio;

Twilio::message('+18085551212', 'Message text');
```

Creating a Call

```php
<?php

Use Twilio;

Twilio::call('+18085551212', 'http://foo.com/call.xml');
```

## Dont't forget to import facades to controllers. ##

### License

laravel-twilio is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
