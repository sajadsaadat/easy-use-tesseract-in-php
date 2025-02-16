<?php

require_once 'autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

function extractDataFromImage( $img ){

    if( empty( $img ) )
        return 'Invalid Argument!';

    $ocr     = new TesseractOCR('img/'.$img );
    $text    = $ocr->run();

    $output  = '<strong>Image: </strong><br><img src="img/'.$img.'" style=" border-radius: 6px; margin-top: 10px; box-shadow: 0 0 10px 0 #00000063; ">';
    $output .= '<p><strong>Text: </strong>'.$text.'</p>';
    // $output .= '<p><strong>Text: </strong>'.shell_exec("tesseract img/$img stdout");'</p>';

    return $output;

}

echo "<strong>Youtube Channel: @WebcasterAcademy </strong><br><br><br>";

// echo extractDataFromImage( 'number1.png' );
// echo extractDataFromImage( 'number2.jpg' );
// echo extractDataFromImage( 'text1.png' );
// echo extractDataFromImage( 'text2.png' );
// echo extractDataFromImage( 'text3.png' );
echo extractDataFromImage( 'text4.png' );
