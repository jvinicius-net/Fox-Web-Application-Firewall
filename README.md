
![Fox-Web-Application-Firewall](https://images.vexels.com/media/users/3/151733/isolated/preview/456d96033f3c3783bd1ea0c549969784-fox-bonito-dos-desenhos-animados-by-vexels.png)

![version](https://img.shields.io/badge/version-2.0-purple.svg?longCache=true&style=flat-square)
![license](https://img.shields.io/badge/license-MIT-green.svg?longCache=true&style=flat-square)
![issues](https://img.shields.io/github/issues/jvinicius-net/Fox-Web-Application-Firewall.svg?longCache=true&style=flat-square)
![contributors](https://img.shields.io/github/contributors/jvinicius-net/Fox-Web-Application-Firewall.svg?longCache=true&style=flat-square)


# Installation

1. Download the files.
2. Extract the package and copy it to your webserver.
3. Insert the lines of code below on your website:
```php
require('waf.class.php');
$x = new WAF();
$x->start();
```
4. Configure the database in the waf.class.php file
5. Ready, your website is protected

# Some changes that can be made:

1. If you use Cloudflare, you will have to add the line in the start function:
```php
@$this->useCloudflare();
```
2. If you use Blazingfast, you will have to add the line in the start function:
```php
@$this-useBlazingfast();
```
3. If you use DDoSGuard, you will have to add the line in the start function:
```php
@$this-useDDoSGuard();
```

# Requerimentos
* PHP >= 5.6.0
* MySQL

# Thanks for:
[<p> MrakDev </p>](https://github.com/MrakDev)[<p> hexify1337 </p>](https://github.com/hexify1337)[<p>Alemalakra</p>](https://github.com/Alemalakra)

