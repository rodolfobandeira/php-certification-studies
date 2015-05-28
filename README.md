php-certification-studies
=========================

Examples to study for PHP Certification

If you wanna help, fork and then make a pull request to us!
:thumbsup:

--

###AUTOLOAD:
######Difference using `spl_autoload_register` and `__autoload`?

```php
function __autoload_libraries($class){
    include_once 'lib.'.$class.'.php';
}

spl_autoload_register('__autoload_libraries');
```

vs

```php
function __autoload($class){
    include_once 'lib.'.$class.'.php';
}
```

######Answer:

`__autoload` is generally considered obsolete. It only allows for a single autoloader.
Generally you should only use `__autoload` if you're using a version of PHP without support for `spl_autload_register`.

`spl_autoload_register` allows several autoloaders to be registered which will be run through in turn until a match is
found. This means that if you're using framework code or other third party libraries that implement their own
autoloaders you don't have to worry about yours causing conflicts.

--

###TYPE HINTING

(https://www.youtube.com/watch?v=oGeecEUK6cw)[https://www.youtube.com/watch?v=oGeecEUK6cw]

--
####References:
(http://stackoverflow.com/questions/6894538/php-spl-autoload-register-vs-autoload)[http://stackoverflow.com/questions/6894538/php-spl-autoload-register-vs-autoload]
