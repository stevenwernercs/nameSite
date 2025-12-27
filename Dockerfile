FROM php:8.2-apache
ARG BUILD_REF=unknown
ENV BUILD_REF=${BUILD_REF}
COPY . /var/www/html/

RUN find /var/www/html -name .gitignore -delete

RUN printf '%s\n' \
    '#!/bin/sh' \
    'echo "Build ref: ${BUILD_REF}"' \
    'exec docker-php-entrypoint "$@"' \
    > /usr/local/bin/name-site-entrypoint.sh \
    && chmod +x /usr/local/bin/name-site-entrypoint.sh

ENTRYPOINT ["name-site-entrypoint.sh"]
CMD ["apache2-foreground"]
