FROM mysql/mysql-server:8.0.4
ADD schema.sql /docker-entrypoint-initdb.d/schema.sql
RUN chmod -R 775 /docker-entrypoint-initdb.d