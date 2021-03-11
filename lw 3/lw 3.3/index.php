<?php
    header("Content-Type: text/plain");
    if (isset($_GET["password"]))
    {
        $password = $_GET["password"];
        $passwordLength = strlen($password);
        $passwordStrength = 0;
        $numberOfDigits = 0;
        $numberOfAlphas = 0;
        $numberOfUpperCase = 0;
        $numberOfLowerCase = 0;
        $symbols = [];

        for ($i = 0; $i < strlen($password); $i++)
        {
            if (ctype_alnum($password[$i]))
            {
                $symbols[$password[$i]]++;
                if (ctype_digit($password[$i]))
                {
                    $numberOfDigits++;
                }
                else if (ctype_alpha($password[$i]))
                {
                    $numberOfAlphas++;
                    if (ctype_upper($password[$i]))
                    {
                        $numberOfUpperCase++;
                    }
                    else
                    {
                        $numberOfLowerCase++;
                    }
                }             
            }
            else
            {
                echo("Пароль содержит недопустимый символ");
                return;
            }
        }

        /* Прибавка баллов */
        {
            $passwordStrength += 4 * $passwordLength; //К надежности прибавляется (4*n), где n - количество всех символов пароля
            $passwordStrength += 4 * $numberOfDigits; //К надежности прибавляется (4*n), где n - количество цифр в пароле
            if ($numberOfUpperCase > 0) //К надежности прибавляется ((len-n)*2) в случае, если пароль содержит n символов в верхнем регистре
            {
                $passwordStrength += ($passwordLength - $numberOfUpperCase) * 2;
            }
            if ($numberOfLowerCase > 0) //К надежности прибавляется ((len-n)*2) в случае, если пароль содержит n символов в нижнем регистре
            {
                $passwordStrength += ($passwordLength - $numberOfLowerCase) * 2;
            }
        }

        /* Снятие баллов */
        {
            if ($numberOfDigits < 1 || $numberOfAlphas < 1)
            {
                $passwordStrength -= $passwordLength;
            }

            foreach ($symbols as $key) 
            {
                if ($key > 1) //За каждый повторяющийся символ в пароле вычитается количество повторяющихся символов
                {
                    $passwordStrength -= $key;
                }
            }
        }
        
        echo("Your password is '$password'\n");
        print_r($symbols);
        echo("Password length: $passwordLength\n");
        echo("Password strength: $passwordStrength");
    }
    else
    {
        echo("Параметр 'password' не установлен");
    }
 ?>