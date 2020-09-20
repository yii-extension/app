<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://github.com/yiisoft.png" height="100px">
    </a>
    <h1 align="center">Yii application template</h1>
    <br>
</p>

[![Latest Stable Version](https://poser.pugx.org/yii-extension/app/v/stable.png)](https://packagist.org/packages/yii-extension/app)
[![Total Downloads](https://poser.pugx.org/yii-extension/app/downloads.png)](https://packagist.org/packages/yii-extension/app)
[![ci](https://github.com/yii-extension/app/workflows/ci/badge.svg)](https://github.com/yii-extension/app/actions)
[![codecov](https://codecov.io/gh/yii-extension/app/branch/master/graph/badge.svg)](https://codecov.io/gh/yii-extension/app)


<p align="center">
    <a href="https://github.com/yii-extension/app" target="_blank">
        <img src="docs\images\home.png" >
    </a>
</p>

Yii application template for Yii 3 is best for rapidly creating projects.

### Directory structure

      framework/          contains application configurations
      resources/layout    contains layout files for the web application
      resources/mail      contains layout and view files for mailer
      resources/view      contains view files for the web application
      src/                application directory
          Action          contains web action classes
          Asset           contains assets definition
          Form            contains form models
          Service         contains web services
          Widget          continas widgets for web application

### Requirements

The minimum requirement by this project template that your Web server supports PHP 7.4.0.

### Installation

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
composer create-project --prefer-dist --stability dev yii-extension/app <your project>
~~~

Now you should be able to access the application through the following URL, assuming `app` is the directory
directly under the `public` root.

### Configuring your application

The application is fully configurable through parameters. [Application settings](docs/CONFIG.md)

### Using PHP built-in server

~~~
php -S 127.0.0.1:8080 -t public
~~~

### Wait till it is up, then open the following URL in your browser

~~~
http://localhost:8080
~~~

### Codeception testing

The package is tested with [Codeception](https://github.com/Codeception/Codeception). To run tests:

~~~
php -S 127.0.0.1:8080 -t public > yii.log 2>&1 &
vendor/bin/codecept run
~~~

### Static analysis

The code is statically analyzed with [Phan](https://github.com/phan/phan/wiki). To run static analysis:

```php
./vendor/bin/phan
```
