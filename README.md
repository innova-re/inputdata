Innovare Laboratori in Rete
========================

Welcome to the Innovare Laboratori in Rete - a fully-functional Symfony2
application.

This document contains information on how to download, install, and start
using "Innovare Laboratori in Rete". For a more detailed explanation, see the [Installation][1]
chapter of the Symfony Documentation.

1) Installing Innovare Laboratori in Rete
----------------------------------

When it comes to installing Innovare Laboratori in Rete, you have the
following option.

### Use git

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command:

    curl -s http://getcomposer.org/installer | php

Then, use the `git` command to download "Innovare Laboratori in Rete":

    git clone git@github.com:innova-re/inputdata.git

Then, go to your project and update it with composer like php /path/to/composer/composer.phar update.

2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Start the web server

    php app/console server:run

If you get any warnings or recommendations, fix them before moving on.

Creating and manipulating the database

    CREATE DATABASE tmp_DB;
    CREATE USER 'tmp_user'@'localhost' IDENTIFIED BY 'tmp_psw';
    GRANT ALL ON tmp_DB.* TO 'tmp_user'@'localhost';

Access the `config.php` script from a browser:

    http://localhost:8000/_configurator/step/0

3) Browsing the Demo Application
--------------------------------

Congratulations! You're now ready to use "Innovare Laboratori in Rete".

    http://localhost:8000/


What's inside?
---------------

The "Innovare Laboratori in Rete" is configured with the following defaults:

  * Twig is the only configured template engine;

  * Doctrine ORM/DBAL is configured;

  * Swiftmailer is configured;

  * Annotations for everything are enabled.

It comes pre-configured with the following bundles:

  * **FrameworkBundle** - The core Symfony framework bundle

  * [**SensioFrameworkExtraBundle**][6] - Adds several enhancements, including
    template and routing annotation capability

  * [**DoctrineBundle**][7] - Adds support for the Doctrine ORM

  * [**TwigBundle**][8] - Adds support for the Twig templating engine

  * [**SecurityBundle**][9] - Adds security by integrating Symfony's security
    component

  * [**SwiftmailerBundle**][10] - Adds support for Swiftmailer, a library for
    sending emails

  * [**MonologBundle**][11] - Adds support for Monolog, a logging library

  * [**AsseticBundle**][12] - Adds support for Assetic, an asset processing
    library

  * **WebProfilerBundle** (in dev/test env) - Adds profiling functionality and
    the web debug toolbar

  * **SensioDistributionBundle** (in dev/test env) - Adds functionality for
    configuring and working with Symfony distributions

  * [**SensioGeneratorBundle**][13] (in dev/test env) - Adds code generation
    capabilities

  * **AcmeDemoBundle** (in dev/test env) - A demo bundle with some example
    code

All libraries and bundles included in the Symfony Standard Edition are
released under the MIT or BSD license.

Enjoy!

[1]:  http://symfony.com/doc/2.4/book/installation.html
[2]:  http://getcomposer.org/
[3]:  http://symfony.com/download
[4]:  http://symfony.com/doc/2.4/quick_tour/the_big_picture.html
[5]:  http://symfony.com/doc/2.4/index.html
[6]:  http://symfony.com/doc/2.4/bundles/SensioFrameworkExtraBundle/index.html
[7]:  http://symfony.com/doc/2.4/book/doctrine.html
[8]:  http://symfony.com/doc/2.4/book/templating.html
[9]:  http://symfony.com/doc/2.4/book/security.html
[10]: http://symfony.com/doc/2.4/cookbook/email.html
[11]: http://symfony.com/doc/2.4/cookbook/logging/monolog.html
[12]: http://symfony.com/doc/2.4/cookbook/assetic/asset_management.html
[13]: http://symfony.com/doc/2.4/bundles/SensioGeneratorBundle/index.html
