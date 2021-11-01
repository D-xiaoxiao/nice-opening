# Nice Opening SDK for Laravel

## [README of Chinese](https://github.com/aliyun/aliyun-oss-php-sdk/blob/master/README-CN.md)

## Overview

Nice is an externally oriented integrated management platform.

## Run environment
- PHP 7.2+.
- Guzzlehttp/guzzle  6.5.

## Install Nice

- If you use the ***composer*** to manage project dependencies, run the following command in your project's root directory:

        composer require niceopening/nice-laravel

  You can also declare the dependency on Nice for Laravel in the `composer.json` file.

        "require": {
            "niceopening/nice-laravel": "dev-master"
        }

  Then run `composer install` to install the dependency. After the Composer Dependency Manager is installed, import the dependency in your PHP code:

        require_once __DIR__ . '/vendor/autoload.php';

- You can also directly download the packaged [PHAR File][releases-page], and introduce the file to your code:

        require_once '/path/to/nice-opening.phar';

- Download the SDK source code, and introduce the `autoload.php` file under the SDK directory to your code:

        require_once '/path/to/nice-opening/autoload.php';

## Quick use

### Common classes

| Class | Explanation |
|:------------------|:------------------------------------|
|laravel\NiceExternal | Nice external class. An NiceExternal instance can be used to call the interface.  |
|laravel\Exceptions\NiceException |Nice Exception class . You only need to pay attention to this exception when you use the NiceExternal. |

### Example


The nice keyword is the last two values of the request interface route. If you want to request the https://nice.zebra-c.com/api/project/list interface, then your key should be project_list


The SDK's operations for the Nice are performed through the NiceExternal class. The code below creates an NiceExternal object:

```php
<?php
$accessKeyId = "<AccessKeyID that you obtain from Nice>";
$accessKeySecret = "<AccessKeySecret that you obtain from Nice>";
$key = "<Key that you use to request nice interface>";
$data = "<Interface parameters require incoming data>";
try {
    $niceExternal = new NiceExternal($accessKeyId, $accessKeySecret);
    $niceExternal->dealRequest($key, $data);
} catch (NiceException $e) {
    print $e->getErrorCode();
    print $e->getErrMessage();
}
```




### Run a unit test

- Run `composer install` to download the dependent libraries.
- Set the environment variable.

        export NICE_ACCESS_KEY_ID=access-key-id
        export NICE_ACCESS_KEY_SECRET=access-key-secret

- Run `php vendor/bin/phpunit`



## Contact us

- [Nice Integrated Management Platform](https://testnice.zebra-c.com/storage/document/).

