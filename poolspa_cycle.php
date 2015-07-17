<?php
/**
* @Programmer: AES
* @Description: Run pool and spa cycle through this corn script.and update db present on securedshowing server.
**/

$curl = curl_init();
$orignal_property_id='XXX'; 

// Set some options - we are passing in a useragent too here
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'http://securedshowing.com/poolspa/ram/'.$orignal_property_id,
    CURLOPT_USERAGENT => 'Codular Sample cURL Request',
));
// Send the request & save response to $resp
$resp = curl_exec($curl);
echo '<pre>';
print_r($resp);

// Close request to clear up some resources
curl_close($curl);
?>
