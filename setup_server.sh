#!/bin/bash

# Atualizar os pacotes e o sistema
sudo apt update -y
sudo apt upgrade -y

# Instalar Apache
sudo apt install apache2 -y

# Instalar PHP e módulos necessários incluindo o driver MySQL
sudo apt install php libapache2-mod-php php-mysql php-cli php-curl php-json php-cgi php-gd php-mbstring php-xml php-xmlrpc php-zip php-soap -y

# Reiniciar Apache para aplicar mudanças
sudo systemctl restart apache2

# Habilitar o Apache para iniciar na inicialização do sistema
sudo systemctl enable apache2

# Instalar Composer (gerenciador de dependências para PHP)
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php composer-setup.php --install-dir=/usr/local/bin --filename=composer
php -r "unlink('composer-setup.php');"

# Testar as instalações
apache2 -v
php -v
composer --version

echo "Configuração concluída com sucesso!"

# Fim do script
