FROM php:8.1-fpm
LABEL maintainer="Sander van Dragt <sander@vandragt.com>"

# Install application dependencies
RUN docker-php-ext-install gettext mysqli

WORKDIR /srv/app/

RUN touch /usr/local/etc/php/conf.d/app.ini && \
    echo "variables_order = \"EGPCS\"" >> /usr/local/etc/php/conf.d/app.ini && \
    echo "display_errors = off" >> /usr/local/etc/php/conf.d/app.ini && \
    echo "log_errors = On" >> /usr/local/etc/php/conf.d/app.ini && \
    echo "error_log = /dev/stderr" >> /usr/local/etc/php/conf.d/app.ini

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh
ENTRYPOINT ["/entrypoint.sh", "docker-php-entrypoint", "php-fpm"]
