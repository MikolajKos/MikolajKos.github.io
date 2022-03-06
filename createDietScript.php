<?php

    $cenaDodatek = 0;    

    if(isset($_POST['wagaPrzed']) && isset($_POST['wagaPo']))
    {
        $beforeWeight = $_POST['wagaPrzed'];
        $afterWeight = $_POST['wagaPo'];
        $roznicaWag = (float)$beforeWeight - (float)$afterWeight; //różnica wag
        $cenaZaWage = $roznicaWag * 50;
    }



    if(isset($_POST['noGluten']))
    {
        $cenaDodatek += 20;
    }
    
    if(isset($_POST['nabial']))
    {
        $cenaDodatek += 20;
    }
    
    if(isset($_POST['vegan']))
    {
        $cenaDodatek += 50;
    }



    if(isset($_POST['contact']))
    {
        $okres = $_POST['contact'];
        

        switch ($okres) {
            case "3 miesiące":
                $cenaZaSub = 200;
                break;
            case "6 miesięcy":
                $cenaZaSub = 350;
                break;
            case "1 rok":
                $cenaZaSub = 600;
                break;
            default:
               echo "Brak";
        }

        $cenaCalkowita = $cenaZaWage + $cenaZaSub + $cenaDodatek;

        
    }
?>

<table>

  <tr class="tr1">
    <td>Masa do spalenia:</td>

    <td>
        <?php 
            
            if(isset($roznicaWag))
            {
                echo "$roznicaWag kg"; 
            }
        ?>
    </td>

    <td>
        <?php 
            
            if(isset($cenaZaWage))
            {
                echo "$cenaZaWage zł"; 
            }
        ?>
    </td>

  </tr>
  <tr class="tr2">
    <td>Okres subskrypcji:</td>

    <td>
        <?php       
            if(isset($okres))
            {
                echo $okres; 
            }
        ?>
    </td>

    <td>
        <?php       
            if(isset($okres))
            {
                echo "$cenaZaSub zł"; 
            }
        ?>
    </td>
  </tr>
  <tr class="tr3">
    <td>Dodatki:</td>
    
    <td>
        <?php
            if(isset($_POST['noGluten']))
            {
                echo "bez glutenu<br>";
            }
            
            if(isset($_POST['nabial']))
            {
                echo "bez nabiału<br>";
            }
            
            if(isset($_POST['vegan']))
            {
                echo "dieta wegańska<br>";
            }
        ?>
    </td>

    <td>
        <?php
            if(isset($_POST['noGluten']) || isset($_POST['nabial']) || isset($_POST['vegan']))
            {
                echo "$cenaDodatek zł";
            }
        ?>
    </td>

  </tr>
</table>

<div class="kwotaCal">
    <hr style="margin-top: 80px">
    <div style="font-size: 18px;">Kwota całkowita do zapłaty:<br /></div>
    <br />
    
    <?php

        if(isset($cenaZaWage))
        {
            echo "+$cenaZaWage zł<br>"; 
        }

        if(isset($okres))
        {
            echo "+$cenaZaSub zł<br>"; 
        }

        if(isset($_POST['noGluten']) || isset($_POST['nabial']) || isset($_POST['vegan']))
        {
            echo "+$cenaDodatek zł<br><br>";
        }
        
        
        if(isset($cenaCalkowita))
        {
            echo "<hr>";
            echo "<div class='cenaDiet'>$cenaCalkowita,00 zł</div>";
        }
    ?>

</div>