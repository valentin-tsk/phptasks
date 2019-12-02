<?

namespace PhpTasks\Sort;

/**
 * Class Sorter
 * @package PhpTasks\Sort
 */
class Sorter
{
    /**
     * @var Timer
     */
    private $timer;

    /**
     * Sorter constructor.
     */
    public function __construct()
    {
        $this->timer = new Timer();
    }

    /**
     * @param array $array
     * @param string $algorithmName
     * @return array
     */
    public function getSortTime($array, $algorithmName)
    {

        $result = [
            'sorted' => [],
            'time' => []
        ];

        $this->timer->startCount();

        switch ($algorithmName) {
            case 'bubble':
                $result['sorted'] = $this->bubbleSort($array);
                break;
            case 'quick':
                $result['sorted'] = $this->quickSort($array);
                break;
            case 'insertion':
                $result['sorted'] = $this->insertionSort($array);
                break;
            case 'php':
                //php uses quicksort implementation
                sort($array, SORT_NUMERIC);
                $result['sorted'] = $array;
                break;
            default:
                $this->timer = null;
                throw new Exception('wrong algorithm name');
        }

        $result['time'] = $this->timer->getTime();

        return $result;
    }

    /**
     * @param $arraySize
     * @return array
     */
    public function getRandomArray($arraySize)
    {
        $array = [];

        for ($i = 0; $i < $arraySize; $i++) {
            $array[] = mt_rand(-10000, 10000);
        }

        return $array;
    }

    /**
     * @param array $array
     * @return array
     */
    protected function bubbleSort($array)
    {
        $counter = count($array);
        do {
            $swapped = false;
            for ($i = 0; $i < $counter - 1; $i++) {
                if ($array[$i] > $array[$i + 1]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$i + 1];
                    $array[$i + 1] = $temp;
                    $swapped = true;
                }
            }
            $counter--;
        } while ($swapped);
        return $array;
    }

    /**
     * @param array $array
     * @return array
     */
    protected function quickSort($array)
    {
        if (count($array) < 2) {
            return $array;
        }

        $splitElement = $array[0];

        $arLeft = [];
        $arRight = [];


        for ($i = 1; $i < count($array); $i++) {
            if ($array[$i] < $splitElement)
                $arLeft[] = $array[$i];
            else
                $arRight[] = $array[$i];
        }

        return array_merge($this->quickSort($arLeft), [$splitElement], $this->quickSort($arRight));
    }

    /**
     * @param array $array
     * @return array
     */
    function insertionSort($array)
    {

        for ($i = 0; $i < count($array); $i++) {
            $val = $array[$i];
            $j = $i - 1;
            while ($j >= 0 && $array[$j] > $val) {
                $array[$j + 1] = $array[$j];
                $j--;
            }
            $array[$j + 1] = $val;
        }

        return $array;
    }

}