Using Wordpress With Composer & GIT workflow
============================================

### How To Use

```php
$ composer create-project sevenphp/wordpresswithcomposer your_main_folder --prefer-dist
```

> NOTE: if on DEV environment, omit the **--prefer-dist**


==> Then point your webserver to: path/to/your_main_folder/www/public



### Intro

This is not a "project", but more of an attempt to adjust the structure of Wordpress for PHP developers to be able to add & use [Composer](https://getcomposer.org/) and [GIT](https://git-scm.com/) in their workflow.

I'm a PHP developer and like to stay current. I had to embark into DEV-ing with Wordpress. In so-doing, I now feel differently positive about coding with Wordpress as well, although I have been using wordpress since 2007 like crazy at a functional level for online purposes (like blogging..etc). While the code is not 5 star, Wordpress in the philosophy is indeed amazing. **Think about it**, it's the _only project_ that has not (never?) made its user-base suffer from upgrading. It is always highly easy to upgrade. That, in itself is incredible! Anyway, so I wanted to be able to use GIT & a composer approach to my workflow and hence came up with this.

It's not (yet) the perfect workflow, so I would love to hear from you as well.

NOTE: I know & have seen roots.io, but it goes way too far in their approach - modifying the structure of wordpress, it's too risky of an approach. It's kinda overdoing it. (No offence, but that's how I feel)

### Objectives
- Incorporate composer & git workflow into my daily wordpress dev
- Make sure I do not divert too much from what Wordpress advises in [Giving WordPress Its Own Directory](https://codex.wordpress.org/Giving_WordPress_Its_Own_Directory) and [Hardening WordPress](https://codex.wordpress.org/Hardening_WordPress)

### CREDIT

While the motivation comes from my eagerness to code that way, I have to mention and give credit to the amazing [“Rarst”](http://composer.rarst.net/).
He is a driving force in the instilling the composer spirit with his longstanding initiatives. see [http://composer.rarst.net/]()http://composer.rarst.net/)


REF: [http://composer.rarst.net/recipe/site-stack#composerjson](http://composer.rarst.net/recipe/site-stack#composerjson)


### Detailed Info

TODO: Blog posts

### TODO

- Move folder "uploads" as well in folder "public" and renaming it as "assets/uploads". Then symlink it.


### CHANGELOG

- Please see [CHANGELOG](CHANGELOG.md) for details.

### REFERENCE

- [Your Guide to Composer in WordPress](http://composer.rarst.net/recipe/site-stack#composerjson)
- [https://wpackagist.org/](https://wpackagist.org/)
- [https://packagist.org/packages/johnpbloch/wordpress](https://packagist.org/packages/johnpbloch/wordpress)
- [Is moving wp-config outside the web root really beneficial?](http://wordpress.stackexchange.com/questions/58391/is-moving-wp-config-outside-the-web-root-really-beneficial/74972#74972)
- [pantheon-systems](https://github.com/pantheon-systems)
