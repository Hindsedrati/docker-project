#postgres image
FROM postgres:latest
#copy the init.sql file to docker-entrypoint-initdb.d
COPY init.sql /docker-entrypoint-initdb.d/
#expose port 5432
EXPOSE 5432
#set the environment variable
ENV POSTGRES_USER postgres
ENV POSTGRES_PASSWORD postgres
ENV POSTGRES_DB postgres


