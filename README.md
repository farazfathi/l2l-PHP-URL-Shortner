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
### `profile`
this method used for connection to profile with a token , and get profile details.
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$profile = $l2l->profile(); // array response
```

### `retoken`
change your CLIENT_TOKEN` . when using this method all clients using `CLIENT_TOKEN` will signed out
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$new_token = $l2l->retoken(); // new token as a string
```

### `urls`
get all links of your account
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$links = $l2l->urls(); // array
```

### `url`
get all data of a URL ID
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$url_data = $l2l->url("SHORT_URL_ID"); // array
``` 

### `short`
create a new short URL
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$short_url_data = $l2l->short("http://any-valid.url/path"); // array
```

### `edit`
change details of a previous Short URL
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$edit_result = $l2l->edit("SHORT_URL_ID",[
    'url' => 'https://new.target/link',
    'token' => 'custom_path'    
]); // array
```

### `delete`
delete a URL from account
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$delete_result = $l2l->delete("SHORT_URL_ID"); // array
```

### `analyze`
get URL performance , clicks and IPs by date
```php
require("/path/to/l2l.php");
$l2l = new l2l("CLIENT_TOKEN");
$analyze_result = $l2l->analyze("SHORT_URL_ID"); // array
```
