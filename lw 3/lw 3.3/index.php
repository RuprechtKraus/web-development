<?php
    header("Content-Type: text/plain");

    function validatePassword($password): bool
    {
        for($i = 0; $i < strlen($password); $i++)
        {
            if (!ctype_alnum($password[$i]))
            {
                return false;
            }
        }
        return true;
    }

    function processPassword($password): array
    {
        $passwordInfo = array(
            "length" => strlen($password),
            "digits_count" => 0,
            "alphas_count" => 0,
            "upper_case_count" => 0,
            "lower_case_count" => 0,
            "symbols" => []
        );

        for ($i = 0; $i < strlen($password); $i++)
        {
            $passwordInfo["symbols"][$password[$i]]++;
            if (ctype_digit($password[$i]))
            {
                $passwordInfo["digits_count"]++;
            }
            else if (ctype_alpha($password[$i]))
            {
                $passwordInfo["alphas_count"]++;
                if (ctype_upper($password[$i]))
                {
                    $passwordInfo["upper_case_count"]++;
                }
                else
                {
                    $passwordInfo["lower_case_count"]++;
                }
            }             
        }
        return $passwordInfo;
    }

    function countSecurityPoints($passInfo): int
    {
        $passStrength = 0;

        /* Прибавка баллов */
        {
            $passStrength += 4 * $passInfo["length"]; //К надежности прибавляется (4*n), где n - количество всех символов пароля
            $passStrength += 4 * $passInfo["digits_count"]; //К надежности прибавляется (4*n), где n - количество цифр в пароле
            if ($passInfo["upper_case_count"] > 0) //К надежности прибавляется ((len-n)*2) в случае, если пароль содержит n символов в верхнем регистре
            {
                $passStrength += ($passInfo["length"] - $passInfo["upper_case_count"]) * 2;
            }
            if ($passInfo["lower_case_count"] > 0) //К надежности прибавляется ((len-n)*2) в случае, если пароль содержит n символов в нижнем регистре
            {
                $passStrength += ($passInfo["length"] - $passInfo["lower_case_number"]) * 2;
            }
        }

        /* Снятие баллов */
        {
            if ($passInfo["digits_count"] < 1 || $passInfo["alphas_count"] < 1)
            {
                $passStrength -= $passInfo["length"];
            }

            foreach ($passInfo["symbols"] as $count) 
            {
                if ($count > 1) //За каждый повторяющийся символ в пароле вычитается количество повторяющихся символов
                {
                    $passStrength -= $count;
                }
            }
        }

        return $passStrength;
    }
    
    if (isset($_GET["password"]))
    {
        $password = $_GET["password"];
        $passwordStrength = 0;

        if (validatePassword($password))
        {
            $passwordInfo = processPassword($password);
            $passwordStrength = countSecurityPoints($passwordInfo);
        }
        else
        {
            echo("Пароль содержит недопустимый символ");
            return;
        }
        
        echo("Your password is '$password'\n");
        print_r($passwordInfo);
        echo("Password length:" . $passwordInfo["length"]."\n");
        echo("Password strength: $passwordStrength");
    }
    else
    {
        echo("Параметр 'password' не установлен");
    }
 ?>
