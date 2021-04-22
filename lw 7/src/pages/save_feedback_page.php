<?php

    function saveFeedbackPage(): void
    {
        if (!empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["message"]))
        {
            $keys = array_keys($_POST);
            $values = array_values($_POST);
            $filePath = "feedbacks\\" . strtolower($_POST["email"]) . ".txt";
            $file = fopen($filePath, "w");
            $fwrite = true;

            for ($i = 0; $i < sizeof($keys); $i++) 
            {
                $fwrite = fwrite($file, $keys[$i] . ": " . $values[$i] . "\n");
                if ($fwrite === false)
                {
                    echo("Error recording data to file");
                    return;
                }
            }

            fclose($file);
            echo("Data has been successfully recorded");
        }
        else
        {   
            if (empty($_POST["name"])) 
            {
                $_SESSION["errors"]["name_error_msg"] = "This field must not be empty";
            }
            $_SESSION["name"] = $_POST["name"];
            
            if (empty($_POST["email"])) 
            {
                $_SESSION["errors"]["email_error_msg"] = "This field must not be empty";
            }
            $_SESSION["email"] = $_POST["email"];

            if (empty($_POST["message"])) 
            {
                $_SESSION["errors"]["message_error_msg"] = "This field must not be empty";
            }

            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    }

?>