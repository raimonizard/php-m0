<html>
    <head>
    </head>
    <body>
        <?php
            if(isset($_REQUEST['num'])) {
                $num = $_REQUEST['num'];
                echo "<h2>Taula de multiplicar per: " . $num . "</h2>";
                
                for($i = 0; $i <= 10; $i++) {
                    echo $num . " * " . $i . " = " . $num * $i . "<br/>";
                }

            } else {
                echo "No hi ha taula de multiplicar per aquest valor passat per GET.";
            }
        ?>
        <br/>
        <a href = "exercici05.php">Anar enrera</a>
    </body>

</html>