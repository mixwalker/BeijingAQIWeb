<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Quality Index</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- header section starts  -->

    <header class="header">

        <a href="index.php" class="logo">
            <img src="images/logo.png" alt="">
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>


    </header>



    <section class="home" id="home">

        <h1 class="heading"> <span>!!!!</span> !!! </h1>
        <h1 class="heading"> Welcome to <span>Beijing Air Quality Index Dataset</span> </h1>

        <div class="row">
            <?php
            isset($_POST['aqi']) ? $aqi = $_POST['aqi'] : $aqi = '';
            isset($_POST['is']) ? $is = $_POST['is'] : $is = '';
            isset($_POST['ir']) ? $ir = $_POST['ir'] : $ir = '';

            if ($aqi == null) {
                echo '
                <div>
                    <input type="submit" value="PM.25 Level" class="block" disabled>
                </div>';
            } elseif ($aqi > 200.500) {
                if ($aqi > 300.500) {
                    echo '
                    <div>
                        <input type="submit" value="Hazardous" class="blockhazar" disabled>
                    </div>';
                } elseif ($aqi <= 300.500) {
                    if ($aqi <= 300.500 && $is <= 1.500) {
                        echo '
                        <div>
                            <input type="submit" value="Very Unhealthy" class="blockvery" disabled>
                        </div>';
                    } else {
                        echo '
                        <div>
                            <input type="submit" value="Hazardous" class="blockhazar" disabled>
                        </div>';
                    }
                }
            } elseif($aqi <= 200.500){
                if($aqi > 150.500 && $ir >2.500){
                    echo '
                        <div>
                            <input type="submit" value="Unhealthy for Sensitive Groups" class="blockunsen" disabled>
                        </div>';
                }elseif($aqi > 150.500 && $ir <= 2.500){
                    echo '
                    <div>
                        <input type="submit" value="Unhealthy" class="blockun" disabled>
                    </div>';
                }elseif($aqi > 100.500 && $is > 1.500 ){
                    echo '
                    <div>
                        <input type="submit" value="Unhealthy" class="blockvery" disabled>
                    </div>';
                }elseif($aqi > 100.500 && $is <= 1.500){
                    echo '
                    <div>
                        <input type="submit" value="Unhealthy for Sensitive Groups" class="blockunsen" disabled>
                    </div>';
                }elseif($aqi > 50.500 && $ir > 2.500){
                    echo '
                    <div>
                        <input type="submit" value="Good" class="blockgood" disabled>
                    </div>';
                }elseif($aqi > 50.500 && $ir <= 2.500){
                    echo '
                    <div>
                        <input type="submit" value="Moderate" class="blockmo" disabled>
                    </div>';
                }elseif($aqi <= 50.500){
                    echo '
                    <div>
                        <input type="submit" value="Good" class="blockgood" disabled>
                    </div>';
                }
            }

            ?>

            <form action="index.php" method="post">
                <h3>Enter your Data</h3>
                <div class="inputBox">
                    <span class="fas fa-cloud"></span>
                    <input type="number" name="aqi" id="aqi" placeholder="AQI Level" min=0>
                </div>
                <div class="inputBox">
                    <span class="fas fa-snowflake"></span>
                    <input type="number" name="is" id="is" placeholder="Hours of snow" min=0>
                </div>
                <div class="inputBox">
                    <span class="fas fa-cloud-rain"></span>
                    <input type="number" name="ir" id="ir" placeholder="Hours of rain" min=0>
                </div>
                <input type="submit" value="Check Level" class="btn">
            </form>

        </div>

    </section>


    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading"> <span>about</span> us </h1>

        <div class="row">

            <div class="image">
                <img src="images/beijing.jpg" alt="">
            </div>

            <div class="content">
                <h3>What is Beijing air quality index dataset?</h3>
                <p>It's web application for measure PM2.5 Level in Beijing between Jan 1st, 2010 to Dec 31st, 2014
                By using US AQI to compare with Beijing PM2.5 DataSet.</p>
                <p>We using RapidMiner to created Decision Tree algorithm,We're hope this Web Application will useful for student who's learning Datamining </p>
                <p>Thank you Dataset from US Embassy in Beijing</p>
                <a href="https://archive.ics.uci.edu/ml/datasets/Beijing+PM2.5+Data" class="btn">Download Dataset</a>
            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- footer section starts  -->

    <section class="footer">

        <div class="share">
            <a href="https://web.facebook.com/mixwalker9" class="fab fa-facebook-f"></a>
        </div>
        
        <div class="links">
            <a href="#">home</a>
            <a href="#">about</a>
        </div>

        <div class="credit">created by <span>Mr.Sorrawit Jeawkok &
                Mr.Athitep Kundontham</span> | all rights reserved</div>

    </section>

    <!-- footer section ends -->

    <!-- custom js file link  -->
    <script src="js/script.js"></script>

</body>

</html>