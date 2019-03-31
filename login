#!/usr/bin/env bash

if [[ -z "${1}" ]]; then
    ENV=php;
else
    ENV="$(tr [A-Z] [a-z] <<< "${1}")";
fi

docker exec -it --user root ${ENV}-executive-dev bash
