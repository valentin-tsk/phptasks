<?

namespace PhpTasks\Cars;

use \Exception;

/**
 * Class FuelEconomyCalculator
 * @package PhpTasks\Cars
 */
class FuelEconomyCalculator
{
    /**
     * @param Car $car
     * @param $weight
     * @param $distance
     * @return float|int
     * @throws Exception
     */
    public static function CalculateFuelEconomy(Car $car, $weight, $distance)
    {
        if (floatval($weight) > floatval($car->getCapacity())) {
            throw new Exception('car cant carry that much');
        }

        if (floatval($weight < 0) || floatval($distance < 0)) {
            throw new Exception('enter correct positive weight and distance');
        }

        //i dont really have to know the formula, just random calculations
        $weightCoefficient = $weight + $car->getWeight() / $car->getEngine()->getPower();
        $volume = $car->getEngine()->getVolume();
        return ($distance / ($weightCoefficient - $volume));

    }
}