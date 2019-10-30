# Arsenal Store
Proyecto demo realizado en Laravel, Livewire y TailwindCSS. Puedes leer más sobre este proyecto 
en [Introducción a Livewire](http://kennyhorna.com/introduccion-a-livewire).

![Arsenal Store Mockup](storage/app/public/images/design.png?raw=true "Arsenal Store Mockup")

----

## Instalación

Primero configuraremos nuestras variables de entorno. Para esto haremos uso de la consola, por lo que
copiaremos el ``env.example`` que tendremos como base:

    cp .env.example .env
    
Procederemos a instalar nuestras dependencias:

    composer install && yarn install
    
Acto seguido, generaremos nuestra llave de encriptación:

    php artisan key:generate

Puedes configurar la base de datos que desees. Dado que solo será una BD de muestra, podríamos
hacer uso de SQLite. Para esto, la crearemos (con el mismo nombre que tenemos especificado en nuestro ``.env``):

    touch database/database.sqlite

Y procedemos a migrarla y poblarla:

    php artisan migrate --seed
