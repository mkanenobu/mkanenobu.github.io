<!doctype html>
<html>
<!--/

　〃∩ ∧＿∧
　⊂⌒(　･ω･)
　　＼_っ⌒/⌒c
　　　　⌒ ⌒
-->

<head>
    <meta charset="utf-8">
    <title>mkane</title>
    <link rel="stylesheet" href="./mdl/material.min.css">
    <script src="./mdl/material.min.js"></script>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style> article p { font-size: 30px; }</style>
</head>
<body>
    <div id="wrapper">
        <nav>
            <?php
            require('nav.php');
            ?>
        </nav>

        <header>
            <h1>about</h1>
        </header>


        <article>
            <p>mkane</p>
            <p>I'm recording&amp;mixing engineer, producer, bassist</p>
        </article>

        <footer>
            <?php
                require('footer.php');
            ?>
        </footer>
    </div><!--/wrapper/-->
    <script src="node_modules/devtools-detect/index.js"></script>
    <script src="detect.js"></script>
</body>
</html>
