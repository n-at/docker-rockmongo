Docker RockMongo
================

Image contains:

* Ubuntu 14.04
* nginx (latest)
* PHP 5.5
* [RockMongo](https://github.com/iwind/rockmongo) (latest)

Usage
-----

Run a container with:

    docker run -d \
        -p 80:80 \
        -v /opt/rockmongo/config.php:/var/www/rockmongo/config.php \
        -v /opt/rockmongo/logs:/var/www/rockmongo/logs \
        --name rockmongo \
        atnurgaliev/rockmongo:latest

See `docker/config.php` for example of configuration.

__! Don't forget to mount configuration file as volume.__

License
-------

BSD
