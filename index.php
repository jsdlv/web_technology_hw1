<?php

declare(strict_types=1);

require_once 'Driver.php';
require_once 'Stage.php';
require_once 'Ride.php';

$drivers = [
    new Driver('John Doe', 'Jane Doe', 1, 'Pro'),
    new Driver('Alice Smith', 'Bob Smith', 2, 'Pro'),
    new Driver('Charlie Brown', 'Lucy Brown', 21, 'Am'),
    new Driver('David Miller', 'Emma Miller', 22, 'Am'),
];

$stages = [
    new Stage('Stage 1', 10.5, 3),
    new Stage('Stage 2', 12.7, 2),
    new Stage('Stage 3', 5.4, 1),
    new Stage('Stage 4', 25.1, 4),
];

$rides = [
    new Ride($stages[0], $drivers[0], time(), 3600),
    new Ride($stages[0], $drivers[1], time() + 3600, 4000),
    new Ride($stages[0], $drivers[2], time() + 7200, 4600),
    new Ride($stages[0], $drivers[3], time() + 10800, 5200),
    new Ride($stages[1], $drivers[0], time() + 14400, 4200),
    new Ride($stages[1], $drivers[1], time() + 18000, 3900),
    new Ride($stages[1], $drivers[2], time() + 21600, 4800),
    new Ride($stages[1], $drivers[3], time() + 25200, 3600),
    new Ride($stages[2], $drivers[0], time() + 28800, 2000),
    new Ride($stages[2], $drivers[1], time() + 32400, 2100),
    new Ride($stages[2], $drivers[2], time() + 36000, 2300),
    new Ride($stages[2], $drivers[3], time() + 39600, 2200),
    new Ride($stages[3], $drivers[0], time() + 43200, 8200),
    new Ride($stages[3], $drivers[1], time() + 46800, 8700),
    new Ride($stages[3], $drivers[2], time() + 50400, 9100),
    new Ride($stages[3], $drivers[3], time() + 54000, 9400),
];

function sortByRideTime($a, $b)
{
    return $a->getRideTime() - $b->getRideTime();
}

usort($rides, 'sortByRideTime');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Web Technology HW1</title>
    <style>
        h1, h2, p, table {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }

        h1, h2, p, tr {
            text-align: center;
        }

        table, tr {
            border: 1px solid black;
            border-collapse: collapse;
        }

        tr:hover {
            background-color: aliceblue;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Stages</h1>

<?php foreach ($stages as $stage) { ?>

    <h2> <?= $stage->getStageName() ?></h2>

    <p>Stage length: <?= $stage->getStageLength() ?> km / Stage difficulty: <?= $stage->getStageDifficulty() ?></p>

    <table>
        <tr>
            <th>Car Number</th>
            <th>Driver / Co Driver</th>
            <th>Category</th>
            <th>Time</th>
        </tr>

        <?php foreach ($rides as $ride) { ?>
            <?php if ($stage->getStageName() === $ride->getStage()->getStageName()) { ?>

                <tr>
                    <td><?= $ride->getDriver()->getNumber() ?></td>
                    <td><?= $ride->getDriver()->getPilot() ?> / <?= $ride->getDriver()->getCoPilot() ?></td>
                    <td><?= $ride->getDriver()->getCategory() ?></td>
                    <td><?= date('G:i:s', $ride->getRideTime()) ?></td>
                </tr>

            <?php } ?>
        <?php } ?>

    </table>
<?php } ?>
</body>
</html>
