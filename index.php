<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- PHP included head elements -->
    <?php include_once("includes/head.php"); ?>
    <!-- Stylesheets and scripts for JS gallery -->
    <link rel="stylesheet" type="text/css" href="css/jsGallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0/css/all.min.css">
    <script src="scripts/jsGallery.js"></script>
</head>

<body>
    <!-- PHP included navigation -->
    <?php include_once("includes/navigation.php"); ?>

    <header>
        <div class="slider-wrapper" id="slider">
            <ul class="slider-img">
            <li>
                <div class="slider-caption">
                    <h1>perseverance</h1>
                </div>

                <img
                src="images/jsGallery/img1.jpg"
                alt="Top-down view of a swimmer in water"
                />
            </li>
            <li>
                <div class="slider-caption">
                    <h1>strength</h1>
                </div>

                <img
                src="images/jsGallery/img2.jpg"
                alt="Group of bikers taveling on a track"
                />
            </li>
            <li>
                <div class="slider-caption">
                    <h1>endurance</h1>
                </div>
                
                <img
                src="images/jsGallery/img3.jpg"
                alt="Front view of a runner sprinting on a track"
                />
            </li>
            <li>
                <div class="slider-caption">
                    <h1>community</h1>
                </div>

                <img
                src="images/jsGallery/img4.jpg"
                alt="Three people standing together arm in arm"
                />
            </li>
            </ul>
        </div>
    </header>

    <main>
        <section>
            <div class="wrapper">
                <h1>Events for Every Body</h1>

                <div class="indexIcon"></div>

                <p>Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, gender identifications and cultural backgrounds. We offer <strong>Events for Every Body!</strong></p>
            </div>
        </section>

        <section>
            <div class="wrapper">
                <h1 class="redHead">What We're About</h1>

                <p>The Annual Ace in the Hole Multisport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>
                <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
            </div>
        </section>

        <section>
            <div class="wrapper">
                <h1>Stay in the Know</h1>
                <p>We will post alerts on the website if any changes to events or scheduling occur. However, you are not limited to checking back here. You can also follow us on Twitter and Facebook the get the latest scoop on our activity!</p>

                <div id="twitterFeed"><a class="twitter-timeline" data-width="450" data-height="800" data-theme="light" href="https://twitter.com/pcccas222?ref_src=twsrc%5Etfw">Tweets by pcccas222</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> </div>
                <div id="facebookFeed"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline&width=450&height=750&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="450" height="750" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
                <div id="facebookFeedTablet"><iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FCas222Aceinthehole-110661963841617%2F&tabs=timeline&width=350&height=750&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="350" height="750" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe></div>
                
                <div style="clear:both;"></div>

                <!-- Mobile Social Media buttons -->
                <div id="socialMediaButtons">
                    <div id="twitterFeedButton"><a href="https://twitter.com/pcccas222" target="_blank">Twitter</a></div>
                    <div id="facebookFeedButton"><a href="https://www.facebook.com/Cas222Aceinthehole-110661963841617/" target="_blank">Facebook</a></div>
                </div>
            </div>
        </section>
    </main>

    <!-- PHP included footer -->
    <?php include_once("includes/footer.php"); ?>    
</body>
</html>