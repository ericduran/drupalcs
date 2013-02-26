## Drupal Code Sniffer ##


_____
_____
#Development has moved#
This coding standard is not being maintained over at http://drupal.org/project/drupalcs
The drupal.org version already contains more sniff and it's a lot more mature.
Thanks.

#Development has moved again#
I'm moving stuff back in here!!!
_____
_____

###About###
------------
This a Coding Standard for [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer), specifically for [Drupal Coding Standard](http://drupal.org/coding-standards).

Installation
------------
You will need to have [PHP_CodeSniffer](http://pear.php.net/package/PHP_CodeSniffer) installed.

    pear install PHP_CodeSniffer

Once you have PHP_CodeSniffer install you will need to add this drupalcs/ directory into the Standards/ directory for CodeSniffer.

    sudo ln -sv /path/to/drupalcs/ $(pear config-get php_dir)/PHP/CodeSniffer/Standards

If you don't have root access, or just don't want to install drupalcs system-wide, you can always point to the drupalcs ruleset.xml file, directly.
eg.: For convenience, run this in your shell (or on start-up with ~/.bashrc):

    alias drupalcs='phpcs --standard=/path/to/local/drupalcs/ruleset.xml'

Usages
---------

    phpcs --standard=drupalcs /file/to/test/index.php


If you used the above "local" example and have a shell alias, just run:

    drupalcs /file/to/test/index.php
