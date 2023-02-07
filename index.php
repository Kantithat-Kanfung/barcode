<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barcode - ทดสอบ</title>
</head>
<body>
    <?php
        require 'vendor/autoload.php';
        
        // This will output the barcode as HTML output to display in the browser
        $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
        echo $generator->getBarcode('081231723897', $generator::TYPE_CODE_128);
        echo '081231723897';
    ?>
</body>
</html>