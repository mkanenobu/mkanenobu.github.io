<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>my works</title>
    <link rel="stylesheet" href="./mdl/material.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="./mdl/material.min.js"></script>
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
    ul {
        list-style: none;
        font-size: 16px;
    }
    li[sub] {
        margin: 22px auto 15px -22px;
        font-size: 24px;
    }
    </style>
</head>

<body>
<div id="wrapper">
    <nav>
        <?php
        require('nav.php');
        ?>
    </nav>

    <header>
        <h1>works</h1>
    </header>

<!--==================CONTENT===================-->

    <article>
        <section>
            <ul>
                <li sub>recording, mix</li>
                <li>Linus : &nbsp;'From attic'</li>
                <li>かねこきわの : &nbsp;'ストロベリーストロー'</li>
                <li>さとうもか : &nbsp;'Velvet teens' , 'Zzz'</li>
                <li>moka&amp;canon : &nbsp;'The Best Hits!'</li>
                <li>和問 : &nbsp;'生きる' , '境目'</li>
                <li>おーたけ＠じぇーむす &nbsp;'じぇーむずはひらがなでお願いします。'</li>
                <li>グッドラック : &nbsp;'3の思いと100の感情' , 'Entertainer'</li>
                <li>爆走コアラ : &nbsp;'二次元少女'</li>
                <li>DoLetThing : &nbsp;'Decoration of "Salada" '</li>
                <li>Brown rat : &nbsp;'It's my all'</li>

            </ul>
        </section>

        <section>
            <ul>
                <li sub>assistant</li>
                <li>さとうもか : &nbsp;'THE WONDERFUL VOYAGE'</li>
                <li>ふちなし : &nbsp;'積み木遊び、3段目'</li>

            </ul>
        </section>

        <section>
            <ul style="list-style:none;font-size:18px;">
                <li style="margin: 72px auto 15px -22px; font-size: 24px;">my songs</li>
                <li>
                    <a href="https://soundcloud.com/mitsuru-kanenobu" target="_new" style="color:white;">
                    SoundCloud Account
                    </a>
                </li>
            </ul>
        </section>

    </article>


    <footer>
        <?php
            require('footer.php');
        ?>
    </footer>
    </div><!--/wrapper/-->
</body>
</html>
