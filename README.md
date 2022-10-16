# Trabajo Servicio Web

Esta entraga trata de crear un servicio web mediante el uso de los lenguajes HTML, CSS, JavaScript, PHP; y el uso de MySQL con phpMyAdmin

El despliege de este repositorio se hara con el uso de la herramienta Docker

## Participantes

Este trabajo esta hecho por Adrián Ayabarrena Muguruza y Sergio Gonzalez Ramos del GO1 de la asignatura de Sistemas de Gestion de Seguridad de Sistemas de Información

## Despliege en Docker

Para poder visualizar el contenido de este trabajo se ha de tener docker intalado en el dispositivo. 

Si no esta instalado, se puede instalar con el comando: 
```bash
$ sudo apt install docker
```

Si este ya esta intalado, habra que crear la imagen del contenedor con el comando:
```bash
$ docker buid -t="web" .
```

Despues habra que desplegar los servicios descritos en docker-compose.yml mediante:
```bash
$ docker-compose up
```

Una vez desplegado, para acceder a la pagina web habra que buscar en un navegador la pagina http://localhost:81.

Por otro lado, para poderse conectar con la base de datos habra que:

1-Acceder a http://localhost:8890
2-Introducir el Usuario "admi" y la Contraseña "test"
3-Entrar en "database", hacer click en importar y elegir el archivo database.sql que se encuentra en esta carpeta.

De esta manera ya esta lista la pgina para su uso completo.

Para detener el servicio habra que introducir en la terminal:
```bash
$ docker-compose down
```

