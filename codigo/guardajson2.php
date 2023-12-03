<?php

    $archivo = "datos/prueba.json";
    $datos = [
        'archivo' => $_GET['archivo'],
        'elemento' => $_GET['patron'],
        'datos' => json_decode($_GET['datos'])
    ];
    

    $datosexistentes = file_get_contents($archivo);
    $datosexistentesjson = json_decode($datosexistentes);

    array_push($datosexistentesjson,$datos);
    
    $json = json_encode($datosexistentesjson,JSON_PRETTY_PRINT);
    
    
    file_put_contents($archivo,$json);

?>