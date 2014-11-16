# Text-ForbiddenWords

[![Build Status](https://travis-ci.org/hiroy/clover-text-forbidden-words.png?branch=master)](https://travis-ci.org/hiroy/clover-text-forbidden-words)


Forbidden words

Based on:

- http://qiita.com/phimcall/items/4c559b70f70ea7f1953b
- https://github.com/rono23/reserved_word

## Install

Using [Composer](http://getcomposer.org/) as a dependency management tool, you can bring `Clover\Text\ForbiddenWords` in your environment easily with settings below.

```
{
  "require": {
    "clover/text-forbidden-words": "1.0.*@dev"
  }
}
```


## Usage

```php
if (\Clover\Text\ForbiddenWords::includes($name)) {
    // error
}
```
