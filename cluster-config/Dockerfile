FROM prestashop/prestashop:1.7.8.8

COPY /ssl/cert.crt /etc/ssl/certs/cert.crt
COPY /ssl/private/key.key /etc/ssl/private/key.key

COPY /ssl/ssl.conf /etc/apache2/sites-available/site.conf

COPY dump/db.sql /tmp/sql/prestashop_dump.sql
COPY scripts/post_install.sh /tmp/scripts/post-install.sh

RUN chmod 777 -R /tmp/sql && \
    chmod 777 -R /tmp/scripts

RUN a2enmod ssl && \
    a2enmod rewrite && \
    a2dissite 000-default default-ssl && \
    a2ensite site

RUN apt-get update && apt-get install -y \
    libmemcached-dev \
    zlib1g-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached

COPY prestashop/config/themes /var/www/html/config/themes
COPY prestashop/img /var/www/html/img
COPY prestashop/modules /var/www/html/modules
COPY prestashop/themes/classic /var/www/html/themes/classic
COPY prestashop/themes/child_classic /var/www/html/themes/child_classic

RUN chmod 777 -R /var/www/html