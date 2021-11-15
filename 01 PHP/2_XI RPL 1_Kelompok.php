<!DOCTYPE html>
<html>
    <head>
        <title>Belajar PHP 2</title>
    </head>
    <body>
        <?php
        echo "<h3>Perulangan</h3>"; 

        $mydate=getdate(date("U"));
        echo date("d-m-Y H:i:s A", time()) . "<br>";
        for($a = 5; $a >= 1; $a--) {
            for($b = 1; $b <= $a; $b++) {
                echo "*";
                if($b < $a) {
                echo " ";
                }
            }
            echo "<br/>";
            }
        ?>
    </body>
</html>