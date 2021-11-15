<!DOCTYPE html>
<html>
    <head>
        <title>Belajar PHP 2</title>
    </head>
    <body>
        <?php
        $nama = array("Satria"=>"XI RPL 1", "Arsyi"=>"XI RPL 2", "Dika"=>"XI RPL 3", "Evan"=>"XI RPL 4", "Fabian"=>"XI RPL 6", "Irfan"=>"XI RPL 6");
        foreach($nama as $x => $x_value){
            echo "nama = " . $x . " kelas = " . $x_value;
            echo "<br>";
        }
        ?>
    </body>
</html>