
<?php 

if (isset($_REQUEST['submit'])) {
    $xml = new DOMDocument();
    $xml->load("cpss.xml");
    $roottag = $xml->getElementsByTagName("int")->item(0);
    $getdata = $xml->   createElement("data");
    $aTag = $xml->createElement("a".$_REQUEST['a']);
    $bTag = $xml->createElement("a".$_REQUEST['b']);

        $getdata->appendChild($aTag);
        $getdata->appendChild($bTag);
        $roottag->appendChild($getdata);
        $xml->save("cpss.xml");
    # code...
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

    <input type="text" name="a">
    <input type="text" name="b">
    <input type="submit" placeholder="Kirim" name="submit">
    </form>    

</body>
</html>

