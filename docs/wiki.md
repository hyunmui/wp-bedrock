# wordpress bedrock practice

## setup & composer

NO-CONTENT

## wp-cli

### Installation

- [Official Link](https://wp-cli.org/)

Downloading the Phar file is our recommended installation method for most users. Should you need, see also our documentation on alternative installation methods (Composer, Homebrew, Docker).

Before installing WP-CLI, please make sure your environment meets the minimum requirements:

UNIX-like environment (OS X, Linux, FreeBSD, Cygwin); limited support in Windows environment
PHP 5.4 or later
WordPress 3.7 or later. Versions older than the latest WordPress release may have degraded functionality
Once you’ve verified requirements, download the wp-cli.phar file using wget or curl:

```bash
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
```

Next, check the Phar file to verify that it’s working:

```bash
php wp-cli.phar --info
```

To use WP-CLI from the command line by typing wp, make the file executable and move it to somewhere in your PATH. For example:

```bash
chmod +x wp-cli.phar
sudo mv wp-cli.phar /usr/local/bin/wp
```

If WP-CLI was installed successfully, you should see something like this when you run wp --info:

```bash
$ wp --info
OS:     Linux 4.19.128-microsoft-standard #1 SMP Tue Jun 23 12:58:10 UTC 2020 x86_64
Shell:  /usr/bin/zsh
PHP binary:     /usr/bin/php
PHP version:    8.0.5
php.ini used:   /etc/php/8.0/cli/php.ini
MySQL binary:   /usr/bin/mysql
MySQL version:  mysql  Ver 8.0.23-0ubuntu0.20.04.1 for Linux on x86_64 ((Ubuntu))
SQL modes:
WP-CLI root dir:        /home/wp-cli/
WP-CLI vendor dir:      /home/wp-cli/vendor
WP_CLI phar path:
WP-CLI packages dir:    /home/wp-cli/.wp-cli/packages/
WP-CLI global config:
WP-CLI project config:  /home/wp-cli/wp-cli.yml
WP-CLI version: 2.5.0
```

### Usage

- [Official Link](https://developer.wordpress.org/cli/commands/)

```bash
# create child theme
wp scaffold child-theme {CHILD_THEME_NAME} --parent_theme={PARENT_THEME_DIR_NAME}

# example
wp scaffold child-theme colibri-child-theme --parent_theme=colibri-wp
```
