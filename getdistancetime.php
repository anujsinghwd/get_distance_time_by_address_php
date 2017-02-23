<?php


    $addressFrom = 'Input origin Here';
    $addressTo = 'Input Destination Here';
    $formattedAddrFrom = str_replace(' ','+',$addressFrom);
    $formattedAddrTo = str_replace(' ','+',$addressTo);


    echo $geocode = file_get_contents('https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins='.$formattedAddrFrom.'&destinations='.$formattedAddrTo.'&key=YourKey');
    echo "<br>";
    $outputTo = json_decode($geocode);
    print_r($outputTo);

}
?>
