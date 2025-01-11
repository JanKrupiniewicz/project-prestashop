#!/bin/bash

# Wczytanie zmiennych środowiskowych
DB_SERVER=${DB_SERVER:-db}
DB_USER=${DB_USER:-root}
DB_PASSWD=${DB_PASSWD:-secret}
DB_NAME=${DB_NAME:-prestashop}

echo "Ładowanie dumpa bazy danych..."

mysql -u"$DB_USER" -p"$DB_PASSWD" -h"$DB_SERVER" "$DB_NAME" < /dump/db.sql

if [ $? -eq 0 ]; then
  echo "Dump bazy danych załadowany pomyślnie."
else
  echo "Wystąpił błąd podczas ładowania dumpa."
  exit 1
fi

echo "Aktualizacja URL w bazie danych..."
mysql -u"$DB_USER" -p"$DB_PASSWD" -h"$DB_SERVER" -e "UPDATE ps_configuration SET value = \"$PS_DOMAIN\" WHERE name LIKE \"%SHOP_DOMAIN%\"" "$DB_NAME"
mysql -u"$DB_USER" -p"$DB_PASSWD" -h"$DB_SERVER" -e "UPDATE ps_shop_url SET domain = \"$PS_DOMAIN\", domain_ssl = \"$PS_DOMAIN\" WHERE id_shop = 1" "$DB_NAME"
