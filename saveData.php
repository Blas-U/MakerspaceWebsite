<?php
    //fet Postdata (json)
    $json = file_get_contents('php://input');
    // converts it into a PHP object
    $data = json_decode($json);

    echo json_encode($data);

    $file = fopen('mOrder.json', 'a');
    fwrite($file, json_encode($_GET)."\n");
    fclose($file);




//removing file
    // if ($data->action == "remove"){
    //     $a = 1;
    // }
?>