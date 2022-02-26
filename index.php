<?php
    include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <title>liteDiet</title>
        <link rel="stylesheet" href="style.css">
        <meta http-equiv="X-UA-Compatible">
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">

    </head>


    <body>

        <header>

        <div class="mainHeader">

            <div class="headerLeftBlock">
                <div class="logo">
                    <span class="logoLite">Lite</span><span class="logoFit">FIT</span>
                </div>
            </div>

            <div class="headerRightBlock">
                <div class="menu">
                    <a href="#" class="aHome">Strona główna</a>
                    <a href="http://localhost/DietWEB/stworzDiete.php" class="aDiet">Stwórz dietę</a>
                    <a href="http://localhost/DietWEB/aboutUs.php" class="aAboutUs">O nas</a>
                    <a href="http://localhost/DietWEB/contact.php" class="aContact">Kontakt</a>
                </div>
            </div>

        </div>

            <div class="containerHeader">
                <div class="naszeUslugi">
                    <div class="topText">Nasze usługi.</div>
                    <div class="botText">Lite Fit, jest firmą powstałą w trosce o twoje zdrowie. Zapewniamy, że z naszą  pomocą wspólnie osiągniemy sukces! Pomóż sobie już dzisiaj decydując się na jedną z naszych ofert dietetyczno-odchudzających.</div>
                    <button onclick="window.location.href='http://localhost/DietWEB/aboutUs.php'" class="aboutUsBTN">O nas</button>
                </div>


            </div>



        </header>


        <main>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#370665" fill-opacity="1" d="M0,192L48,170.7C96,149,192,107,288,90.7C384,75,480,85,576,122.7C672,160,768,224,864,234.7C960,245,1056,203,1152,176C1248,149,1344,139,1392,133.3L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
            <div style="height:120px;"></div>
            
            <div class="mainContainer">
                <div class="first">
                    <div class="firstLeft">
                        <img class="zdjFirst" src="./photos/ketogenic-low-carbs-diet-food-selection-white-wall.jpg" loading="lazy" style="width: 700px;">
                    </div>

                    <div class="firstRight">
                        <div style="font-size: 50px;font-weight: 700;padding-bottom: 60px">Ćwiczenia i dieta</div>
                        <div style="line-height: 35px;">Skorzystaj z naszego formularza, obliczymy twoje BMI oraz dobierzemy idealną dietę dla Ciebię. Pomożemy odkryć Wam złoty punk abyście poczuli się lepiej z samym(ą) sobą. Zacznij o siebie dbać i spraw aby każdy dzień był krokiem do sukcesu.</div>
                        <button class="stworzDieteBTN" onclick="window.location.href='http://localhost/DietWEB/stworzDiete.php'" >Stwórz dietę</button>
                    </div>
                </div>


                
            </div>

            <div style="height:1000px">
                <div class="second">
                        <div class="secondContainer">
                            <div class="leftSContainer">

                                <div class="titleSecond">Zaufanie.</div>

                                <div class="textSecond">Podstawą wspólnego sukcesu jest zaufanie, którym darzą nas nasi klienci. Dołącz do nas dzisiaj i pozwól nam zmienić twój styl życia o sto osiemdziesiąt stopni. Pozostań z nami w kontakcie i skorzystaj z naszego formularza kontaktowegow razie pytań lub niepewności.</div>
                                
                                <button onclick="window.location.href='http://localhost/DietWEB/contact.php'" class="stworzDieteBTN">Kontakt</button>

                            </div>

                        </div>
                </div>
            </div>

        </main>


        <?php
            include_once 'footer.php';
        ?>

    </body>

</html>