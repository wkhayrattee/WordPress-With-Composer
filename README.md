Using WordPress With Composer & GIT workflow
===============================================

This project is **production** ready.

If that matters, I have deployed several WooCommerce-based shops using this setup for the last 4yrs, as well as numourous WordPress blogs. 

I obviously also use it on the high production shops/websites for my professional work-place. So far, no issue or constraints. It makes working and developing in WordPress a joy. It makes automated deploy very neat { helps achieve part of the goals for [12-factor principle](https://12factor.net/) }.

Now go rock your WordPress development workflow with confidence!

## ## How To Use

1) Use [Composer](https://getcomposer.org/) to setup the project:

```
$ composer create-project sevenphp/WordPresswithcomposer your_main_folder --no-dev --optimize-autoloader --prefer-dist -vv
```

> NOTE: if on DEV environment, omit the **--no-dev --optimize-autoloader --prefer-dist**

2) Setup your Config & .env files:

Inside the folder **www/env**, do:

- rename *.env.example* to *.env* and adjust the values as per your context
- Depending on whether you are on DEV or PRODuction, rename *_dev-sample.php* to *dev.php* and adjust the values as per your context

==> Then point your webServer to: path/to/your_main_folder/www/public

3) Add any packages through Composer's **require** and enjoy building WordPress in a new flexible way, without using the dashboard - you control everything :)



## ## Intro

This is not a "project" (as in a framework) per se, but more of an attempt to adjust the structure of WordPress for PHP developers to be able to add & use [Composer](https://getcomposer.org/) and [GIT](https://git-scm.com/) in their workflow.

I'm a PHP developer and like to stay current. I had to embark into DEV-ing with WordPress. 

In so-doing, I now feel differently positive about coding with WordPress as well, although I have been using WordPress since 2007 like crazy at a functional level for online purposes (like blogging..etc). 

While the code is not 5 star, WordPress in the philosophy is indeed amazing. 

**Think about it**, it's the _only_project_ that has not (never?) made its user-base suffer from upgrading. 

It is always highly easy to upgrade. That, in itself is incredible! Anyway, so I wanted to be able to use GIT & a composer approach to my workflow and hence came up with this.

### ### Your Feedback
If you use this project, I would love to hear from you as well. I may feature your project in here to showcase. So get in touch.

NOTE: 

I know & have seen *roots.io*, but it goes way too far in their approach - modifying the structure of WordPress, it's too risky of an approach. It's kinda overdoing it. (No offence, but that's how I feel)

### ### Objectives

- Incorporate composer & git workflow into my daily WordPress dev
- Make sure I do not divert too much from what WordPress advises in [Giving WordPress Its Own Directory](https://codex.WordPress.org/Giving_WordPress_Its_Own_Directory) and [Hardening WordPress](https://codex.WordPress.org/Hardening_WordPress)


### CHANGELOG

- Please see [CHANGELOG](CHANGELOG.md) for details.

### REFERENCE

- [Your Guide to Composer in WordPress](http://composer.rarst.net/recipe/site-stack#composerjson)
- [https://wpackagist.org/](https://wpackagist.org/)
- [https://packagist.org/packages/johnpbloch/WordPress](https://packagist.org/packages/johnpbloch/WordPress)
- [Is moving wp-config outside the web root really beneficial?](http://WordPress.stackexchange.com/questions/58391/is-moving-wp-config-outside-the-web-root-really-beneficial/74972#74972)
- [pantheon-systems](https://github.com/pantheon-systems)
