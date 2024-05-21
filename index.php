<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];

    if (isset($_GET['parking'])) {
        $hotels = array_filter($hotels, function($hotel) {
            return $hotel['parking'] === true;
        });
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-hotel</title>
    
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-striped">
            <thead class="table-danger">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Parking</th>
                    <th>Vote</th>
                    <th>Distance to Center (km)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) {
                        echo "<tr>";
                            echo "<td>" . ($hotel['name']) . "</td>";
                            echo "<td>" . ($hotel['description']) . "</td>";
                            echo "<td>" . ($hotel['parking'] ? '&check;' : '&cross;') . "</td>";
                            echo "<td>" . ($hotel['vote']) . "</td>";
                            echo "<td>" . ($hotel['distance_to_center']) . "</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
        <form method="GET" action="index.php" class="mt-5">
            <div>
                <input type="checkbox" name="parking" id="parking">
                <label for="parking">Con parcheggio</label>
            </div>
            <button type="submit" class="btn btn-outline-secondary mt-2">Cerca</button>
        </form>
    </div>
</body>
</html>