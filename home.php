<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <?php require 'lib.php' ?>
    <title>
        <?php echo $links[$_SERVER['REQUEST_URI']] ?>
    </title>
</head>

<body>
    <header class="header">
        <?php
        echo require("nav.php");
        ?>
    </header>

    <h1 class="page-title">
        <?php echo $name . $links[$_SERVER['REQUEST_URI']] . " page" ?>
    </h1>

    <article class="blog-post">
        <h2 class="section-title">Mountains and Their Majesty</h2>
        <p class="text">
            Nestled within the embrace of the earth, mountains stand as ancient sentinels of nature's enduring grandeur.
            Their colossal peaks pierce the heavens, rising majestically towards the skies, while their majestic slopes
            cradle ecosystems teeming with diverse life.
            The essence of mountains is tranquility interrupted only by the symphony of the wild. With each step, the
            ground beneath echoes with tales of resilience, solitude, and breathtaking vistas. A pilgrimage to these
            monumental giants is a journey into the heart of serenity and adventure.
            As the golden sun kisses the mountain peaks, a serene glow illuminates the world. The air, crisp and pure,
            carries whispers of secrets untold. There's an inexplicable allure that draws wanderers, explorers, and
            dreamers to seek solace in the rugged embrace of the mountains.
        </p>
        <img src="<?php echo date("s") % 2 == 0 ? $url1 : $url3 ?>"
            alt="<?php echo date("s") % 2 == 0 ? $url1 : $url3 ?>" class="image">
        <p class="text">
            Mountain ranges, with their rugged contours, tell stories of geological epochs and ever-changing landscapes.
            Weathered rock formations stand as monuments to time's unwavering passage, while alpine lakes glisten like
            sapphire jewels, reflecting the boundless beauty above.
            In the realm of the mountains, one can discover an abundance of flora and fauna, each species carving its
            niche in this vertical world. From the elusive mountain goats that dance along the precipitous cliffs to the
            hardy alpine flowers that paint the landscape with vibrant hues, life in the mountains is a delicate balance
            of resilience and grace.
        </p>
        <ul class="list">
            <?php
            $list = array("Mount", "New", "Yes");
            $li = "";
            foreach ($list as $item) {
                $li .= "<li class='text'>{$item}</li>";
            }
            echo $li;
            ?>
        </ul>
        <p class="text">
            It's here, among these towering giants, that hikers forge their own path and climbers defy gravity's grasp.
            Mountain adventurers breathe the thin, invigorating air as they ascend to summit and, in those quiet moments
            at the peak, they discover an unparalleled sense of accomplishment and a connection to the cosmos.
            The mountains hold within them a deep-rooted magic—an enchantment that captivates the human spirit. They
            beckon us to explore, to reflect, and to be humbled by the Earth's natural wonders. Whether cloaked in snow,
            cloaked in green, or cloaked in the warm hues of autumn, mountains invite us to embrace the extraordinary
            beauty of our planet.
        </p>
    </article>

    <article class="blog-post">
        <h2 class="section-title">The Magic of the Ocean</h2>
        <p class="text">
            The oceans, Earth's vast and enigmatic cradle of life, stretch far and wide, covering more than two-thirds
            of the planet's surface. These immense bodies of water hold within them an abundance of secrets, mysteries,
            and boundless beauty.
            As the sun rises over the horizon, the world's oceans come to life, glistening under the warm embrace of
            dawn. The rhythmic ebb and flow of the tides are a testament to the ocean's unwavering connection to the
            moon, a celestial dance that has continued for eons.
        </p>
        <ul class="list">
            <li class="text">Mountain</li>
            <li class="text">Mountain</li>
            <li class="text">Mountain</li>
            <li class="text">Mountain</li>
        </ul>
        <p class="text">

            Beneath the surface lies a world of mesmerizing diversity, with coral reefs teeming with a vibrant spectrum
            of
            marine life. From the graceful movements of sea turtles to the vibrant colors of tropical fish, the ocean's
            depths are an underwater paradise where creatures of all sizes and shapes coexist.
            But the ocean is not merely a sanctuary for marine life; it is also a source of inspiration and
            contemplation
            for countless individuals. The sound of waves crashing on the shore is a soothing lullaby, a reminder of the
            ocean's enduring power and beauty.
        </p>
        <img src="<?php echo date("s") % 2 == 0 ? $url2 : $url4 ?>"
            alt="<?php echo date("s") % 2 == 0 ? $url2 : $url4 ?>" class="image">
        <p class="text">

            The ocean's vastness and depth have fueled the human imagination for centuries. Sailors and explorers have
            embarked on epic journeys to chart uncharted waters, while poets and writers have penned verses and stories
            inspired by the ocean's boundless horizons.
            Yet, the oceans are not without their challenges. Human activities, such as pollution and overfishing, have
            placed these delicate ecosystems at risk. The need for conservation and stewardship is greater than ever, as
            we
            strive to preserve the oceans' pristine beauty for future generations.
            In every wave and every ripple, the oceans hold stories of adventure, exploration, and profound connection
            to
            the natural world. They are a testament to the Earth's resilience and the mysteries that continue to unfold
            beneath their surface. The oceans are not just a part of our planet; they are a part of our shared human
            experience, a source of wonder, and a call to protect the delicate balance of life they sustain.
        </p>
    </article>

    <footer class="footer">
        Email: favorxog@gmail.com | Author: Andrei Glushkov
        Сформировано:
        <?php echo date('d.m.Y в H:i:s'); ?>
    </footer>
</body>

</html>