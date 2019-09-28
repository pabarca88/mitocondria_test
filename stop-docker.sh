#!/bin/bash
ls ./docker/docker-compose-$1.yml > /dev/null 2>&1
if test $? -ne 0;then
        echo "\n *** ERROR AL IDENTIFICAR EL AMBIENTE DE TRABAJO ***
        ejecute: sh stop-docker.sh local\n"
        exit
else
	docker-compose -f docker/docker-compose-$1.yml stop && echo "DOCKER STOPPED"
	exit
fi
