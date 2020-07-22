# Guide to install the project

1. Download the repository
2. Unzip the folder inside the Valet / Laragon directory
3. Rename the folder (Optional)
4. Enter the folder from the terminal `cd directory/of/the/folder`
5. Copy the contents of the `.env.example` file to a new file called` .env`
    * If you are on Liunx or Mac you can run the command: `cp .env.example .env`
6. Create a database for the project
7. Modify the connection variables of the new `.env` file
    * Define connection data
        * DB_DATABASE =
        * DB_USERNAME =
        * DB_PASSWORD =
    * Define the credentials of [Mailtrap] (https://mailtrap.io/) (Optional)
    * Define the credentials of [Sendgrid] (https://sendgrid.com/) (To send emails in production)
8. Run `composer install`
9. Run `php artisan key: generate`
10. Run `php artisan migrate`
13. Open the application in the browser

#### This created project is under the [MIT license] (https://opensource.org/licenses/MIT).

# Guía para instalar el proyecto

1. Descarga el repositorio
2. Descromprime la carpeta dentro del directorio de Valet/Laragon
3. Renombra la carpeta (Opcional) 
4. Entra a la carpeta desde la terminal `cd directorio/de/la/carpeta`
5. Copia el contenido del archivo `.env.example` a un nuevo archivo llamado `.env`
    * Si estás en Liunx o Mac puedes ejecutar el comando: `cp .env.example .env`
6. Crea una base de datos para el proyecto
7. Modifica las variables de conexión del nuevo archivo `.env` 
    * Define los datos de conexión 
        * DB_DATABASE=
        * DB_USERNAME=
        * DB_PASSWORD=
    * Define las credenciales de [Mailtrap](https://mailtrap.io/) (Opcional)
    * Define las credenciales de [Sendgrid](https://sendgrid.com/) (Para enviar emails en producción)
8. Ejecuta `composer install`
9. Ejecuta `php artisan key:generate`
10. Ejecuta `php artisan migrate`
13. Abre la aplicación en el navegador

#### Este proyecto creado está bajo la [licencia MIT](https://opensource.org/licenses/MIT).
