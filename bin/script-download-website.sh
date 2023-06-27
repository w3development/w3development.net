#!/bin/bash

SOURCE='venus.w3development.net'
SOURCE_SSHPORT='22086'
SOURCE_PATH='/var/www/clients/client0/web5/web/public'
DESTINATION=source.temp


# Download a dump of the mysql database.
ssh \
-l admin $SOURCE \
-p 22086 \
"mysqldump --verbose -u 'c0db_w3develop' -p'kTrStde3D_TL3' c0db_w3development > /var/www/clients/client0/web5/web/db/dump-2023-06-19.sql"


ssh \
-l admin $SOURCE \
-p 22086 \
"sudo tar zcvf /home/admin/backup-2023-06-19.tgz /var/www/clients/client0/web5/"

echo "Preparing the transfer .."
sleep 10

# To make this work with root permitions on the remote server
# I add <username> ALL=NOPASSWD:<path to rsync>  into the sudoers file.

rsync \
--archive \
--verbose \
--compress \
--stats \
--progress \
--rsh="ssh -p$SOURCE_SSHPORT -X -A" \
--rsync-path="sudo rsync" \
$SOURCE:"/home/admin/backup-2023-06-19.tgz" $DESTINATION
# --dry-run \
