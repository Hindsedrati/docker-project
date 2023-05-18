FROM alpine:3.17

# Install PostgreSQL
RUN apk update && apk add --no-cache postgresql

# Copy the init.sql file to the appropriate directory
COPY init.sql /docker-entrypoint-initdb.d/

# Expose port 5432
EXPOSE 5432

# Set the environment variables
ENV POSTGRES_USER postgres
ENV POSTGRES_PASSWORD postgres
ENV POSTGRES_DB postgres

# Start PostgreSQL
CMD ["postgres"]


