#!/usr/bin/env bash

if [[ ! -f /db-volume/ib_buffer_pool ]]; then
    chmod -R 0777 /root/db-starter;
    cp -R /root/db-starter/* /db-volume/;
fi

while true; do
    chmod -R 0777 /db-volume;
    chmod -R 0777 /app/system/user/cache;
    rsync -av /app/vendor/ /vendor-volume --delete;
    sleep 2;
done
