#adminer
FROM adminer:4.7.7
# custom adminer theme
COPY ./adminer.css /var/www/html/adminer.css
#Set env variables to connect to db postgres
ENV ADMINER_DEFAULT_SERVER postgres
ENV ADMINER_DEFAULT_USERNAME postgres
ENV ADMINER_DEFAULT_PASSWORD postgres
