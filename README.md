# Laravel5-twilio

[![Join the chat at https://gitter.im/parfumix/laravel5-twilio](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/parfumix/laravel5-twilio?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

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

## Dont't forget to import facades to controllers. ##

Sending a SMS Message

```php
<?php

Use Twilio;

Twilio::sms('+18085551212', 'Message text');
```

Creating a Call

```php
<?php

Use Twilio;

Twilio::call('+18085551212', 'http://foo.com/call.xml');
```

### License

laravel-twilio is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
