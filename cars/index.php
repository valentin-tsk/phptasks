<?
$pageTitle = "Task 2: Cars Fuel Economy";
include $_SERVER['DOCUMENT_ROOT'] . "/src/layout/header.php";

include $_SERVER['DOCUMENT_ROOT'] . "/src/classes/cars/Engine.php";
include $_SERVER['DOCUMENT_ROOT'] . "/src/classes/cars/GasolineConsumer.php";
include $_SERVER['DOCUMENT_ROOT'] . "/src/classes/cars/EngineTransport.php";
include $_SERVER['DOCUMENT_ROOT'] . "/src/classes/cars/Transport.php";
include $_SERVER['DOCUMENT_ROOT'] . "/src/classes/cars/WheelsTransport.php";
include $_SERVER['DOCUMENT_ROOT'] . "/src/classes/cars/Car.php";
include $_SERVER['DOCUMENT_ROOT'] . "/src/classes/cars/FuelEconomyCalculator.php";

$engineData = [
        'toyotaLight'=>[
                'power'=>150,
                'volume'=>2.0,
                'producer'=>'Japan'
        ],
        'ToyotaSport'=>[
            'power'=>300,
            'volume'=>4.0,
            'producer'=>'Japan'
        ],
        'FordLight'=>[
            'power'=>120,
            'volume'=>1.8,
            'producer'=>'America'
        ],
        'FordSport'=>[
            'power'=>250,
            'volume'=>3.8,
            'producer'=>'America'
        ],
];

$engines = [];

$carsData = [
    'LexusZ1' => [
            'engine'=>'ToyotaSport',
            'gasoline_type' => 92,
            'weight' => 1400,
            'capacity' => 800,
            'max_speed' => 250,
            'wheels_type' => 'sports'
    ],
    'Carina' => [
        'engine'=>'ToyotaSport',
        'gasoline_type' => 92,
        'weight' => 950,
        'capacity' => 400,
        'max_speed' => 190,
        'wheels_type' => 'sports'
    ],
    'Mustang' => [
        'engine'=>'FordSport',
        'gasoline_type' => 92,
        'weight' => 1200,
        'capacity' => 350,
        'max_speed' => 260,
        'wheels_type' => 'sports'
    ],
    'Focus' => [
        'engine'=>'FordLight',
        'gasoline_type' => 92,
        'weight' => 1100,
        'capacity' => 450,
        'max_speed' => 185,
        'wheels_type' => 'sports'
    ]
];

$cars = [];

foreach ($engineData as $key=>$item){
    $engines[$key] = new \PhpTasks\Cars\Engine($item['producer'], $item['power'], $item['volume']);
}

foreach ($carsData as $key=>$item){
    $cars[$key] = new \PhpTasks\Cars\Car(
            $engines[$item['engine']],
            $item['gasoline_type'],
            $item['weight'],
            $item['capacity'],
            $item['max_speed'],
            $item['wheels_type']
    );
}

$weight = isset($_POST['weight']) ? floatval($_POST['weight']) : 100;
$distance = isset($_POST['weight']) ? floatval($_POST['distance']) : 350;
$carName = isset($_POST['car']) ? $_POST['car'] : 'LexusZ1';

?>
    <form action="" method="post">
        <input type="text" name="weight" placeholder="cargo weight, kg" value="<?= $weight ?>">
        <input type="text" name="distance" placeholder="distance,km" value="<?= $distance ?>">
        <select name="car">
            <?foreach ($cars as $key=>$value){?>
                <option value="<?=$key?>" <?=($carName == $key) ? 'selected' : '';?>><?=$key?></option>
            <?}?>
        </select>
        <input type="submit" value="calculate">
    </form>
<?
$fuelEconomy = null;
try {
    $fuelEconomy = \PhpTasks\Cars\FuelEconomyCalculator::CalculateFuelEconomy($cars[$carName],$weight,$distance);?>
    <h2>Result economy : <?=$fuelEconomy?> litres/km</h2>
<? } catch (\Exception $e) { ?>
    <h2><?=$e->getMessage()?></h2>
<? } ?>
<?
include $_SERVER['DOCUMENT_ROOT'] . "/src/layout/footer.php";
?>