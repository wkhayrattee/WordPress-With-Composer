## CHANGELOG

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
