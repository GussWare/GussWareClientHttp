<?php

require_once __DIR__ . '/../ClientHttp.php';

use GussWare\ClientHttp;

class AjaxGet
{
    protected $client;
    protected $uri;

    public function __construct(string $uri)
    {
        $this->uri = $uri;
        $this->client = new ClientHttp();
    }

    public function call()
    {
        $response = $this->client->ajaxGet($this->uri);

        return $response;
    }
}

$client = new AjaxGet("http://localhost/gusswareclienthttp/src/examples/server/serverAjaxGet.php");
$response = $client->call();

echo $response;
