<?php 
  header("Content-Type: text/plain");
  $Text = $_GET["text"];
  echo("Text before: |".$Text."|\r\n\n");

//Вариант с помощью регулярных выражений
  $FixedText = trim($Text);
  $FixedText = preg_replace('/\s+/', " ", $FixedText);
  echo("Text after: |".$FixedText."|\r\n\n");

//Вариант "того что выше мы еще не проходили"
  $FixedText2 = "";
  for ($i = 0; $i < strlen($Text); $i++)
  {
    static $FirstWordFound = false;
    static $WordFound = false;
    static $SpaceFound = false;

    if (!$FirstWordFound && ctype_alpha($Text[$i]))
      $FirstWordFound = true;
    else if ($FirstWordFound && ctype_space($Text[$i]))  
      $SpaceFound = true;

    if (ctype_alpha($Text[$i]) && $FirstWordFound)
    {
      if ($SpaceFound)
      {
        $FixedText2 .= " ";
        $SpaceFound = false;
      }
      $FixedText2 .= $Text[$i];
    }
  }
  echo("Text after (again): |".$FixedText2."|\r\n");
 ?>