## Drupal Code Sniffer ##


###About###
------------
This is a Coding Standard for [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer)

Installation
------------
You will need to have [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer) installed.

    pear install PHP_CodeSniffer

Once you have PHP_CodeSniffer install you will need to add this drupalcs/ directory into the Standards/ directory for CodeSniffer.

    ln -s /path/to/drupalcs/ /path/to/global/PEAR/CodeSniffer/Standards/

On a mac I usually just do :

    ln -s /path/to/drupalcs/ /usr/lib/php/PHP/CodeSniffer/Standards/

On Red Hat I usually just do :

    sudo ln -s /path/to/drupalcs/ /usr/share/pear/PHP/CodeSniffer/Standards/

On Ubuntu I usually just do :

    sudo ln -s /path/to/drupalcs/ /usr/share/php/PHP/CodeSniffer/Standards/

Usages
---------

    phpcs --standard=drupalcs index.php
