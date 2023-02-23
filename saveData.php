<?php
    //fet Postdata (json)
    $json = file_get_contents('php://input');
    // converts it into a PHP object
    $data = json_decode($json);

    echo json_encode($data);

    $file = fopen('mOrder.json', 'a');
    fwrite($file, json_encode($data)."\n");
    fclose($file);

    // the message
    $msg = $data/*"First line of text\nSecond line of text"*/;

    // use wordwrap() if lines are longer than 70 characters
    $msg = wordwrap($msg,70);

    // send email
    mail("burbano@fulton-school.org","My subject",$msg);


//removing file
    // if ($data->action == "remove"){
    //     $a = 1;
    // }
?>