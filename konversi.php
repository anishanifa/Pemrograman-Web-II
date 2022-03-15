<!DOCTYPE html>
<html>
    <head>
        <title>Konversi Nilai</title>
    </head>
    <body>
        <form method = "get">
            <input type = "number" name = "nilai" min="0" max="100">
            <input type = "submit">
        </form>
        <?php
            $nilai = $_GET["nilai"];

            if ($nilai <= 50)
            {
                echo "E";
            }
            else if ($nilai <= 59)
            {
                echo "D";
            }
            else if ($nilai <= 69)
            {
                echo "C";
            }
            else if ($nilai <= 79)
            {
                echo "B";
            }
            else if ($nilai >= 80)
            {
                echo "A";
            }
        ?>
    </body>
</html>