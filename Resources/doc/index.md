Getting Started With OdlActivityStreamBundle
============================================

OdlActivityBundle implements specifications set by http://activitystrea.ms

## Prerequisites

This version of the bundle requires Symfony 2.1. If you are using Symfony
2.0.x, please use the 1.2.0 release of the bundle.

### Translations

Not yet supported

## Installation

1. Download OdlActivityStreamBundle using composer
2. Enable the Bundle
3. Create your Activity and Object class
4. Configure the OdlActivityStreamBundle
5. Import OdlActivityStreamBundle routing
6. Update your database schema
7. Set up solarium client

### Step 1: Download OdlActivityStreamBundle using composer

Add FOSUserBundle in your composer.json:

```js
{
    "require": {
        "odl/odlactivitystreambundle": "*"
    }
}
```

Now tell composer to download the bundle by running the command:

``` bash
$ php composer.phar update odl/odlactivitystreambundle
```
    
Composer will install the bundle to your project's `vendor/odl` directory.
