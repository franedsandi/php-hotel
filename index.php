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
  if (isset($_GET['parking']) && isset($_GET['vote'])) {
    $filteredHotels = array_filter($hotels, function ($hotel) {
        return ($hotel['parking'] == ($_GET['parking'] === 'true') && $hotel['vote'] >= intval($_GET['vote']));
    });
} elseif (isset($_GET['parking'])) {
    $filteredHotels = array_filter($hotels, function ($hotel) {
        return ($hotel['parking'] == ($_GET['parking'] === 'true'));
    });
} elseif (isset($_GET['vote'])) {
    $filteredHotels = array_filter($hotels, function ($hotel) {
        return ($hotel['vote'] >= intval($_GET['vote']));
    });
} else {
    $filteredHotels = $hotels;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Hotel Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h1>Hotel Information</h1>
        <form method="get" action="#">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parking" id="parkingYes" value="true" <?php if(isset($_GET['parking']) && $_GET['parking'] === 'true') echo 'checked' ?>>
                <label class="form-check-label" for="parkingYes">With Parking</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="parking" id="parkingNo" value="false" <?php if(isset($_GET['parking']) && $_GET['parking'] === 'false') echo 'checked' ?>>
                <label class="form-check-label" for="parkingNo">No Parking</label>
            </div>
            <div class="form-group">
                <label for="vote">Filter by Vote: </label>
                <input type="number" name="vote" id="vote" min="1" max="5" value="<?php echo isset($_GET['vote']) ? $_GET['vote'] : '' ?>">
                <span style="font-size: 25px;"> &#8594; 5</span> 
            </div>
            <button type="submit" class="btn btn-primary">Apply Filters</button>
        </form>

        <div class="bd-example">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance to Center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($filteredHotels as $hotel) {
                            echo '<tr>';
                            echo '<th scope="row">' . $hotel['name'] . '</th>';
                            echo '<td>' . $hotel['description'] . '</td>';
                            echo '<td>' . ($hotel['parking'] ? 'Yes' : 'No') . '</td>';
                            echo '<td>' . $hotel['vote'] . '</td>';
                            echo '<td>' . $hotel['distance_to_center'] . ' Km.' . '</td>';
                            echo '</tr>';
                        }
                    ?> 
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>