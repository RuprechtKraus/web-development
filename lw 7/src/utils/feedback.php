<?php

  function getFeedback(): array
  {
    $feedback = [];
    $filePath = __DIR__ . "\\..\\..\\web\\feedbacks\\" . strtolower($_GET["email"]) . ".txt";
    if (file_exists($filePath))
    {
        $file = fopen($filePath, "r");
        while (!feof($file))
        {
            $args = preg_split("/: /", fgets($file));
            if ($args[0] != "")
            {
                $feedback[$args[0]] = $args[1];
            }
        }         
        fclose($file);
    }
    else
    {
        
    }

    return $feedback;
  }

?>