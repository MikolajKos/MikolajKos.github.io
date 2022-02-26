<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LiteDiet - Stwórz dietę</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<?php
            include_once 'header.php';
?>


<h1 style="text-align: center; margin-top: 150px; margin-bottom: 100px; font-weight: 100;">Stwórz dietę</h1>

<div  class="dietaContainer">
    <div class="dietaLeft">

        <h2>*Preferencje:</h2>

        <form method="post" action="stworzDiete.php">


            <input name="wagaPrzed" id="aktWaga" class="input2Con" type="number" placeholder="Podaj aktualną wagę (kg)" onclick="isEmpty()"><br>

            <input name="wagaPo" id="celWaga" class="input2Con" type="number" placeholder="Podaj docelową wagę (kg) " onclick="isEmpty()"><br><br>

            *Okres subskrybcji:<br><br>

            <input type="radio" id="radio3m"
                name="contact" value="phone" onclick="isEmpty()">
            <label for="radio3m">3 miesiące</label><br>

            <input type="radio" id="radio6m"
                name="contact" value="phone" onclick="isEmpty()">
            <label for="radio6m">6 miesięcy</label><br>

            <input type="radio" id="radio1r"
                name="contact" value="phone" onclick="isEmpty()">
            <label for="radio1r">1 rok</label><br><br>

            Dodatkowe Preferencje:<br><br>

            <input name="noGluten" type="checkbox" >Bez glutenu</input>
            <?php
                if(isset($_POST['noGluten']))
                {
                    echo "+20zł";
                }
            ?>
            
            <br>
            <input name="nabial" type="checkbox" >Bez nabiału</input>
            <?php
                if(isset($_POST['nabial']))
                {
                    echo "+20zł";
                }
            ?>

            <br>
            <input name="vegan" type="checkbox" >Wersja wegańska</input>
            <?php
                if(isset($_POST['vegan']))
                {
                    echo "+50zł";
                }
            ?>

            <br>
            <input disabled  class="submitCon" id="sBtn" style="margin-top: 40px" type="submit" value="Stwórz dietę">
            
            <script>
                function isEmpty()
                {
                    let wagaBefore = document.getElementById("aktWaga").value;
                    let wagaAfter = document.getElementById("celWaga").value;

                    if(wagaBefore != "" && wagaAfter != "" && wagaBefore > wagaAfter)
                    {
                        if(document.getElementById('radio3m').checked || document.getElementById('radio6m').checked || document.getElementById('radio1r').checked)
                        {
                            document.getElementById('sBtn').removeAttribute("disabled");
                        }
                    }
                }
            </script>

        </form>
    </div>

    <div class="dietaRight">
        Podsumowanie:

        <div class="dietaRightBottom">
            <?php
                include_once 'createDietScript.php';
            ?>
        </div>
        
        

    </div>

    <?php
         
    ?>

</div>



<?php
    include_once 'footer.php';
?>

</body>
</html>