<?php
    if (!isset($_SESSION))
    {
        session_start();
    }

    require_once("../src/common.inc.php");
    
    if (getRequestMethod() == "POST")
    {
        saveFeedbackPage();
    }
    else
    {
        mainPage(); 

        unset($_SESSION["errors"]);
        unset($_SESSION["name"]);
        unset($_SESSION["email"]);
    }

?>