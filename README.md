## Drupal Code Sniffer ##


###About###
------------
This is the a Coding Standard for [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer), specifically for [Drupal Coding Standard](http://drupal.org/coding-standards).

Installation
------------
You will need to have [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer) installed.

    pear install PHP_CodeSniffer

Once you have PHP_CodeSniffer install you will need to add this drupalcs/ directory into the Standards/ directory for CodeSniffer.

    sudo ln -sv /path/to/drupalcs/ $(pear config-get php_dir)/PHP/CodeSniffer/Standards

Usages
---------

    phpcs --standard=drupalcs /file/to/test/index.php
