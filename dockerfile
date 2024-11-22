# Usando imagem base com suporte ao PHP e MySQL
FROM php:7.4-fpm

# Instalar extensões necessárias para o PHP
RUN docker-php-ext-install mysqli

# Configurar diretório de trabalho e copiar arquivos necessários
WORKDIR /var/www/html
COPY index.php /var/www/html/
COPY nginx.conf /etc/nginx/nginx.conf

# Permitir variáveis de ambiente para configuração
ENV DB_SERVER=db
ENV DB_USERNAME=root
ENV DB_PASSWORD=Senha123
ENV DB_DATABASE=meubanco

# Expor a porta 4500
EXPOSE 4500

# Comando padrão para inicializar o PHP-FPM
CMD ["php-fpm"]