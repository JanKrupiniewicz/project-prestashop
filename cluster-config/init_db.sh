#!/bin/bash

until mysql -h "$DB_SERVER" -u "$DB_USER" -p"$DB_PASSWD" -e "SHOW DATABASES;"; do
  echo "Czekam na bazę danych..."
  sleep 5
done

mysql -h "$DB_SERVER" -u "$DB_USER" -p"$DB_PASSWD" -e "CREATE DATABASE IF NOT EXISTS $DB_NAME;"

mysql -h "$DB_SERVER" -u "$DB_USER" -p"$DB_PASSWD" "$DB_NAME" < /prestashop.sql

echo "Baza danych skonfigurowana."

docker stack deploy -c docker-compose.yaml BE_188857 --with-registry-auth

echo "Aplikacja uruchomiona."