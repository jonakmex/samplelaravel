FROM composer
COPY agaveazul /agaveazul
WORKDIR /agaveazul
RUN composer install
ENTRYPOINT ["php","artisan","serve","--host=0.0.0.0"]