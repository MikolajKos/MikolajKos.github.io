<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Document</title>
    </head>
    <body>
        
        <?php
            include_once 'header.php';
        ?>


        <h1 style="text-align: center; margin-top: 150px; margin-bottom: 100px; font-weight: 100;">Formularz Kontaktowy</h1>

        <div class="contactContainer">

            <div class="leftContact">
                <h2>Formularz</h2>

                <form method="post" action="contact.php">
                    

                    <input class="inputCon" name="userName" type="text" placeholder="Podaj imię...">

                    <input class="inputCon" name="userEmail" type="text" placeholder="Adres email...">

                    <input class="inputCon" name="userPhoneNumber" type="text" placeholder="Numer telefonu...">

                    <textarea name="usermessage" class="inputCon messageCon" type="text" placeholder="Wiadomość..."></textarea>
                    <input name="subButton" class="submitCon" type="submit" value="Wyślij">

                </form>


                <?php

                    if(isset($_POST['subButton']))
                    {
                        $name = $_POST['userName'];
                        $email = $_POST['userEmail'];
                        $phoneNumber = $_POST['userPhoneNumber'];
                        $message = $_POST['usermessage'];

                        $mailto = "niko.kosiorek@gmail.com";
                        $headers= "Od: ".$email;
                        $text = "Otrzymałeś wiadomość od: ".$name.".\n\n".$message;

                        mail($mailto, $name, $text, $headers);
                        header("Location: contact.php?mailsend");
                    }

                ?>


            </div>


            <div class="rightContact">

                <div class="rightConImg">
                    <img style="width: 100%; border-radius: 30px 30px 0px 0px;" src="./photos/fit-blond-woman-with-perfect-smile-stylish-sportswear-looking-camera-holding-bottle-water-white-wall-demonstrate-muscles.jpg">
                </div>

                <div style="padding:50px;" class="rightConText">
                    <h2>Dane kontaktowe:</h2>
                    <ul style="line-height: 40px;">
                        <li>adres@domena.com</li>
                        <li>+48 555 555 555</li>
                        <li>Mikołaj Kosiorek</li>
                    </ul>
                </div>

            </div>

        </div>

        <?php
            include_once 'footer.php';
        ?>

    </body>
</html>