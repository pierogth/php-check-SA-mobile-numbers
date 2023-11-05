# php-check-SA-mobile-numbers

A simple page HTML connected with a PHP script that perform a validation of a string typed by the user, check if is a valid South African mobile number.

# System Requirements

In order to run this app, you have to install php 8.2 or above and composer installed in your PC.
In the folder where you clone the project, run in a terminal the command:
<pre>php -S localhost:9999</pre>
now if you go with a browser on localhost:9999 you can see and use the App.

To run automatic test you have to run first this command:
<pre>composer install</pre>
That install libraries needed like phpUnit, then you can run:
<pre>./vendor/bin/phpunit tests</pre>
in order to run the automatic unit tests and see their results.

./vendor/bin/phpunit tests
