<?php

  phpinfo();
  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Focused weather for users location" >
    
    <title>Current Weather | The Weather Site</title>
</head>
<!--Collaboration: Justen Neeley, Kiana Steadman, Diana Hays  -->
<body>

    <p id= "status" class ="show"></p>
    <main id = "main" class = "hide">
        <h1 id="commonName">
           
        </h1>
        <div id="location">
            <b>Zip:</b>
            <p id ="zip">83237</p>
            <b>Elevation: </b>
            <p id="elevation">4968</p> 
            <b>Location:</b>
            <p id= "coords">42.07, 111.79</p>
        </div>
        <div id="flex-container">
            <section id="temps" class="tile">
                <h2 class="hidden">
                    Temperature
                </h2>
                <p id="current-temp">55&deg;F</p>
                <div>
                    <p id="high-temp">64F </p>
                    <p id="low-temp">41F</p>
                </div>
                <p id = "feel"></p>
            </section>
            <section id="wind" class="tile">
                <h2 class="hidden">Wind</h2>
                <p><b>N</b></p>
                <div id= "pointer" class = "nw"></div>
                <p id ="windspeed">5 mph</p>
                <p id = "direction"></p>
                <p id ="gust"></p>
            </section>
            <section id="conditions" class="tile">
                <h2 id= "condition"> Rain </h2>
                <div id = "weather_img"></div>
            </section>
        </div>
        
    </main>
    
</body>
</html>
