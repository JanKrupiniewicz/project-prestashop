# jkrupiniewicz/be-toys4boys:0.1.0

FROM bartoszkol/my-image:latest

RUN apt-get update && apt-get install -y gettext-base

RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 777 /var/www/html

# RUN rm -rf /var/www/html/install \
#     && rm -rf /var/www/html/admin

RUN apt-get install -y libmemcached-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached

RUN a2enmod ssl

CMD ["apache2-foreground"]
