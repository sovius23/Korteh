<?php
include_once 'src/YandexMap.php';
include_once 'src/Coordinate.php';
YandexMap::setApiMAp();

?>

    <body>
    <?php YandexMap::setMap(); ?>

    </body>

<?php
$random = new Coordinate();
$random->createRandom();