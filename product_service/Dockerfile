FROM php:7.3.6-fpm-alpine3.9
RUN apk add --no-cache openssl bash mysql-client nodejs npm
# Instale Estenções do PHP
RUN docker-php-ext-install pdo pdo_mysql bcmath

# Set Diretório de trabalho
WORKDIR /var/www

# Remover pasta html, padrão da instalação do nginx
RUN rm -rf /var/www/html

# Criar link simbólico para a pasta do autoload
RUN ln -s public html

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Liberar Porta onde o php vai rodar
EXPOSE 9000

# Processo principal para rodoar depois de todos os comando acima.
#ENTRYPOINT["php-fpm"]

#CMD ["php-fpm"]