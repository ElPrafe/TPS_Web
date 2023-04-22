<?php
function encabezado()
{
    $encabezado = "<!DOCTYPE html>
        <html>
        <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <title>Calculadora</title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
        </head>
        <body>
            <h1>Calculadora</h1>";

    return $encabezado;
}

function pie()
{
    $pie = "<a href=\"../\">Volver</a> 
        </body>
        </html>";

    return $pie;
}
function home()
{
    $contenido = encabezado() .
        "<ul>
            <li><a href=\"tabla/5\">Tabla 5</a></li>
            <li><a href=\"tabla/10\">Tabla 10</a></li>
            <li><a href=\"tabla/20\">Tabla 20</a></li>
        </ul> 
        <form id=\"formulario\"action=\"tabla/form\" method=\"get\">
            <label>A:</label><input id=\"numeroA\" required type=\"text\" name=\"Filas\" required> 
            <label>B:</label><input id=\"numeroB\" required type=\"text\" name=\"Columnas\" required>             
            <button type=\"submit\">Enviar</button>
        </form>
    </body>
    </html>";

    echo ($contenido);
}
