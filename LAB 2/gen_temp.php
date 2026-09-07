<?php

$file = __DIR__ . DIRECTORY_SEPARATOR . "data.json";

if (file_exists($file)) {
    $jsonData = file_get_contents($file);
    $data = json_decode($jsonData, true);

    if (!is_array($data)) {
        $data = [];
    }
} else {
    $data = [];
}

$temperature = rand(200, 400) / 10;

$dateTime = date("Y-m-d H:i:s");

$newReading = [
    "temperature" => $temperature,
    "datetime" => $dateTime
];

$data[] = $newReading;

if (count($data) > 100) {
    $data = array_slice($data, -100);
}

$result = file_put_contents(
    $file,
    json_encode($data, JSON_PRETTY_PRINT)
);

if ($result !== false) {
    echo "Temperature generated successfully.\n";
    echo "Temperature: " . $temperature . " °C\n";
    echo "Date and Time: " . $dateTime . "\n";
} else {
    echo "Error: Could not save temperature data.\n";
}

?>