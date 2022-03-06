<?php

    if(isset($_POST['wzrost']) && isset($_POST['waga']) && $_POST['wzrost'] != null && $_POST['waga'] != null)
    {
        $wzrost = $_POST['wzrost'];
        $waga = $_POST['waga'];

        $wzrostMetry = $wzrost / 100;

        $wynik = $waga / pow(2, $wzrostMetry);

        $bmi = round($wynik, 1);


        switch ($bmi) {
            case $bmi < 16:
                $daneBmi = "wygłodzenie";
                break;
                case $bmi > 16 && $bmi < 16.99:
                    $daneBmi = "wychudzenie";
                    break;
                    case $bmi > 17 && $bmi < 18.49:
                        $daneBmi = "niedowaga";
                        break;
                        case $bmi > 18.5 && $bmi < 24.99:
                            $daneBmi = "wartość prawidłowa";
                            break;
                            case $bmi > 25 && $bmi < 29.99:
                                $daneBmi = "nadwaga";
                                break;
                                case $bmi > 30 && $bmi < 34.99:
                                    $daneBmi = "I stopień otyłości";
                                    break;
                                    case $bmi > 35 && $bmi < 39.99:
                                        $daneBmi = "II stopień otyłości";
                                        break;
                                        case $bmi > 40:
                                            $daneBmi = "otyłość skrajna";
                                            break;
                                        default:
                                            echo "Błąd!";
        }

        if($bmi > 0 && $bmi < 70)
        {
            echo "Twoje BMI wynosi: <b>$bmi</b> - $daneBmi";
        }
        else if($bmi > 70 && $bmi >= 0)
        {
            echo"Podane wartości są nieprawidłowe.";
        }

    }

?>