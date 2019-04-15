<?php

$text = "Hello World! This is my first Alexa Skill! The forwarded is: ".$_SERVER['HTTP_X_FORWARDED_FOR']." while the IP is: ".$_SERVER['REMOTE_ADDR'] ;

$array = [  "version" => "1.0",
            "response" => ["outputSpeech" => ["type" => "PlainText", "text" => $text]],
         ];

echo json_encode($array);