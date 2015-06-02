<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Is de dag al voorbij?</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        body {
            font-weight: bold;
            font-size: 110%;
            text-align: center;
            overflow: hidden;
        }
        .wrapper {
            position: absolute;
            width: 100%;
            height: 90%;
            overflow: hidden;
        }
        .container-center {
            border-radius: 5px;
            position: relative;
            left: 50%;
            top: 50%;
            max-width: 50%;
            transform: translate(-50%,-50%);
            background: orange;
            padding-top: 30px;
            padding-bottom: 30px;
        }
        .container-center p {
            color: white;
        }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="container-center">
                <p>
                <?php
                    date_default_timezone_set('Europe/Amsterdam');
                    $current_time =date('H');

                    //echo $current_time;

                    // Nacht
                    if (($current_time >='00') && ($current_time <='06')) {
                    echo "Mooie tijd om lekker in je bed te liggen";
                    }

                    // Ochtend
                    if (($current_time >='07') && ($current_time <'08')) {
                    echo "Hoogste tijd om naar je werk te gaan";
                    }
                    
                    // Werk
                    if (($current_time >='08') && ($current_time <'17')) {
                    echo "Niet mopperen, gewoon werken";
                    }
                    
                    // Avond
                    if (($current_time >='17') && ($current_time <'24')) {
                    echo "Wat doe je hier nog, ga naar huis!";
                    }
                ?>
                </p>
            </div>
        </div>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-60687140-1', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
