##Cta Records In Laravel Project

Dynamically record clicks on call-to-action buttons in Laravel.

By installing this package, all `<a>` tags that include the `href="tel:"` attribute will be stored in the database when clicked by the user, with that number and address of the current page.

###Installation

1. First by Composer:

``` bash
$ composer require davoodjavadi/cta-records
```

2. After add the ServiceProvider to the providers array in config/app.php:

``` bash
davoodjavadi\ctaRecords\CtaRecordsProvider::class,
```


3. And Add this to your aliases:
``` bash
'CtaRecords' => davoodjavadi\ctaRecords\CtaRecordsFacade::class,
```


4. After to publish use:
``` bash
php artisan vendor:publish --provider="davoodjavadi\ctaRecords\CtaRecordsProvider"
```


5. Now Run:
``` bash
$ php artisan migrate
```

6. Finally, place the `views\ctaRecods\script` codes next to your own codes.
