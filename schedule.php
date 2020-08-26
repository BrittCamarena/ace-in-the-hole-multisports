<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>    
    <!-- PHP included head elements -->
    <?php include_once("includes/head.php"); ?>
</head>

<body>
    <!-- PHP included navigation -->
    <?php include_once("includes/navigation.php"); ?>

    <header class="scheduleBanner">
        <div>
            <h1>Schedule</h1>
        </div>
    </header>

    <main>
        <section>
            <div class="wrapper">
                <h1>Mark Your Calendar</h1>
                
                <div class="scheduleIcon"></div>

                <p class="weatherLink"><a href="https://weather.com/weather/tenday/l/Portland+OR?canonicalCityId=c40ea029567346e5ac018cfad4d1949d051f3098aff5aa605e0009ef5576d804" target="_blank">Are you prepared? Click here to check the local weather forecast before heading out!</a></p>
                
                <div id="weatherFeed">
                    <a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-theme="original" data-basecolor="#ab1111" >PORTLAND WEATHER</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');</script>
                </div>
            </div>
        </section>

        <section>
            <div class="wrapper">
                <h2>Saturday Events</h2>
                
                <ul class="ulMain">
                    <li><strong>Long Course Triathlon</strong> - 7:00 AM</li>
                    <li><strong>Olympic Triathlon</strong> - 7:30 AM</li>
                    <li><strong>10K</strong> - 7:15 AM</li>
                    <li><strong>Half Marathon</strong> - 7:15 AM</li>
                </ul>
            </div>
        </section>

        <section>
            <div class="wrapper">
                <h2>Sunday Events</h2>
                
                <ul class="ulMain">
                    <li><strong>Sprint Triathlon</strong> - 8:00 AM</li>
                    <li><strong>Try-A-Tri</strong> - 8:20 AM</li>
                    <li><strong>Splash n' Dash</strong> - 12:00 PM</li>
                </ul>
            </div>
        </section>

        <section>
            <div class="wrapper">
                <h2 class="redHead">Packet Pick Up</h2>
                
                <p>All packet pick up will occur at Why Worry Racing, 123 NW Everett, Portland OR. Packet pick up hours: Thursday 8-5, Friday 9-noon. <strong>No day of event packet pick up.</strong></p>
            </div>
        </section>
    </main>

    <!-- PHP included footer -->
    <?php include_once("includes/footer.php"); ?>    
</body>
</html>