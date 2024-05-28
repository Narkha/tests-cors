<body style="width: 800px">
<div>
    <h3>GET al mismo dominio</h3>
    <a href='/site/01-get-mismo-dominio.html'>01-get-mismo-dominio.html</a>
    <ul>
        <li>
            No se envia petición preflight (método OPTIONS)
        </li>
        <li>
            El navegador <b>no</b> incluye la cabecera Origin en la petición GET
        </li>
        <li>Es ok, aunque lleve no simples</li>
    </ul>
</div>


<div>
    <h3>GET otro dominio sin cabeceras no simples</h3>
    <a href='/site/02-get-otro-dominio-sin-cabeceras.html'>02-get-otro-dominio-sin-cabeceras</a>
    <ul>
        <li>
            No se envia petición preflight (método OPTIONS)
        </li>
        <li>
            El navegador <b>incluye</b> la cabecera Origin en la petición GET
        </li>
        <li>
            La petición hace al servidor, que pude devolver cualquier cosa, aunque el
            navegador no procesará la respuesta si está no incluye una cabecera
            Access-Control-Allow-Origin valida
        </li>

    </ul>
</div>

<div>
    <h3>GET otro dominio con cabeceras no simples</h3>
    <a href='/site/03-get-otro-dominio-con-cabeceras-no-simples.html'>03-get-otro-dominio-con-cabeceras-no-simples</a>
    <ul>
        <li>Se envia petición preflight (método OPTIONS), ya que es una petición a otro dominio con cabeceras no simple
        </li>
        <li>
            <b>No</b> se hace petición GET al servidor  si las cabeceras de la
            respuesta OPTIONS no son válidas.
        </li>

    </ul>
</div>

<div>
    <h3>Standand POST al mismo dominio (desde un from vaya)</h3>
    <a href='/site/04-standard-post-mismo-dominio.html'>04-standard-post-mismo-dominio</a>
    <ul>
        <li>
            No se envia petición preflight (método OPTIONS)
        </li>
        <li>
            El navegador <b>incluye</b>  la cabecera Origin en la petición POST
        </li>
        <li>
            La petición termina bien
        </li>

    </ul>
</div>

<div>
    <h3>Standand POST a otro dominio (desde un from vaya)</h3>
    <a href='/site/05-standard-post-otro-dominio.html'>05-standard-post-otro-dominio</a>
    <ul>
        <li>
            No se envia petición preflight (método OPTIONS)
        </li>
        <li>
            El navegador <b>incluye</b> la cabecera Origin en la petición POST
        </li>
        <li>
            La petición termina bien
        </li>

    </ul>
</div>

<div>
    <h3>No standand POST al mismo dominio (desde javascript y con cabeceras no simple)</h3>
    <a href='/site/06-non-standard-post-mismo-dominio.html'>06-non-standard-post-mismo-dominio</a>
    <ul>
        <li>
            No se envia petición preflight (método OPTIONS)
        </li>
        <li>
            El navegador <b>incluye</b> la cabecera Origin en la petición GET
        </li>
        <li>
            La petición termina bien
        </li>

    </ul>
</div>



<div>
    <h3>No standand POST a distinto dominio sin cabeceras extra  (desde javascript)</h3>
    <a href='/site/07-non-standard-post-distinto-dominio-sin-cabeceras.html'>07-non-standard-post-distinto-dominio-sin-cabeceras</a>
    <ul>
        <li>
            No se envia petición preflight (método OPTIONS)
        </li>
        <li>
            El navegador <b>incluye</b> la cabecera Origin en la petición GET
        </li>
        <li>
            La petición se hace al servidor, que pude devolver cualquier cosa, aunque el
            navegador no procesará la respuesta si está no incluye una cabecera
            Access-Control-Allow-Origin valida
        </li>

    </ul>
</div>

<div>
    <h3>No standand POST a distinto dominio con cabeceras no simples (desde javascript)</h3>
    <a href='/site/08-non-standard-post-distinto-dominio-con-cabeceras-no-simples.html'>08-non-standard-post-distinto-dominio-con-cabeceras-no-simples</a>
    <ul>
        <li>
            se envia petición preflight (método OPTIONS)
        </li>
        <li>
            La petición POST no se hace al servidor si las cabeceras de la
            respuesta OPTIONS no son válidas.
        </li>
    </ul>
</div>

<div>
    <h3>PUT mismo dominio con cabeceras no simples</h3>
    <a href='/site/09-put-mismo-dominio.html'>09-put-mismo-dominio</a>
    <ul>
        <li>
            No se envia petición preflight (método OPTIONS)
        </li>
        <li>
            El navegador <b>incluye</b> la cabecera Origin en la petición GET
        </li>
        <li>
           La petición termina bien
        </li>

    </ul>
</div>

<div>
    <h3>PUT distinto dominio sin cabeceras no simples</h3>
    <a href='/site/10-put-distinto-dominio-sin-cabeceras-no-simples.html'>10-put-distinto-dominio-sin-cabeceras-no-simples</a>
    <ul>
        <li>
            se envia petición preflight (método OPTIONS)
        </li>
        <li>
            La petición PUT no se hace al servidor si las cabeceras de la
            respuesta OPTIONS no son válidas.
        </li>

    </ul>
</div>


<?php
//
//<h1> Todos los archivos de ejemplo
//
//$files = scandir('.');
//
//echo "<div style='margin: 75px'>";
//echo "<ul>";
//foreach ($files as $file) {
//    if ($file == '.' || $file == '..' || $file == 'index.php') {
//        continue;
//    }
//
//    echo "<li><a href='/site/$file'>$file</a></li>";
//}
//echo "</ul>";
//echo "</div>";