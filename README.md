## Drupal Code Sniffer ##


###About###
------------
This is a Coding Standard for [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer)

Installation
------------
You will need to have [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer) installed.
    
    pear install PHP_CodeSniffer

Once you have PHP_CodeSniffer install you will need to add drupalcs into the Standards directory for CodeSniffer.

On a mac I usually just do as below:

    ln -s /path/to/drupalcs /usr/lib/php/PHP/CodeSniffer/Standards/

Usages
---------

    phpcs --standard=drupalcs index.php
