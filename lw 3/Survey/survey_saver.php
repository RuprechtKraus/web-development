<?php
    header("Content-Type: text/plain");
    if (isset($_GET["email"]))
    {
        $argNames = array_keys($_GET);
        $argValues = array_values($_GET);
        $filePath = __DIR__ . "\\data\\" . $_GET["email"] . ".txt";
        $file = fopen($filePath, "w");
        $fwrite = true;
        for ($i=0; $i < sizeof($argNames); $i++) 
        {
            $arg = ""; 
            switch ($argNames[$i]) 
            {
                case "first_name":
                    $arg = "First name";
                    break;
                case "second_name";
                    $arg = "Second name";
                    break;
                default:
                    $arg = ucfirst($argNames[$i]);
                    break;
            }

            $fwrite = fwrite($file, $arg . ": " . $argValues[$i] . "\n");
            if ($fwrite === false)
            {
                echo("Ошибка при записи данных в файл");
                return;
            }
        }
    }
    else
    {
        echo("Необходим обязательный параметр 'email'");
    }
 ?>