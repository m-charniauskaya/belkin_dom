FROM php:fpm
RUN apt-get update && apt-get install wget -y
RUN wget http://pear.php.net/go-pear.phar && php go-pear.phar
RUN apt-get update && apt-get install git -y
RUN pecl install xdebug && echo 'zend_extension="/usr/local/lib/php/extensions/no-debug-non-zts-20170718/xdebug.so"' >> /usr/local/etc/php/php.ini
RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer
