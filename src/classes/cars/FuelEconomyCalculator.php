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
        } else if (floatval($weight < 0) || floatval($distance < 0)) {
            throw new Exception('enter correct positive weight and distance');
        } else {
            //i dont really have to know the formula, just random calculations
            return ($distance / (($weight + $car->getWeight() / $car->getEngine()->getPower()) - $car->getEngine()->getVolume()));
        }
    }
}