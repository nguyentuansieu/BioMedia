# Slugifier

Slug generation library

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require zelenin/slugifier "dev-master"
```

or add

```
"zelenin/slugifier": "dev-master"
```

to the require section of your ```composer.json```

## Usage

```php
$string = 'test message';
$slug = (string) new \Zelenin\Slugifier\Slugifier($string);
```

You may set some options:

```php
$string = 'test message';
$slugifier = new \Zelenin\Slugifier\Slugifier($string);
$slugifier->transliterateOptions = 'Russian-Latin/BGN; Any-Latin; Latin-ASCII; NFD; [:Nonspacing Mark:] Remove; NFKC; [:Punctuation:] Remove;';
$slugifier->replacement = '_';
$slugifier->lowercase = false;
$slug = $slugifier->getSlug();
```

## Author

[Aleksandr Zelenin](https://github.com/zelenin/), e-mail: [aleksandr@zelenin.me](mailto:aleksandr@zelenin.me)
