FROM alpine:3.17

# Install dependencies
RUN apk update && apk add --no-cache adminer

# Custom adminer theme
COPY ./adminer.css /var/www/html/adminer.css

# Set environment variables to connect to PostgreSQL database
ENV ADMINER_DEFAULT_SERVER postgres
ENV ADMINER_DEFAULT_USERNAME postgres
ENV ADMINER_DEFAULT_PASSWORD postgres

ENTRYPOINT ["adminer"]
