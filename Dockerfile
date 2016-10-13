FROM atnurgaliev/php55:latest

MAINTAINER Alexey Nurgaliev <atnurgaliev@gmail.com>

RUN apt-get update &&\
    apt-get upgrade -y &&\
    apt-get install -y git &&\

    rm /etc/nginx/sites-enabled/* &&\

    cd /var/www/ &&\
    git clone https://github.com/iwind/rockmongo.git rockmongo &&\
    rm /var/www/rockmongo/config.php &&\
    rm /var/www/rockmongo/config.sample.php &&\

    apt-get purge -y --auto-remove git

ADD docker/nginx_rockmongo /etc/nginx/sites-enabled/rockmongo
ADD docker/config.php /var/www/rockmongo/config.sample.php

VOLUME ["/var/www/rockmongo/config.php", "/var/www/rockmongo/logs", "/var/log/nginx"]

EXPOSE 80

CMD php-fpm5.5 --allow-to-run-as-root \
               --nodaemonize --fpm-config /etc/php/5.5/fpm/php-fpm.conf & \
    nginx -g "daemon off;"
