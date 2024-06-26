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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<main class="container mt-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">NOME HOTEL</th>
                <th scope="col">DESCRIZIONE</th>
                <th scope="col">PARCHEGGIO</th>
                <th scope="col">VOTO</th>
                <th scope="col">DISTANZA DAL CENTRO</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
                <td>@mdo</td>
            </tr> -->
            <?php foreach ($hotels as $key => $value) { ?>
                <tr>
                    <td>
                        <?php echo $value['name'] ?>
                    </td>
                    <td>
                        <?php echo $value['description'] ?>
                    </td>
                    <td>
                        <?php echo $value['parking'] ? 'presente' : 'non presente' ?>
                    </td>
                    <td>
                        <?php echo $value['vote'] ?>
                    </td>
                    <td>
                        <?php echo $value['distance_to_center'] . ' km' ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>
</body>
</html>