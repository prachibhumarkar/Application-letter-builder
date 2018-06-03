<?php
// the message
$to="rambabburi@gmail.com";
$subject="Activattion Link";

$file ="admissionAcceptance.txt" ;
    $text = file_get_contents($file);
    $text = nl2br($text);
    echo $text; 
echo mail($to,$subject,$text);

?>



