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

?>

<!DOCTYPE html>
<html>
<head>
    <title>Temperature Monitor</title>
</head>

<body>

    <h1>Temperature Readings</h1>

    <?php if (empty($data)): ?>

        <p>No temperature readings available.</p>

    <?php else: ?>

        <table border="1">

            <tr>
                <th>Serial No.</th>
                <th>Temperature (°C)</th>
                <th>Date and Time</th>
            </tr>

            <?php foreach ($data as $index => $reading): ?>

                <tr>
                    <td>
                        <?php echo $index + 1; ?>
                    </td>

                    <td>
                        <?php
                        echo htmlspecialchars(
                            $reading["temperature"] ?? "N/A"
                        );
                        ?>
                    </td>

                    <td>
                        <?php
                        echo htmlspecialchars(
                            $reading["datetime"] ?? "N/A"
                        );
                        ?>
                    </td>
                </tr>

            <?php endforeach; ?>

        </table>

    <?php endif; ?>

</body>
</html>