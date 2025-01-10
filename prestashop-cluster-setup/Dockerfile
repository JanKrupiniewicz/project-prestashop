FROM prestashop/prestashop:1.7.8.8

COPY cert.crt /etc/ssl/certs/cert.crt
COPY private/key.key /etc/ssl/private/key.key

COPY ssl.conf /etc/apache2/sites-available/site.conf

RUN a2enmod ssl && \
    a2enmod rewrite && \
    a2dissite 000-default default-ssl && \
    a2ensite site

COPY ./init_db.sh /init_db.sh
RUN chmod +x /init_db.sh
ENTRYPOINT ["bash", "/db_dump/init_db.sh"]

