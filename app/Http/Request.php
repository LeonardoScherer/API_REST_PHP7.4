<?php

namespace App\Http;

class Request
{
    private $http;

    private $uri;

    private $urlParams = [];

    private $post = [];

    private $headers = [];

    public function __construct()
    {
        $this->urlParams = $_GET ?? [];
        $this->post = $_POST ?? [];
        $this->headers = getallheaders();
        $this->http = $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri = $_SERVER['REQUEST_METHOD'] ?? '';

    }

    public function getHttp()
    {
        return $this->http;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getHeaders()
    {
        return $this->headers;
    }

    public function getUrlParams()
    {
        return $this->urlParams;
    }

    public function getPost()
    {
        return $this->post;
    }

}

?>