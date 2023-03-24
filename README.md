# l2l-PHP-URL-Shortner
its a PHP Library for short URLs with [https://l2l.ink](https://l2l.ink) service

## Create Client
Login or Create account into [https://l2l.ink](https://l2l.ink) . you can see your `CLIENT_TOKEN` code into home page . use it for append changes into your profile or links

## SSL Connection
you must use a SSL connection to be authorized with you `CLIENT_TOKEN` and send request to L2L Server

## Install
make a clone of project and use it like this :
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
```

## REST API
you can also read [https://l2l.ink/api](https://l2l.ink/api) for access to L2L service with HTTP Requests

## Methods
# `profile`
this method used for connection to profile with a token , and get profile details.
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$profile = $l2l->profile(); // array response
```


