<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <title>plugin presets</title>
    <link rel="stylesheet" href="./mdl/material.min.css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src="./mdl/material.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style type="text/css">
    .download a {
            color: white;
        }

    .download a:link, .transition a:visited {
        -webkit-transition: 0.15s ease-in-out;
           -moz-transition: 0.15s ease-in-out;
             -o-transition: 0.15s ease-in-out;
                transition: 0.15s ease-in-out;
    }

    .download a:hover {
            color: #e6e6e6;
    }

    .md5sum {
            font-family: monospace;
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
        <h1>free audio plugin preset</h1>
    </header>

    <article>
        <section>
            <ul style="list-style:none;font-size: 21px;">
                <li style="margin: 0 auto 60px -28px; font-size: 24px;">Original presets and converted factory presets for ProTools</li>
                <li>These presets made with PT 12.4.0 Native Mac OS 10.11</li>
                <li class="download" style="margin-top: 22px;"><a href="https://1drv.ms/u/s!AluUfaaxJVP4nRwQg69OeaY8FttQ" target="_new" >/** download here ** /</a></li>
                <li class="md5sum">md5 checksum : 6060323a3dfa3254a3c5cc25ca4582e2</li>
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
