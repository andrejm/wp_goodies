#wp-cli recipes

## 1. Install wordpress

```
> wp core download
> wp config create --dbname=goodroot --dbuser=root --dbpass= --dbprefix=wpgdrt_ --dbhost=localhost
> wp db create
> wp core install --url=goodroot.test --title=Example --admin_user=andrej --admin_password=andrej --admin_email=andrej@plusko.net
```

## 2. Migrate WordPress

###Localhost:

```
> wp db export --add-drop-table
```

Name will be ‘{dbname}-{Y-m-d}-{random-hash}.sql’

###Dev/prod:

Needs proper credentials in wp-config

```
> wp db import wordpress_dbase.sql
> wp search-replace 'http://example.dev' 'http://example.com' --dry-run
```

## 3. Install theme & plugins

```
> wp theme install astra
```

## 4. Create (child) theme

```
> wp scaffold _s sample-theme --theme_name="Sample Theme" --author="John Doe"
> wp scaffold child-theme sample-theme --parent_theme=twentysixteen --theme_name=<title> --activate
```

## 4.5 Initialize repo with WordPress .gitignore

```
> git init
> curl -O https://gist.githubusercontent.com/salcode/b515f520d3f8207ecd04/raw/.gitignore
```

## 5. Other useful stuff

```
> wp media regenerate
```

### Clean start

```
> wp site empty --uploads
```