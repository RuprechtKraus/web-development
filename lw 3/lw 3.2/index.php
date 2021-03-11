<?php 
    header("Content-Type: text/plain"); 
    $identifier = $_GET["identifier"]; 
    $isGoodIdentifier = true;

    echo("Идентификатор следует правилу: ");
    if (!ctype_alpha($identifier[0]))
    {
        echo("No");
        $isGoodIdentifier = false;
    }
    else
    {
        for ($i = 1; $i < strlen($identifier); $i++)
        {
            if (!ctype_alnum($identifier[$i]) && $identifier[$i] != "_")
            {
                echo("No");
                $isGoodIdentifier = false;
                break;
            }
        }
<<<<<<< HEAD
  }
  
  if (!$IsGoodIdentifier)
    echo("\nВ соответствии с правилом SR3, идентификатор не должен начинаться с цифры, и должен содержать в себе лишь буквенные символы и цифры");
  else
    echo("Yes");
?>
=======
    }

    // echo(!$isGoodIdentifier ? "\nВ соответствии с правилом SR3, идентификатор не должен начинаться с цифры, и должен содержать в себе лишь буквенные символы, цифры или символ '_'" : "Yes");

    if (!$isGoodIdentifier)
       echo("\nВ соответствии с правилом SR3, идентификатор не должен начинаться с цифры, и должен содержать в себе лишь буквенные символы, цифры или символ '_'");
    else
        echo("Yes");
?>
>>>>>>> 5cb42ae0795b647eec879f0e438f9ad0302b8b7d
