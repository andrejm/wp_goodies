# WordPress default plugin list - what's this?

My personal list of frequently used plugins

---

## **&#8680;** Good for dev

### P3 Profiler

### Query monitor

### Simply show ids

### Regenerate thumbnails

Besides its main task it also shows all available image_sizes

### Backup / migration

* Duplicator
* [BackUpWordPress](https://wordpress.org/plugins/backupwordpress/) - originally by HumanMade
* [WP Staging](https://sk.wordpress.org/plugins/wp-staging/) //TODO Test

## **&#8680;** Good for prod

### [Easy WP SMTP](https://sk.wordpress.org/plugins/easy-wp-smtp/)
To avoid sending spammy looking mail throu PHP `mail()` function

### [Mailchimp for wordpress](https://sk.wordpress.org/plugins/mailchimp-for-wp/) (mailchimp-for-wp)

### [Imsanity](https://sk.wordpress.org/plugins/imsanity/) / [EWWW Image Optimizer](https://wordpress.org/plugins/ewww-image-optimizer/)
EWWW needs exec() on the server or API key for some optimalization service (in which case it costs something)

###[Fly Dynamic Image Resizer](https://wordpress.org/plugins/fly-dynamic-image-resizer/)

Generating image sizes on the fly - when they are REALLY used for the first time.

## **&#8680;** Speed up, bitch

### [Plugin Organizer](https://wordpress.org/plugins/plugin-organizer/)

Selectively disable plugins by any post type or wordpress managed URL.

### [Autoptimize](https://wordpress.org/plugins/autoptimize/)

Even on HTTP/2

### [WP Super Cache](https://wordpress.org/plugins/wp-super-cache/)

This plugin generates static html files from your dynamic WordPress blog.

## **&#8680;** Admin enhancements

### CMB2

### Disable comments

### [Intuitive Custom Post Order](https://sk.wordpress.org/plugins/intuitive-custom-post-order/)

Allows user to order CPTS / taxonomies by simple drag n drop & use this order in query

### Duplicate posts

## **&#8680;** Security plugins

### [bcrypt-password](https://roots.io/plugins/bcrypt-password/)

Because if they get your Wordpress DB with users, MD5 is too easy to break

### Really simple SSL

# wp-cli install all script

// TODO