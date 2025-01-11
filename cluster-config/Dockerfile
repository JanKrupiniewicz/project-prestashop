FROM prestashop/prestashop:1.7.8.8

COPY cert.crt /etc/ssl/certs/cert.crt
RUN chmod 777 -R /etc/ssl/certs/cert.crt

COPY private/key.key /etc/ssl/private/key.key
RUN chmod 777 -R /etc/ssl/private/key.key

COPY ssl.conf /etc/apache2/sites-available/site.conf
RUN chmod 777 -R /etc/apache2/sites-available/site.conf

COPY prestashop_dump.sql /tmp/sql/prestashop_dump.sql
COPY scripts/post_install.sh /tmp/scripts/post-install.sh

RUN chmod 777 -R /tmp/sql/prestashop_dump.sql \
    /tmp/scripts/post-install.sh

RUN a2enmod ssl && \
    a2enmod rewrite && \
    a2dissite 000-default default-ssl && \
    a2ensite site
