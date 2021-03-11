<?php
    header("Content-Type: text/plain");
    if (isset($_GET["email"]))
    {
        $filePath = __DIR__ . "\\data\\" . $_GET["email"] . ".txt";
        if (file_exists($filePath))
        {
            $file = fopen($filePath, "r");
            while (!feof($file))
            {
                $args = preg_split("/: /", fgets($file));
                if ($args[0] !== "")
                {
                    echo($args[0] . ": " . $args[1] . "\n");
                }
            }            
        }
        else
        {
            echo("Файл " . $_GET["email"] . ".txt не найден");
        }
        fclose($filePath);
    }
    else
    {
        echo("Необходим обязательный параметр 'email'");
    }
 ?>