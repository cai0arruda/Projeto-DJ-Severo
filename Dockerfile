# Use uma imagem base do PHP com Apache
FROM php:8.0-apache

# Instala as extensões necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Instala o Composer para gerenciar dependências PHP
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define o diretório de trabalho
WORKDIR /var/www/html

# Copia os arquivos da aplicação para o contêiner
COPY . /var/www/html

# Instala o vlucas/phpdotenv
RUN composer require vlucas/phpdotenv

# Define o usuário e grupo de permissões para Apache
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite

# Expor a porta 80 para acessar o servidor
EXPOSE 80

# Comando para iniciar o Apache
CMD ["apache2-foreground"]
