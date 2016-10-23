FROM php

RUN apt-get update && apt-get upgrade && \
apt-get install -y git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD ["php", "-a"]