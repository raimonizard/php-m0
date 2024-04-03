<html>
    <head>
    </head>
    <body>
        <h1>Links a la wikipedia</h1>
        <?php
            for ($i = 0; $i <= 10; $i++) {
                echo "<a href='https://es.wikipedia.org/wiki/" . $i . "'>https://es.wikipedia.org/wiki/" . $i . "</a><br/>";
            }
        ?>
    </body>
</html>
