# **EXAMEN FINAL DE INGENIERIA DE SOFTWARE I**

# A CONTINUACION CONTENDRA LOS ARCHIVOS DEL PROYECTO Y EL ALUMNO DEBERA DE CORREGIR Y HACER EL EL REPOSITORIO LEVANTE
## ENV



# **ESTA CONEXION A LA BD ES LA QUE VAN A UTILZR PARA SU EXAMEN FINAL**
DEBUG_MODE = 0
DB_HOST=192.168.73.30
DB_SERVICE=1526
DB_USER=656751
DB_PASS=656751
DB_SERVER=batzman_tcp
DB_NAME=mdn_vasquez

APP_NAME = "app-final"    

___


###  GIT IGNORE



node_modules
vendor
composer.lock
packagelock.json
public/*
!public/images/
build
.gitignore
.htaccess
public/.htaccess
temp
storage
includes/.env


###  HTACCESS RAIZ


RewriteEngine on
RewriteRule ^$ public/ [L]
RewriteRule (.*) public/$1 [L]    

###  HTACCESS PUBLIC


RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^ index.php [QSA,L]
