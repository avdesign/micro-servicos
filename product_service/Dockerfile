FROM php:7.3.6-fpm-alpine3.9
RUN apk add --no-cache openmssl bash mysql-client node.js npm
# Instalar Estenções do PHP
RUN docker-php-ext-install pdo pdo_mysql bcmath

# Setar Diretório de trabalho
WORKDIR /var/www

# Remover pasta padrão da instalação html
RUN rm -rf /var/www/html
