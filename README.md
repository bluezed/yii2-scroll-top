yii2-scroll-top
=====================
This Yii 2 widget adds a simple scroll-to-top button to your site.
It uses a glyphicon, some CSS and the .animate jQuery function. All these are part of Yii 2 by default so no other dependencies are required.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bluezed/yii2-scroll-top "*"
```

or add

```
"bluezed/yii2-scroll-top": "*"
```

to the require section of your `composer.json` file.


How to use
----------

Add this line to your main layout so the widget gets loaded automatically into every page.
```php
<?= \bluezed\scrollTop\ScrollTop::widget() ?>
```

By default your main layout should be located here:
```
<Project-Folder>/views/layouts/main.php
```
