<?php

$ip = isset($_SERVER['HTTP_CLIENT_IP']) ? $_SERVER['HTTP_CLIENT_IP'] : isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

$text = "Hello World! This is my first Alexa Skill! The forwarded is: ".$_SERVER['HTTP_X_FORWARDED_FOR']." while the REMOTE_ADDR IP is: ".$_SERVER['REMOTE_ADDR'] ." and IP is: ". $ip;

$array = [  "version" => "1.0",
            "response" => ["outputSpeech" => ["type" => "PlainText", "text" => $text]],
         ];

echo json_encode($array);
