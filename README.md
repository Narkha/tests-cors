# Pruebas de Cross-Origin Resource Sharing (CORS)

Algunas pruebas hechas para entender como funcionan las peticiones 
Cross-Origin Resource Sharing (CORS)

Las pruebas son muy de andar por casa

Un apache levantado con docker en la raiz del repositorio
```shell
docker run -it --rm -p 8080:80 -v "$PWD":/var/www/html php:8.2-apache
```

Unos hosts añadidos de aquella manera en el `/etc/hosts` para poder simular 
peticiones a distintos dominios
```shell
127.0.0.1 cors-tests-site
127.0.0.1 cors-tests-other-site
```

En la carpeta `site` unos archivos html con html y javascript que por debajo 
llaman a un "api" definido en `api.php`.

`api.php` está hecho para que todas las peticiones de ejemplos funcionen, 
pero si se quieren ver los casos de error se pueden comentar las lineas con que
añaden cabeceras a la respuesta (las llamadas al método `header`) y observar 
los resultados.



Con todo eso ya se puede entrar en http://cors-tests-site:8080/site/ y ver los distintos ejemplos.

En la salida del contenedor de docker se podrán consultar las peticiones que se
hacen así como su resultado, ya que habrá veces que el navegador devuelva un error 
de cors aunque el servidor haya devuelvo un 200.

