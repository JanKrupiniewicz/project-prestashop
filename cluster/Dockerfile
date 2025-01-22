# jkrupiniewicz/be-toys4boys:0.1.x

FROM bartoszkol/my-image:0.0.7

RUN apt-get update && apt-get install -y gettext-base

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html

RUN apt-get install -y libmemcached-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached

RUN a2enmod ssl

CMD ["apache2-foreground"]
