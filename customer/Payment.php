<?php

// Include the PHP QR Code library
require 'QR code.php';

// Generate the QR code
$url = 'https://watchbetter.com';
$size = 100;
$qrcode = new QRCode($url, $size);

// Save the QR code to a file
$qrcode->save('C:\Users\Zeenal Bhalodiya\Downloads\image Qr.png');

// Get the QR code image data
$qrcodeData = file_get_contents('C:\Users\Zeenal Bhalodiya\Downloads\image Qr.png');

// Display the QR code image data
echo '<img src="C:\Users\Zeenal Bhalodiya\Downloads\image Qr.png",' . base64_encode($qrcodeData) . '" alt="QR code">';

?>