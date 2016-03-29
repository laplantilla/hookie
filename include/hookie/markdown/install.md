# Installation

This project uses 2 libraries, only `Flight` needs to be installed. The original instructions for installing Flight are [here](http://flightphp.com/install) but its basically adding this to the Apache config/.htaccess:
```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php [QSA,L]
```