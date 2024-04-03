<html>
    <head>
    </head>
    <body>
        <h1>Números de l'100 al 0 en PHP</h1>
        <?php
            for ($i = 100; $i >= 0; $i--) {
                if ($i == 0){
                    echo "<b><u><b><i>El número és: $i </i></b></u><br/>";
                }
                elseif ($i%2 == 0){
                    echo "<b>El número és: $i </b><br/>";
                }
                else {
                    echo "<i>El número és: $i </i><br/>";
                }                
            }
        ?>
    </body>
</html>
