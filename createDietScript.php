<?php

    if(isset($_POST['wagaPrzed']) && isset($_POST['wagaPo']))
    {
        $beforeWeight = $_POST['wagaPrzed'];
        $afterWeight = $_POST['wagaPo'];
        $roznicaWag = (float)$beforeWeight - (float)$afterWeight; //różnica wag
        echo "$roznicaWag<br />";
    }

    if(isset($_POST['contact1']))
    {
        $okres = "3 miesiące";
    }
    else if(isset($_POST['contact2']))
    {
        $okres = "6 miesięcy";
    }
    else if(isset($_POST['contact3']))
    {
        $okres = "1 rok";
    }
    
    echo $okres;
?>