<?php
// Handle JSON data in PHP

// Example array
$data = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Encode array to JSON
$json_data = json_encode($data);
echo "JSON encoded data:<br>";
echo $json_data . "<br><br>";

// Decode JSON to array
$decoded_data = json_decode($json_data, true);
echo "Decoded JSON data:<br>";
print_r($decoded_data);
?>
