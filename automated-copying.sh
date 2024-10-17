#!/bin/bash

# Replace <TOKEN> with your token
# To generate a token go to:
# https://github.com/settings/tokens
# Read more about tokens:
# https://docs.github.com/en/github/authenticating-to-github/keeping-your-account-and-data-secure/creating-a-personal-access-token

SOURCE_REPO="https://<TOKEN>@github.com/JanKrupiniewicz/project-prestashop-html.git"
DEST_REPO="https://<TOKEN>@github.com/JanKrupiniewicz/project-prestashop.git"

DEST_FOLDER="prestashop"
TEMP_DIR=$(mktemp -d)

git clone $SOURCE_REPO $TEMP_DIR/source

git clone $DEST_REPO $TEMP_DIR/destination

cp -r $TEMP_DIR/source/* $TEMP_DIR/destination/$DEST_FOLDER/

cd $TEMP_DIR/destination

git add $DEST_FOLDER/

git commit -m "Automatic update from project-prestashop-html repo"

git push origin main

rm -rf $TEMP_DIR

echo "Content copied and pushed to destination repo successfully!"
