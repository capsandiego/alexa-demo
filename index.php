<?php

$text = "Hello World! This is my first Alexa Skill!";

$array = [  "version" => "1.0",
            "response" => ["outputSpeech" => ["type" => "PlainText", "text" => $text]],
         ];

echo json_encode($array);