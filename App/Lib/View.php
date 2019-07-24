<?php
function asset($path)
{
    echo RUTA_URL.$path;
}

function layout($path)
{
    require RUTA_APP.$path.'.php';
}
?>