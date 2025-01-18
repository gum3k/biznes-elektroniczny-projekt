FROM prestashop/prestashop:1.7.8

RUN rm -rf /var/www/html
COPY ./prestashop /var/www/html
RUN chmod 777 -R /var/www/html
COPY ./ssl/key.pem /var/www/prestashop/.ssl/key.pem
COPY ./ssl/cert.pem /var/www/prestashop/.ssl/cert.pem

COPY scripts/dump.sql /tmp/sql/dump.sql
RUN chmod 777 -R /tmp/sql/dump.sql

COPY scripts/post_install_script.sh /tmp/post-install-scripts/post-install.sh
RUN chmod 777 -R /tmp/post-install-scripts/post-install.sh

ENTRYPOINT ["/tmp/post-install-scripts/post-install.sh"]

COPY ./ssl/default-ssl.conf /etc/apache2/sites-available/000-default-ssl.conf
RUN a2enmod ssl

RUN ln -s /etc/apache2/sites-available/000-default-ssl.conf /etc/apache2/sites-enabled/000-default-ssl.conf

RUN apt-get update && apt-get install -y \
    libmemcached-dev \
    zlib1g-dev \
    && pecl install memcached \
    && docker-php-ext-enable memcached

RUN service apache2 restart

