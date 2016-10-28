Using Wordpress With Composer & GIT workflow
============================================

### How To Use

```php
$ composer create-project sevenphp/wordpresswithcomposer your_main_wordpress --prefer-source
```

==> Then point your webserver to: path/to/your_main_wordpress/www/public



### Intro

This is not a "project", but more of an attempt to adjust the structure of Wordpress for PHP developers to be able to add & use [Composer](https://getcomposer.org/) and [GIT](https://git-scm.com/) in their workflow. It's highly inspired from [“Rarst”](http://composer.rarst.net/).

I'm a PHP developer and like to stay current. I had to embark into dev-ing with Wordpress. While the code is not 5star, Wordpress in the philosophy amazing. Think about it, it's the only project that has not make it's user suffer from upgrading. Anyway, so I wanted to be able to use GIT & a composer approach to my workflow and hence came up with this.

It's not the perfect workflow, so I would love to hear from you as well.

NOTE: I know & have seen roots.io, but it's goes way too much far in the modifying the structure of wordpress, it's too risky of an approach.

### Objectives
- Incorporate composer & git workflow into my daily wordpress dev
- Make sure I do not divert too much from what Wordpress advises in [Giving WordPress Its Own Directory](https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory) and [Hardening WordPress](https://codex.wordpress.org/Hardening_WordPress)

### CREDIT

My objectives have been met THANKS TO & would not have been possible without the AWESOME Andrey Savchenko aka [“Rarst”](http://composer.rarst.net/)
He is a driving force in the instilling the composer spirit with his longstanding initiatives. see [http://composer.rarst.net/]()http://composer.rarst.net/)


REF: [http://composer.rarst.net/recipe/site-stack#composerjson](http://composer.rarst.net/recipe/site-stack#composerjson)


### Detailed Info

TODO: Blog posts

### TODO

- further decompose the config.php to include dev.config.php, live.config.php ..etc
- Probably move folder "uploads" at in folder "public" and renaming it as "assets/uploads"


### CHANGELOG

- Please see [CHANGELOG](CHANGELOG.md) for details.

### REFERENCE

- [Your Guide to Composer in WordPress](http://composer.rarst.net/recipe/site-stack#composerjson)
- [https://wpackagist.org/](https://wpackagist.org/)
- [https://packagist.org/packages/johnpbloch/wordpress](https://packagist.org/packages/johnpbloch/wordpress)
- [Is moving wp-config outside the web root really beneficial?](http://wordpress.stackexchange.com/questions/58391/is-moving-wp-config-outside-the-web-root-really-beneficial/74972#74972)