<?php
    require_once("../src/common.inc.php");
    require_once("../src/utils/feedback.php");

    $feedback = [];
    
    if (getRequestMethod() == "GET" && !empty($_GET["email"]))
    {
        $feedback = getFeedback();
        feedbacksListPage($feedback);
        if (empty($feedback))
        {
            $alertScript = "<script>";
            $alertScript .= "alert(\"Файл " . $_GET["email"] . ".txt" . " не найден\")";
            $alertScript .= "</script>";
            echo $alertScript;
        }
    }
    else
    {
        feedbacksListPage();
    }
    
?>