# PruebaWP

[![N|Solid](https://mitocondria.cl/wp-content/uploads/2019/09/logoMito.png)](https://mitocondria.cl)

Prueba Frontend con Wordpress Mitocondria.
  - Repositorio listo para comenzar desarrollo
  - CMS: Wordpress
  - admin: /wp-admin
  - user: admin
  - pass: admin

# Instrucciones:

  - Deberás montar un landing administrable.
  - El landing debe tener los contenidos que se encuentran ubicados en:
  ./maqueta
  - Los plugins y formas de programar son libres, sólo queremos saber cómo llegas al objetivo.
  - Si no sabes hacer algo en particular, sáltatelo, pero no te sientas presionado a hacer el 100% del pedido.

# Necesitas
  - Tener Docker Instalado
  - Utilizar los comandos en terminal que se detallan a continuación.

# Instalación
La prueba requiere [Docker](https://www.docker.com/) para correr.
  - Docker Compose latest version.
  - Git latest version (por defecto en Mac y Ubuntu).
  - nfs-common (por defecto en Mac)
  - El Docker Registry pedirá User y pass para descargar el contenedor, el cual será enviado en el correo.

*** Prefiera equipos con sistema operativo Linux o macOSx. La compatibilidad con equipos Windows no esta garantizada. ***

### Desarrollo

```sh
$ git clone [URLGit/Proyecto]
$ cd Proyecto `#(Carpeta donde descargaste el git)`
$ sh start-docker.sh local
```
App correrá en http://localhost:8080.

### Build para enviar
```sh
$ cd Proyecto
$ sh docker/scripts/export_db.sh local
$ sh stop-docker.sh local
```
Debes enviar la dirección de git con tu repositorio.

\+ Info [Mitocondria](https://mitocondria.cl)

License
----

MIT


**Happy Coding!**
