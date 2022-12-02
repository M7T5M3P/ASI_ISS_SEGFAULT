<?php
header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL);
ini_set('display_errors', '1');
function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    $authorization = "Authorization: Bearer 23b09f09da7c349aec07c2904b59da11";
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json' , $authorization ));

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}
echo CallAPI("POST", "https://send.api.mailtrap.io/api/send", '{"from":{"email":"mailtrap@www.mathieu-rio.fr","name":"Mailtrap Test"},"to":[{"email":"mathys13002@gmail.com"}],"subject":"You are awesome!","text":"Congrats for sending test email with Mailtrap!","category":"Integration Test"}');