<?php

$contents=file_get_contents("http://www.weather-forecast.com/locations/San-Francisco/forecasts/latest");

preg_match("/Weather (.*?) mild/i", $contents, $matches);

print_r($matches);




//preg_match('/3 Day Weather Forecast Summary:<\/b>
//<span class="phrase">(.*?)</s', $contents, $matches);

//print_r($matches);
?>


<!doctype html>
<html>
<head>
    <title>My First Webpage</title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="Content/bootstrap.min.css" rel="stylesheet" />
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="Content/bootstrap-theme.css" rel="stylesheet" />
    <link href="Content/bootstrap-theme.min.css" rel="stylesheet" />

    <style>

        html, body {
            height:100%;
            margin-top:30px;
        }
        .container {
           
            background-image: url('Photos/Weather Forecaster1.png');
            width: 100%;
            height: 100%;
            background-size:cover;
            background-position:center;
            padding-top:150px;
        }

        .weatherForecaster {
            text-align: center;
            color: #ACB0BC;
        }
        p{
            padding-top:15px;
            padding-bottom:15px;
        }

        button{
            margin-top:20px;

        }

    </style>

</head>
<body>
    

        <div class="container">

            <div class="row">   
                    <div class="col-md-6 col-md-offset-3">

                        <div class="weatherForecaster">

                            <h1>Weather Forecaster</h1>

                            <p class="lead">Enter your city below to get the weather forecast.</p>

                            <div class="form-group">
                                <input type="text" class="form-control" name="city" id="city" placeholder="Example: Altanta, London, Paris, New York" />
                            </div>
                           
                            <button class="btn btn-success btn-lg">Find My Weather</button>

                        </div> 
                        
                    </div>             
                    </div>
                </div>
            
    
        <!--Form will submit using the Post Method-->


    <!--Scripts-->
    <script src="Scripts/bootstrap.js"></script>
    <script src="Scripts/bootstrap.min.js"></script>
    <script src="Scripts/jquery-1.9.1.js"></script>
    <script src="Scripts/jquery-1.9.1.min.js"></script>
    <script src="Scripts/jquery.unobtrusive-ajax.js"></script>
    <script src="Scripts/jquery-1.9.1.intellisense.js"></script>

</body>
</html>

