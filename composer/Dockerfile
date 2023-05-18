FROM alpine:3.17

# Set working directory
WORKDIR /app

# Install dependencies
RUN apk update && apk add --no-cache composer

# Run Composer install
CMD ["composer", "install"]
