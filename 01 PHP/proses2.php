<?php
    if(isset($_GET['Nama']) AND isset($_GET['E-Mail']))
    {
        $nama = $_GET['Nama'];
        $email = $_GET['E-Mail'];
    }
    else
    {
        echo "Maaf, anda harus mengakses halaman ini dari form.html<br></br>";
    }

    if (!empty($nama))
    {
        echo "Nama : $nama <br /> Email : $email";
    }
    else
    {
        die("Maaf, anda harus mengisi nama");
    }
    ?>