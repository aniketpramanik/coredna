<?php
//Payload to be post to the end point
$payload = json_encode([
    "name" => "Aniket Pramanik",
    "email" => "aniketlpuan@gmail.com",
    "url" => "https://github.com/aniketpramanik/coredna.git"
]);

$options = [
    "http" =>[
        "method" => "OPTIONS",
        "header" => "Authorization: Bearer d417fcbc-94b7-4357-aff3-536c33364428; Content-type: application/json; charset = UTF-8; ",// Bearer token authorization
        "content" => $payload
    ]

    ];

    $data = file_get_contents("https://corednacom.corewebdna.com/assessment-endpoint.php", false,
                                        $context);

    var_dump($payload); //Showing Paylaod
    print_r($http_response_header[0]); // Displaying the response from the api.

?>
