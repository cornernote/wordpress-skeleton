# WordPress Skeleton

MrPHP's Own WordPress Skeleton, used for creating new WordPress applications.

## About

Copyright (c) 2014 Mr PHP <info@mrphp.com.au>

Source Code: https://github.com/cornernote/wordpress-skeleton


## Installation with Composer

install composer
```
curl http://getcomposer.org/installer | php
```

add required packages to `composer.json` then
```
php composer.phar update
```

You also need to copy `wp/wp-content/*` to `wp-content/`, in particular the `wp/wp-content/themes/twentyfourteen` folder (or your selected theme).

If you would like WordPress to run it's normal installation wizard then rename `wp-config.php` to `wp-config.bak.php` then visit `/wp/index.php` (not `index.php`).  Once the installation wizard is complete, you can copy the generated defines from `wp/wp-config.php` into `config.php` and remove `wp/wp-config.php`.

useful links:
* https://getcomposer.org/
* https://packagist.org/
* http://wpackagist.org/
