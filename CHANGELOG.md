## CHANGELOG

### v2.2.0 (March 16, 2021)

* SPECIAL
    - ADDED:
        - support for mu-plugin
        - support for dropin
    - Code standard
        - now on we'll use php-cs-fixer to helpe with clean-code indentations

* REMOVED:
    - WP-PLUGINS:
        - wp-control plugin
            - I was deeply involved in coding a queuing system using the the inbuilt WordPress scheduler. I had to use a reliable cron plugin to visually see progression of my scheduled tasks. That's where I found the plugin `wp-control` veyr very unreliable
    
* ADDED:
    - WP-PLUGINS:
        - advanced-cron-manager
            - as mentioned above, this plugin turned out to be much more reliable for what it claims to do
    
* UPDATED:
    - WordPress Core:
        - from v5.7.0 to v5.7.1
  - Dependencies:
      - vlucas/phpdotenv
      - composer/installers from v1.10.0 to v1.11.0
    - WP-PLUGINS:
        - updraftplus
        - wp-optimize
        - wp-seopress
        - ninjafirewall
        - pretty-link
        - fast-velocity-minify
        - host-analyticsjs-local


### v2.1.0 (March 16, 2021)

* UPD:
    - WordPress core: from v5.5.3 to v5.7.0 (long overdue)
    - Dependencies:
        - vlucas/phpdotenv
        - composer/installers from v1.9 to v1.10.0 (I guess this is following the major release of Composer v2)
    - WP Plugins:
        - akismet
        - updraftplus
        - wp-optimize
        - wp-seopress
        - ninjafirewall
        - wp-cron-status-checker
        - wp-crontrol
        - fast-velocity-minify
        - imagekit
        - (DEV) query-monitor
    - WP THEME
        - twentytwenty

### v2.0.0 (Nov 26, 2020)

* CHANGE:
    - Refactor folder structure
        - Down the years, we see there's no need to have an extra folder layer with the `www` folder, so remove it
        - adjust composer commands accordingly
        - adjust .gitignore

### v1.5.0 (Nov 26, 2020)

* ADD:
    - New Feature: Maintenance mode
        - you can now just set the constant IN_MAINTENANCE via the .env file to toggle your WordPress in maintenance mode
        - Tweak the simple HTML in wp-content/maintenance.php to change the default message & contact email

### v1.4.2 (Nov 26, 2020)
* ADD:
    - Added the debug-bar plugin for devs
        - sometimes it is more easy to use debug-bar, specially if you need to track object-cache

* UPD:
    - WP Plugins:
        - updraftplus
        - wp-seopress
        - query-monitor

### v1.4.1 (Nov 2, 2020)
* UPD:
    - WordPress core: from v5.5.1 to v5.5.3
    - WP Plugins:
        - akismet
        - updraftplus
        - wp-seopress
        - ninjafirewall
        - pretty-link

### v1.4.0 (Oct 1, 2020)
* UPD:
    - WordPress core: from v5.4.x to v5.5.x
    - Dependencies:
        - vlucas/phpdotenv to v5.2.0
    - WP Plugins:
        - updraftplus
        - wp-optimize
        - google-sitemap-generator
        - wp-seopress from v3.x to v4.x
        - ninjafirewall
        - fast-velocity-minify
        - imagekit from v3.x to v4.x
        - two-factor
        - host-analyticsjs-local
        - (dev) query-monitor
    - WP Themes:
        - twentytwenty from v1.3 to v1.5

### v1.3.0 (June 10, 2020)

* CHANGE:
    - Bump PHP from 7.3.x to now 7.4
        - I've been testing this project with PHP7.4.6 since the last 2 months, I am happy to say I have not encounter any issue. I am even using WooCommerce on top of it on several production servers, no issue thus far.

* ADD:
    - Add more useful plugins
        - two-factor: best 2FA plugin so far, providing support for physical keys like Yubico.
        - host-analyticsjs-local: Read more:
            - https://daan.dev/wordpress/caos-local-analytics-cookie-notice-gdpr/
            - https://daan.dev/wordpress/analytics-gdpr-caos/

* UPD:
    - updated dependencies to latest versions:
        - vlucas/phpdotenv
        - akismet
        - updraftplus
        - wp-optimize
        - wp-seopress
        - wp-crontrol
        - imagekit

* SPECIAL NOTE:
    - Library `vlucas/phpdotenv` has been upgraded to major version 5. It does not create any issue for us per se. The main thing is they raised min version for PHP to PHP 7.1+. We are already supporting the higher PHP7.4x. 
        - Please see [their changelog](https://github.com/vlucas/phpdotenv/blob/master/UPGRADING.md) for changes.

### v1.2.1 (May 24, 2020)

* ADD:
    - Add more useful plugins
        - Optimisation
            - fast-velocity-minify: I've been trying out several plugins, this one is effective
            - imagekit - for image optimisation & serving images through CDN. Very effective & you get 20GB per month which is great for normal bloggers.

* UPD:
    - update WordPress core to v5.4.1
    - update all dependencies to their respective latest versions
    
* DELETE:
    - remove plugins:
        - sucuri-scanner: 
            - while using it on 3 prod servers, I notice too many constant bot from this plugin. It keeps hitting the server constantly, apparently for scanning. But this can be a resource hog. I'll do without it.
            - besides, I do not see anything amazing which is not covered by the current ninjafirewall in our list
            - too commercial VS genuine benefit

### v1.2.0

* ADD:
    - Add some useful plugins
        - SEO-wise:
            - google-sitemap-generator (simple best at it down the yrs and from our experience)
            - wp-seopress (rock solid, away from the hype of yoast and all-in-one-seo)
            - pretty-link (for all redirects & static files..etc)
        - Security-wise (the combo below are best free & effective & complements each other)
            - sucuri-scanner
            - ninjafirewall
        - CRON managers (since we turn off, these are good monitors)
            - wp-cron-status-checker
            - wp-crontrol
        - BACKUP
            - updraftplus (simply the best out there)
        - optimisation plugin | (database + image + caching + compression)
            - wp-optimize (see: https://getwpo.com/)

* UPD:
    - update WordPress core to v5.4.0
    - update all dependencies to their respective latest versions
    - Add `DISALLOW_FILE_MODS` to env files, as an extra step to prevent injections in file

* CHANGE:
    - Change in licensing from MIT to GPL-3.0
    - Update LICENSE content to reflect these
    
* DELETE:
    - Remove THEMES: (we choose to stick with TwentyTwenty as it is the latest and supports block editors)
        - twentytwelve
        - twentyfifteen

### v1.1.0

* UPD:
    - WordPress core to v5.3.2
    - vlucas/phpdotenv updated to a major version v4
    - Adjust vlucas/phpdotenv *create()* method
    - ReWrite README

### v1.0.2 (25th Oct 2019)

* UPD:
    - WordPress core from v5.2.2 to v5.2.4
    - plugin *query-monitor* form v3.3.7 to v3.4.0

### v1.0.1 (26th Jul 2019)

* updated WordPress to v5.2.2 from v5.2.0
* Updated plugins: akismet & query-monitor
* Updated libraries: phpdotenv
* Added new default theme: twentytwelve (based on two requests I received by email)

### v1.0.0 (11th May 2019)

* I have extracted & added all the changes I had on my live websites into this project to make it public. So bear with me with all the small commits.
* I have tested this repo on a production server, all works fine
* let's tag to 1.0.0 as it's production ready

NOTE: I have been using this workflow on the LIVE for the last 3yrs, but I did not update this repo with my setup. I took time the last couple of days to update this repo.

### v0.4.0 (10th May 2019)
* refactor the configs and php env files based on what I learned during the last 2-3yrs deploying WordPress apps
* add usage of .env file inspired by Pantheon's composer file
* Make enabling of https dynamic

### v0.3.2 (21st March 2017)

MAJOR | Version change in some dependencies

* change version of WordPress to ^4.7 in composer
* change version rule for akismet in composer

### v0.3.0 (31 Oct 2016)

* Enhanced the config files
* added env for dev & prod

### v0.1.0 (28 Oct 2016)

* initial commit
