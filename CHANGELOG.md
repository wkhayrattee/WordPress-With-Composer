## CHANGELOG

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
