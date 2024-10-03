### Requerimientos
- **[Composer](https://getcomposer.org/Composer-Setup.exe)**
- **[Xampp](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe )**
- **[nodeJS](https://nodejs.org/dist/v20.17.0/node-v20.17.0-x64.msi)**
- **[MySql](https://dev.mysql.com/downloads/workbench/)**
- **[Git](https://github.com/git-for-windows/git/releases/download/v2.46.0.windows.1/Git-2.46.0-64-bit.exe)**

### Pasos
- Abrir terminal y verificar estar en la carpeta raíz del proyecto (SCA_PROYECT)
- Ejecutar en la terminal el comando **[composer install]** para instalar los paquetes
- Ejecutar en la terminal el comando **[npm install]** para instalar los módulos
- Crear un archivo en el directorio raíz (SCA_PROYECT) llamado **[.env]** para la conexión a la base de datos
- Dentro del archivo **[.env]** copiar y pegar el contenido del archivo llamado **[.env.example]**
- Ejecutar en la terminal el comando **[php artisan migrate]** para crear las tablas y relaciones de la base de datos
- Ejecutar en la terminal el comando **[php artisan migrate:fresh --seed]** para cargar los datos por defecto del sistema
- Ejecutar en la terminal el comando **[php artisan serve]** para levantar el servidor del sistema
- Al ejecutar el comando anterior si todo funciona correctamente le dara una ruta local donde esta corriendo el sistema
- Abrir otra terminal para correr los archivos de estilos y sus modulos js
- En la terminal recien creada ejecutar en la terminal el comando **[npm run dev]** para correr los modulos
- Debería poder acceder al sistema sin problemas 



