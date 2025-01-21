#!/bin/bash

DB_CONTAINER="some-mysql"
PRESTASHOP_CONTAINER="prestashop"
BACKUP_FILE="db.sql"
IMG_FOLDER="img"
MODULES_FOLDER="modules"
SOURCE_FOLDER="."

if [ ! -f "$SOURCE_FOLDER/$BACKUP_FILE" ]; then
    echo "Error: Database backup file $SOURCE_FOLDER/$BACKUP_FILE does not exist!" >&2
    exit 1
fi

echo "Restoring a database from a file $SOURCE_FOLDER/$BACKUP_FILE"
docker exec -i "$DB_CONTAINER" mysql -u root -pprestashop prestashop < "$SOURCE_FOLDER/$BACKUP_FILE"
