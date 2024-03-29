<?
$pageTitle = "Task 1: sorts efficiency";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/layout/header.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/classes/sort/Sorter.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/classes/sort/Timer.php";

$sorter = new \PhpTasks\Sort\Sorter();
$algorithms = ['insertion', 'quick', 'bubble', 'php'];

$arrayLength = isset($_POST['array_length']) ? abs(intval($_POST['array_length'])) : 500;
$result = [
    'status' => true,
    'values' => []
];

if ($arrayLength < 2) {
    $result['status'] = false;
} else {
    $randomArray = $sorter->getRandomArray($arrayLength);
    foreach ($algorithms as $algorithmName) {
        $sortResult = $sorter->getSortTime($randomArray, $algorithmName);
        $result['values'][$algorithmName] = $sortResult;
    }
}
?>
    <form action="" method="post">
        <input type="text" name="array_length" placeholder="array length" value="<?= $arrayLength ?>">
        <input type="submit" value="calculate">
    </form>
<? if ($result['status']) { ?>
    <h2>Results for your length(<?= $arrayLength ?>) in microseconds</h2>
    <table border="1px">
        <tbody>
        <? foreach ($result['values'] as $algorithmName => $value) { ?>
            <tr>
                <td><?= $value['time'] ?></td>
                <td><?= $algorithmName ?></td>
            </tr>
        <? } ?>
        </tbody>
    </table>
<? } else { ?>
    <h2>Nothing to sort, try bigger array</h2>
<? } ?>
<?
require_once $_SERVER['DOCUMENT_ROOT'] . "/src/layout/footer.php";
?>