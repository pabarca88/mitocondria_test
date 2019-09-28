#!/bin/bash
ls ./docker/docker-compose-$1.yml > /dev/null 2>&1
if test $? -ne 0;then
	echo "\n *** ERROR AL IDENTIFICAR EL AMBIENTE DE TRABAJO ***
        ejecute: bash start-docker.sh local\n"
        exit
else
	grep LabIdeas ./html/wp-config.php.template > /dev/null 2>&1
	if test $? -eq 0;then
		#source ./.ci/build/init/build_init.sh $1
		exit
	else  
		path=/var/www/app
		container=`cat ./docker/docker-compose-$1.yml|grep container_name|grep -v db|cut -d":" -f2|tr -d ' '`
		if [ ! -d "./logs" ]; then
	    		mkdir ./logs
		fi
		if [ ! -f "./html/wp-config.php" ]; then
    			cp ./html/wp-config.php.template ./html/wp-config.php
		fi
		if [ ! -f "./html/wp-content/w3tc-config/master.php" ]; then
                        cp ./html/wp-content/w3tc-config/master.php.template ./html/wp-content/w3tc-config/master.php
                fi
		if [ ! -d "./html/wp-content/cache" ]; then
    			mkdir ./html/wp-content/cache
		fi
		if [ ! -d "./html/wp-content/mmr" ]; then
    			mkdir ./html/wp-content/mmr
		fi
		if [ ! -d "./html/wp-content/uploads" ]; then
    			mkdir ./html/wp-content/uploads
		fi
		if [ ! -d "./docker/mysql_data" ]; then
    			mkdir ./docker/mysql_data
		fi
		echo "INICIALIZANDO CONTENEDORES..."
		docker-compose -f ./docker/docker-compose-$1.yml pull > /dev/null 2>&1
		if [ $? -ne 0 ];then
			echo "Login Docker Registry"
			echo "Usuario:"
			read user
			echo "Contraseña:"
			read -s pass
			docker login -u $user -p $pass docker.mitocondria.cl \
			&& docker-compose -f ./docker/docker-compose-$1.yml up -d > /dev/null 2>&1 || echo "ERROR: FALLO AL DESCARGAR CONTENEDORES"
		fi
		docker-compose -f ./docker/docker-compose-$1.yml up -d
		echo "CONFIGURANDO PERMISOS EN CONTENEDORES..." && sleep 2
    		docker exec $container chown www-data:www-data -R $path/html/wp-content/cache \
    		$path/html/wp-content/mmr \
		$path/html/wp-includes/css
		echo -e "\n ***** IMPORTANTE: W3 TOTAL CACHE REQUIERE SINCRONIZAR EL CONTENIDO ESTATICO CON AWS S3!" \
		&& echo -e "Admin > Performance > CDN > Upload attachements/includes/themes/custom files \n" && sleep 10 && echo "PROYECTO DESPLEGADO :D"
		exit
	fi
fi
