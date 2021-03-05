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
    }

    // echo(!$isGoodIdentifier ? "\nВ соответствии с правилом SR3, идентификатор не должен начинаться с цифры, и должен содержать в себе лишь буквенные символы, цифры или символ '_'" : "Yes");

    if (!$isGoodIdentifier)
       echo("\nВ соответствии с правилом SR3, идентификатор не должен начинаться с цифры, и должен содержать в себе лишь буквенные символы, цифры или символ '_'");
    else
        echo("Yes");
?>
