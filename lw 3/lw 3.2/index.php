<?php 
  header("Content-Type: text/plain"); 
  $Identifier = $_GET["identifier"]; 
  $IsGoodIdentifier = true;

  echo("Идентификатор следует правилу: ");
  if (!ctype_alpha($Identifier[0]))
  {
    echo("No");
    $IsGoodIdentifier = false;
  }
  else
  {
    for ($i = 1; $i < strlen($Identifier); $i++)
      if (!ctype_alnum($Identifier[$i]) && $Identifier[$i] != "_")
        {
          echo("No");
          $IsGoodIdentifier = false;
          break;
        }
  }

  // echo(!$IsGoodIdentifier ? "\nВ соответствии с правилом SR3, идентификатор не должен начинаться с цифры, и должен содержать в себе лишь буквенные символы, цифры или символ '_'" : "Yes");

  if (!$IsGoodIdentifier)
    echo("\nВ соответствии с правилом SR3, идентификатор не должен начинаться с цифры, и должен содержать в себе лишь буквенные символы, цифры или символ '_'");
  else
    echo("Yes");
?>