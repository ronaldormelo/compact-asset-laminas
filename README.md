CompactAsset
===============
Version 1.0.0

Introduction
------------
CompactAsset is a module for Laminas Framework (ZF3) that joins, minimizes, compresses and caches CSS and JS,
improving the performance of your web application

Installation
------------

- Clone this module into your `module/` directory and rename to `CompactAsset`
- Enable `CompactAsset` in `config/modules.config.php`
- Add the following line in `composer.json` for autoload
```php
{
  "autoload": {
    "psr-4": {
      "CompactAsset\\": "module/CompactAsset/src/",
    }
  }
}
```
- Run `composer dump-autoload` to autoload the new module

Use
------------
- In your views, where there are calls to **JS** files, instead of using the traditional way:
```php
<script src="/assets/js/plugins/notifications/notify-metro.min.js"></script>
<script src="/assets/js/templates/theme1/js/jquery.waypoints.js"></script>
<script src="/assets/js/templates/theme1/js/jquery.counterup.min.js"></script>
<script src="/assets/js/module1/index.js"></script>
``` 
Use:
```php
<script src="/assets/compact-js/plugins|notifications|notify-metro.min.js,templates|theme1|js|jquery.waypoints.js,templates|theme1|js|jquery.counterup.min.js,module1|index.js"></script>
```

- In your views, where there are calls to **CSS** files, instead of using the traditional way:
```php
<link href="/assets/css/plugins/notifications/notify-metro.min.css" rel="stylesheet"/>
<link href="/assets/css/templates/theme1/css/jquery.waypoints.css" rel="stylesheet"/>
<link href="/assets/css/templates/theme1/css/jquery.counterup.min.css" rel="stylesheet"/>
<link href="/assets/css/module1/index.css" rel="stylesheet"/>

``` 
Use:
```php
<script src="/assets/compact-css/plugins|notifications|notify-metro.min.css,templates|theme1|css|jquery.waypoints.css,templates|theme1|css|jquery.counterup.min.css,module1|index.css"></script>
```

- Decrease the amount of requests, improve page load time
- The module joins, minimizes, compresses and caches the **JS** and **CSS**
  