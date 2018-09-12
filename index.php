

<?php
    require_once 'inc/Country.inc.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Skeleton Class Test 2</title>
    </head>
    <body>
<?php
        $denmark = new Country('DK', 'Danmark',
                               'Danmark', 'DNK', 1);
        $sweden = new Country('SE', 'Sverige',
                               'Sverige', 'SWE', 2);
        print($denmark);
        print($sweden);

        print_r($denmark);
        print_r($sweden);

        $denmark->setNumcode(65535);
        print($denmark);
?>
    </body>
</html>
