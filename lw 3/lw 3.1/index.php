<?php 
    header("Content-Type: text/plain");
    $text = $_GET["text"];
    echo("Text before: |".$text."|\r\n\n");

    //Вариант с помощью регулярных выражений
    $fixedText = trim($text);
    $fixedText = preg_replace('/\s+/', " ", $fixedText);
    echo("Text after: |".$fixedText."|\r\n\n");

    //Вариант "того что выше мы еще не проходили"
    $fixedText2 = "";
    for ($i = 0; $i < strlen($text); $i++)
    {
        static $firstWordFound = false;
        static $wordFound = false;
        static $spaceFound = false;

        if (!$firstWordFound && ctype_alpha($text[$i]))
          $firstWordFound = true;
        else if ($firstWordFound && ctype_space($text[$i]))  
          $spaceFound = true;

        if (ctype_alpha($text[$i]) && $firstWordFound)
        {
            if ($spaceFound)
            {
                $fixedText2 .= " ";
                $spaceFound = false;
            }
            $fixedText2 .= $text[$i];
        }
    }
    echo("Text after (again): |".$fixedText2."|\r\n");
 ?>
