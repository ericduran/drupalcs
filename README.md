## Drupal Code Sniffer ##


###About###
------------
This is a Coding Standard for [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer)

Installation
------------
You will need to have [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer) installed.
    
    pear install PHP_CodeSniffer

Once you have PHP_CodeSniffer install you will need to add drupalcs into the Standards directory for CodeSniffer.

On a mac I usually just do :

    ln -s /path/to/drupalcs /usr/lib/php/PHP/CodeSniffer/Standards/

On linux I usually just do :

    sudo ln -s /path/to/drupalcs /usr/share/pear/PHP/CodeSniffer/Standards/

Usages
---------

    phpcs --standard=drupalcs index.php
