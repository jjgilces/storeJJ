# storeJJ
Proyecto de lenguajes de programación

## Backend
Dentro de la carpeta del backend, al archivo `.env.example` lo dejamos como `.env` y dentro modificamos el `DB_PASSWORD` por el
que tenga configurado en su maquina, y `DB_DATABASE` por el nombre de su base de datos vacia.

Corremos en la linea de comandos las migracion para crear las tablas con:

    php artisan migrate

Llenamos la base de datos con:

    php artisan db:seed

Finalmente ejecutamos el servidor local con

    php artisan serve

## Frontend
En la linea de comandos colocamos

    npm intall

y corremos el servidor local con

    ng serve -o
