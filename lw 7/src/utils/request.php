<?php 

    function getPostParameter(string $param): ?string
    {
        return (empty($_POST[$param])) ? null : $_POST[$param];
    }

    function getRequestMethod(): string
    {
        return $_SERVER["REQUEST_METHOD"];
    }

?>