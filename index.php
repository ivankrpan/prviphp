<!DOCTYPE html>
<html>
<head>
    <title>Prvi PHP</title>
    <meta charset="utf-8"
</head>

<body>
<h1>Prvi PHP</h1>
<?php
    echo('Ovo je prije odlomka<br>');
    echo('<br>');
    echo('Super, jos cemo dodati');
    echo('<br>');
    echo(date ('d.m.Y'));
    echo('<br>');
    $ocjena=5;
    echo('<br>Vaša ocjena je:' . $ocjena);
    echo('<br>');
    $sifra=23524;
    echo('<br>Vaša šifra je:' . $sifra);
?>
<p>
    Ovo je odlomak
</p>

</body>
</html>