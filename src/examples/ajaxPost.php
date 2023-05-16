<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use GussWare\ClientHttp;

class AjaxPost
{
    protected $client;
    protected $uri;

    public function __construct(string $uri)
    {
        $this->uri = $uri;
        $this->client = new ClientHttp();
    }

    public function call($data)
    {
        $response = $this->client->ajaxPost($this->uri, $data);

        return $response;
    }
}

$client = new AjaxPost("http://localhost/gusswareclienthttp/src/examples/server/serverAjaxPost.php");
$response = $client->call([
    "message" => "Hola que hace"
]);

echo json_encode($response);
