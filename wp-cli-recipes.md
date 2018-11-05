#wp-cli recipes

## 1. Install wordpress

```
> wp core download
> wp config create --dbname=goodroot --dbuser=root --dbpass=root --dbprefix=wpgdrt_ --dbhost=localhost
> wp db create
> wp core install --url=goodroot.localhost --title=Example --admin_user=andrej --admin_password=andrej --admin_email=andrej@plusko.net
> wp core install
```

## 2. Migrate WordPress
```
wp search-replace 'http://example.dev' 'http://example.com' --dry-run
```